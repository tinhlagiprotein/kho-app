<?php $page_title = "Cài bằng phần mềm SEND TO FILE"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $page_title ?></title>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  :root {
    --bg: #f0f2f7; --card: #fff; --border: #e4e7ef;
    --blue: #1a73e8; --blue-light: #e8f0fe;
    --green: #16a34a; --green-light: #dcfce7;
    --orange: #ea580c; --orange-light: #fff7ed;
    --text: #1a1d2e; --muted: #6b7280;
    --font: 'Be Vietnam Pro', 'Segoe UI', sans-serif;
    --radius: 16px; --shadow: 0 2px 16px rgba(0,0,0,0.07);
  }
  body { background: var(--bg); font-family: var(--font); color: var(--text); min-height: 100vh; }

  .hero {
    background: linear-gradient(135deg, #1a1d2e 0%, #0f4c8a 60%, #1a73e8 100%);
    padding: 36px 20px 30px; text-align: center; color: #fff;
  }
  .hero-badge { display: inline-flex; align-items: center; gap: 6px; background: rgba(255,255,255,0.15); border-radius: 20px; padding: 5px 14px; font-size: 11px; font-weight: 700; letter-spacing: 0.8px; text-transform: uppercase; margin-bottom: 12px; }
  .hero h1 { font-size: clamp(20px,5vw,28px); font-weight: 900; margin-bottom: 8px; }
  .hero p { font-size: 13px; opacity: 0.75; max-width: 480px; margin: 0 auto; line-height: 1.6; }

  .back-btn { display: inline-flex; align-items: center; gap: 6px; margin: 16px 20px 0; background: var(--card); border: 1px solid var(--border); border-radius: 10px; padding: 8px 14px; font-size: 12px; font-weight: 700; color: var(--blue); text-decoration: none; box-shadow: var(--shadow); }
  .back-btn:hover { background: var(--blue-light); }

  .content { max-width: 680px; margin: 0 auto; padding: 16px 16px 60px; }

  /* NOTE BOX */
  .note-box { background: var(--orange-light); border: 1.5px solid #fed7aa; border-radius: var(--radius); padding: 14px 16px; margin-bottom: 20px; display: flex; gap: 10px; }
  .note-box .note-icon { font-size: 20px; flex-shrink: 0; }
  .note-box p { font-size: 13px; color: #9a3412; line-height: 1.6; font-weight: 500; }

  /* WARNING BOX */
  .warn-box { background: #fef2f2; border: 1.5px solid #fecaca; border-radius: var(--radius); padding: 14px 16px; margin: 14px 0; display: flex; gap: 10px; }
  .warn-box .warn-icon { font-size: 18px; flex-shrink: 0; }
  .warn-box p { font-size: 12.5px; color: #991b1b; line-height: 1.6; font-weight: 600; }

  /* STEPS */
  .steps { display: flex; flex-direction: column; gap: 12px; }
  .step { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 16px; box-shadow: var(--shadow); display: flex; gap: 14px; }
  .step-num { width: 36px; height: 36px; min-width: 36px; border-radius: 50%; background: linear-gradient(135deg, var(--blue), #4f46e5); color: #fff; font-size: 15px; font-weight: 900; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .step-body h3 { font-size: 13.5px; font-weight: 800; color: var(--text); margin-bottom: 6px; }
  .step-body p { font-size: 13px; color: var(--muted); line-height: 1.65; }
  .step-body strong { color: var(--text); font-weight: 700; }

  .chip { display: inline-flex; align-items: center; gap: 4px; background: var(--blue-light); color: var(--blue); border-radius: 8px; padding: 3px 9px; font-size: 11.5px; font-weight: 700; white-space: nowrap; }
  .chip-green { background: var(--green-light); color: var(--green); }

  .tip-box { background: var(--green-light); border: 1.5px solid #86efac; border-radius: var(--radius); padding: 14px 16px; margin-top: 20px; display: flex; gap: 10px; }
  .tip-box p { font-size: 13px; color: #166534; line-height: 1.6; font-weight: 500; }
</style>
</head>
<body>

<div class="hero">
  <div class="hero-badge">📲 Hướng dẫn cài đặt</div>
  <h1>Cài bằng SEND TO FILE</h1>
  <p>Chuyển file từ điện thoại lên Tivi/Box nhanh chóng qua cùng mạng WiFi</p>
</div>

<a class="back-btn" href="index.php">← Quay lại kho app</a>

<div class="content">

  <div class="note-box">
    <div class="note-icon">💡</div>
    <p><strong>Send To File</strong> là phần mềm giúp chuyển file, ảnh, dữ liệu từ điện thoại lên Tivi/Box một cách nhanh chóng. <strong>Bắt buộc cả Tivi và điện thoại phải dùng cùng 1 mạng WiFi.</strong></p>
  </div>

  <div class="steps">

    <div class="step">
      <div class="step-num">1</div>
      <div class="step-body">
        <h3>Cài phần mềm trên cả 2 thiết bị</h3>
        <p>Trên <strong>điện thoại</strong> và <strong>Tivi/Box</strong>, tìm và cài app <strong>Send To File</strong>. Cài xong thì <strong>mở lên ngay</strong> trên cả hai thiết bị cùng lúc.</p>
      </div>
    </div>

    <div class="step">
      <div class="step-num">2</div>
      <div class="step-body">
        <h3>Trên điện thoại — bấm "Send"</h3>
        <p>Vào app trên điện thoại, nếu hỏi quyền thì bấm <span class="chip">OK</span> hoặc <span class="chip">Allow</span>. Vào giao diện chính rồi bấm <span class="chip">Send</span>.</p>
      </div>
    </div>

    <div class="step">
      <div class="step-num">3</div>
      <div class="step-body">
        <h3>Tìm file cần cài</h3>
        <p>Tìm đến nơi đã tải file về, thường ở thư mục <span class="chip-green chip">📁 Download</span>. Tìm được rồi thì bấm vào file đó.</p>
      </div>
    </div>

    <div class="step">
      <div class="step-num">4</div>
      <div class="step-body">
        <h3>Chọn thiết bị nhận</h3>
        <p>Sau khi bấm vào file, màn hình sẽ hiện lên tên hoặc mã của Tivi/Box — <strong>bấm vào dòng đó</strong> để gửi.</p>
        <div class="warn-box">
          <div class="warn-icon">⚠️</div>
          <p>Tivi phải kết nối WiFi, điện thoại cũng phải dùng WiFi — <strong>không dùng 4G</strong>! Khác mạng thì sẽ không hiện thiết bị nào cả.</p>
        </div>
      </div>
    </div>

    <div class="step">
      <div class="step-num">5</div>
      <div class="step-body">
        <h3>Cài file trên Tivi/Box</h3>
        <p>Trên Tivi/Box, mở <strong>File Manager</strong> → vào thư mục <span class="chip">Download</span> → tìm file vừa chuyển lên → bấm <strong>Cài đặt</strong> là xong!</p>
      </div>
    </div>

  </div>

  <div class="tip-box">
    <div style="font-size:20px;flex-shrink:0">✅</div>
    <p>Cách này không cần USB, không cần máy tính, chỉ cần cùng mạng WiFi là xong. Rất tiện để cài nhiều app cùng lúc!</p>
  </div>

</div>
</body>
</html>
