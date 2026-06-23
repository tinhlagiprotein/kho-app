<?php
header('Content-Type: application/json');
header('Cache-Control: no-cache, must-revalidate');
header('Access-Control-Allow-Origin: *');

$url     = 'https://enabling-hound-152594.upstash.io';
$token   = 'gQAAAAAAAlQSAAIgcDFkOThiY2RlOTAzMTk0YjZiOWFkMjU5ZWU4YzY1YTUyMg';
$timeout = 60;

function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))        return $_SERVER['HTTP_CLIENT_IP'];
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return trim(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
    return $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
}

function upstash($url, $token, array $cmd) {
    $ch = curl_init($url . '/' . implode('/', array_map('rawurlencode', $cmd)));
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $token],
        CURLOPT_TIMEOUT        => 5,
    ]);
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res, true);
}

$sid = 'ol:' . substr(md5(getUserIP() . ($_SERVER['HTTP_USER_AGENT'] ?? '')), 0, 16);

upstash($url, $token, ['SETEX', $sid, (string)$timeout, '1']);

// ✅ Dùng SCAN thay KEYS
$scan  = upstash($url, $token, ['SCAN', '0', 'MATCH', 'ol:*', 'COUNT', '1000']);
$count = isset($scan['result'][1]) ? count($scan['result'][1]) : 1;

echo json_encode(['count' => max(1, $count), 'status' => 'success']);