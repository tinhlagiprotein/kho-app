<?php $page_title = "Cài phần mềm bằng CODE (mã số)"; ?>
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
    --purple: #7c3aed; --purple-light: #ede9fe;
    --text: #1a1d2e; --muted: #6b7280;
    --font: 'Be Vietnam Pro', 'Segoe UI', sans-serif;
    --radius: 16px; --shadow: 0 2px 16px rgba(0,0,0,0.07);
  }
  body { background: var(--bg); font-family: var(--font); color: var(--text); min-height: 100vh; }

  .hero {
    background: linear-gradient(135deg, #1a1d2e 0%, #4c1d95 60%, #7c3aed 100%);
    padding: 36px 20px 30px; text-align: center; color: #fff;
  }
  .hero-badge { display: inline-flex; align-items: center; gap: 6px; background: rgba(255,255,255,0.15); border-radius: 20px; padding: 5px 14px; font-size: 11px; font-weight: 700; letter-spacing: 0.8px; text-transform: uppercase; margin-bottom: 12px; }
  .hero h1 { font-size: clamp(20px,5vw,28px); font-weight: 900; margin-bottom: 8px; }
  .hero p { font-size: 13px; opacity: 0.75; max-width: 480px; margin: 0 auto; line-height: 1.6; }

  .back-btn { display: inline-flex; align-items: center; gap: 6px; margin: 16px 20px 0; background: var(--card); border: 1px solid var(--border); border-radius: 10px; padding: 8px 14px; font-size: 12px; font-weight: 700; color: var(--blue); text-decoration: none; box-shadow: var(--shadow); }
  .back-btn:hover { background: var(--blue-light); }

  .content { max-width: 680px; margin: 0 auto; padding: 16px 16px 60px; }

  /* ADVANTAGE BOX */
  .adv-box { background: var(--green-light); border: 1.5px solid #86efac; border-radius: var(--radius); padding: 13px 16px; margin-bottom: 20px; display: flex; gap: 10px; align-items: flex-start; }
  .adv-box p { font-size: 13px; color: #166534; font-weight: 600; line-height: 1.6; }

  /* STEPS */
  .steps { display: flex; flex-direction: column; gap: 12px; }
  .step { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 16px; box-shadow: var(--shadow); display: flex; gap: 14px; }
  .step-num { width: 36px; height: 36px; min-width: 36px; border-radius: 50%; background: linear-gradient(135deg, var(--purple), #4f46e5); color: #fff; font-size: 15px; font-weight: 900; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .step-body h3 { font-size: 13.5px; font-weight: 800; color: var(--text); margin-bottom: 6px; }
  .step-body p { font-size: 13px; color: var(--muted); line-height: 1.65; }
  .step-body strong { color: var(--text); font-weight: 700; }

  .chip { display: inline-flex; align-items: center; gap: 4px; background: var(--blue-light); color: var(--blue); border-radius: 8px; padding: 3px 9px; font-size: 11.5px; font-weight: 700; white-space: nowrap; }
  .chip-purple { background: var(--purple-light); color: var(--purple); }
  .chip-green { background: var(--green-light); color: var(--green); }

  /* CODE DISPLAY */
  .code-demo { background: #1a1d2e; border-radius: 12px; padding: 16px 20px; margin: 10px 0; text-align: center; }
  .code-demo .code-label { font-size: 10px; color: #6b7280; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 6px; font-weight: 600; }
  .code-demo .code-number { font-size: 32px; font-weight: 900; color: #facc15; letter-spacing: 4px; font-family: monospace; }

  /* LINK BOX */
  .link-box { background: var(--blue-light); border: 1.5px solid rgba(26,115,232,0.3); border-radius: 12px; padding: 11px 14px; margin: 10px 0; display: flex; align-items: center; gap: 8px; }
  .link-box a { font-size: 12px; color: var(--blue); font-weight: 700; word-break: break-all; text-decoration: none; }
  .link-box a:hover { text-decoration: underline; }

  /* INLINE STEPS */
  .sub-steps { margin-top: 10px; display: flex; flex-direction: column; gap: 6px; }
  .sub-step { display: flex; align-items: flex-start; gap: 8px; }
  .sub-num { width: 20px; height: 20px; min-width: 20px; border-radius: 50%; background: var(--purple-light); color: var(--purple); font-size: 10px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
  .sub-step p { font-size: 12.5px; color: var(--muted); line-height: 1.5; padding-top: 1px; }

  .tip-box { background: var(--purple-light); border: 1.5px solid #c4b5fd; border-radius: var(--radius); padding: 14px 16px; margin-top: 20px; display: flex; gap: 10px; }
  .tip-box p { font-size: 13px; color: #5b21b6; line-height: 1.6; font-weight: 500; }
</style>
</head>
<body>

<div class="hero">
  <div class="hero-badge">🔢 Hướng dẫn cài đặt</div>
  <h1>Cài bằng CODE (mã số)</h1>
  <p>Không cần USB, không cần link, không cần máy tính — chỉ cần nhập mã số vào Tivi/Box</p>
</div>

<a class="back-btn" href="">← Quay lại kho app</a>

<div class="content">

  <div class="adv-box">
    <div style="font-size:20px;flex-shrink:0">✨</div>
    <p>Ưu điểm: không cần USB, không cần link, không cần máy tính — cách cài đơn giản và tiện nhất cho Tivi/Box!</p>
  </div>

  <div class="steps">

    <div class="step">
      <div class="step-num">1</div>
      <div class="step-body">
        <h3>Lấy CODE từ trang kho app</h3>
        <p>Vào trang kho app, muốn cài app nào thì bấm nút <span class="chip">CODE</span> ở app đó. Mã số sẽ hiện ra ngay bên cạnh — bấm vào số để <strong>copy mã</strong>.</p>
      </div>
    </div>

    <div class="step">
      <div class="step-num">2</div>
      <div class="step-body">
        <h3>Tạo mã CODE rút gọn</h3>
        <p>Vào trang web tạo CODE bên dưới, dán link tải vào <span class="chip-purple chip">ô số 1</span> màu đỏ, rồi bấm <span class="chip-green chip">ô số 2</span> màu xanh, rồi bấm <strong>Shorten</strong>.</p>
        <div class="link-box">
          <span style="font-size:16px">🌐</span>
          <a href="https://go.aftvnews.com/" target="_blank">https://go.aftvnews.com/</a>
        </div>
        <p style="font-size:12px;color:var(--muted);margin-top:6px">Hệ thống tự copy link rồi — chỉ việc dán vào thôi nhé.</p>
        <div class="code-demo">
          <div class="code-label">Mã CODE sẽ ra dạng như này</div>
          <div class="code-number">643512</div>
        </div>
      </div>
    </div>

    <div class="step">
      <div class="step-num">3</div>
      <div class="step-body">
        <h3>Cài app "Downloader" trên Tivi/Box</h3>
        <p>Trên Tivi/Box, vào <strong>CH Play</strong> (chỗ cài app), tìm và cài app tên <span class="chip-purple chip">Downloader</span>.</p>
      </div>
    </div>

    <div class="step">
      <div class="step-num">4</div>
      <div class="step-body">
        <h3>Nhập mã CODE vào Downloader</h3>
        <p>Mở app Downloader, nhập mã số vào <strong>thanh tìm kiếm</strong>, bấm <span class="chip">Load</span>, chờ khoảng <strong>5 giây</strong> rồi bấm <span class="chip-green chip">Cài đặt</span> là xong!</p>
        <div class="sub-steps">
          <div class="sub-step"><div class="sub-num">a</div><p>Nhập mã số vào thanh tìm kiếm</p></div>
          <div class="sub-step"><div class="sub-num">b</div><p>Bấm <strong>Load</strong> và chờ 5 giây</p></div>
          <div class="sub-step"><div class="sub-num">c</div><p>Bấm <strong>Cài đặt / Install</strong></p></div>
        </div>
      </div>
    </div>

  </div>

  <div class="tip-box">
    <div style="font-size:20px;flex-shrink:0">💜</div>
    <p>Đây là cách cài phổ biến nhất cho Android TV/Box. Chỉ cần 1 mã số 6 chữ số là cài được bất kỳ app nào mà không cần USB hay máy tính!</p>
  </div>

</div>
</body>
</html>
