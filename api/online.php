<?php
// api/online.php - Vercel KV (Redis) online counter
// Env vars tự động inject bởi Vercel KV: KV_REST_API_URL, KV_REST_API_TOKEN

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache');

$kv_url   = getenv('KV_REST_API_URL');
$kv_token = getenv('KV_REST_API_TOKEN');

if (!$kv_url || !$kv_token) {
    echo json_encode(['online' => rand(3, 12), 'demo' => true]);
    exit;
}

// Tạo session ID duy nhất cho user (từ IP + UA)
$sid = 'online:' . md5(
    ($_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'x')
    . ($_SERVER['HTTP_USER_AGENT'] ?? '')
);

// SET key với TTL 35 giây (ping mỗi 30s từ client)
function kv_request($url, $token, $path, $method = 'GET', $body = null) {
    $ch = curl_init($url . $path);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => [
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json',
        ],
        CURLOPT_CUSTOMREQUEST  => $method,
        CURLOPT_TIMEOUT        => 5,
    ]);
    if ($body !== null) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
    }
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res, true);
}

// SET session key với EX 35s
kv_request($kv_url, $kv_token, '/set/' . urlencode($sid) . '/1?ex=35', 'GET');

// KEYS pattern để đếm (dùng SCAN thực tế hơn nhưng KEYS ok cho traffic nhỏ)
$result = kv_request($kv_url, $kv_token, '/keys/online:*', 'GET');
$count  = isset($result['result']) ? count($result['result']) : 1;

echo json_encode(['online' => max(1, $count)]);
