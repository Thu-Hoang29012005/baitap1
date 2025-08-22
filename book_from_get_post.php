<?php
// book_form_get_post.php
// Lưu file này vào htdocs (XAMPP) rồi mở: http://localhost/book_form_get_post.php

declare(strict_types=1);
mb_internal_encoding('UTF-8');
header('Content-Type: text/html; charset=UTF-8');

function h(?string $s): string { return htmlspecialchars($s ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }

// Lấy dữ liệu từ cả GET và POST để hiển thị riêng
$getData  = [
    'ten_sach'      => $_GET['ten_sach']      ?? '',
    'tac_gia'       => $_GET['tac_gia']       ?? '',
    'nxb'           => $_GET['nxb']           ?? '',
    'nam_xb'        => $_GET['nam_xb']        ?? '',
];
$postData = [
    'ten_sach'      => $_POST['ten_sach']     ?? '',
    'tac_gia'       => $_POST['tac_gia']      ?? '',
    'nxb'           => $_POST['nxb']          ?? '',
    'nam_xb'        => $_POST['nam_xb']       ?? '',
];

// Hàm kiểm tra đơn giản cho năm xuất bản
function validateYear(?string $y): string {
    $y = trim((string)$y);
    if ($y === '') return '';
    if (!ctype_digit($y)) return 'Năm xuất bản phải là số nguyên.';
    $num = (int)$y;
    if ($num < 0 || $num > (int)date('Y')) return 'Năm xuất bản không hợp lệ.';
    return '';
}
$errGet  = validateYear($getData['nam_xb']);
$errPost = validateYear($postData['nam_xb']);
?>
<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Sách – GET & POST</title>
  <style>
    body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif;margin:24px;}
    .wrap{display:grid;gap:24px;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));}
    form{border:1px solid #ddd;border-radius:12px;padding:16px;box-shadow:0 2px 10px rgba(0,0,0,.05)}
    h2{margin:0 0 12px}
    label{display:block;font-weight:600;margin-top:10px}
    input[type=text],input[type=number]{width:100%;padding:10px;border:1px solid #ccc;border-radius:8px;margin-top:6px}
    .btn{margin-top:14px;padding:10px 14px;border:0;border-radius:10px;background:#111;color:#fff;cursor:pointer}
    .result{margin-top:12px;background:#fafafa;border:1px dashed #ddd;border-radius:10px;padding:12px}
    .error{color:#b00020;font-size:0.95rem;margin-top:6px}
    small{color:#555}
  </style>
</head>
<body>
  <h1>Biểu mẫu nhập sách (GET & POST)</h1>
  <p>Yêu cầu: Tạo form gồm các thuộc tính <b>tên sách</b>, <b>tác giả</b>, <b>nhà xuất bản</b>, <b>năm xuất bản</b>; gửi và hiển thị lại dữ liệu bằng <b>GET</b> và <b>POST</b>.</p>

  <div class="wrap">
    <!-- FORM GET -->
    <form method="get" action="">
      <h2>Phương thức GET</h2>
      <small>Dữ liệu sẽ xuất hiện trên URL.</small>
      <label for="g_ten">Tên sách</label>
      <input id="g_ten" name="ten_sach" type="text" value="<?=h($getData['ten_sach'])?>" required>

      <label for="g_tg">Tác giả</label>
      <input id="g_tg" name="tac_gia" type="text" value="<?=h($getData['tac_gia'])?>" required>

      <label for="g_nxb">Nhà xuất bản</label>
      <input id="g_nxb" name="nxb" type="text" value="<?=h($getData['nxb'])?>" required>

      <label for="g_nam">Năm xuất bản</label>
      <input id="g_nam" name="nam_xb" type="number" min="0" max="<?=date('Y')?>" value="<?=h($getData['nam_xb'])?>" required>
      <?php if ($errGet): ?><div class="error"><?=h($errGet)?></div><?php endif; ?>

      <button class="btn" type="submit">Gửi (GET)</button>

      <?php if (!empty(array_filter($getData)) && !$errGet): ?>
        <div class="result">
          <b>Kết quả (GET):</b>
          <ul>
            <li>Tên sách: <?=h($getData['ten_sach'])?></li>
            <li>Tác giả: <?=h($getData['tac_gia'])?></li>
            <li>Nhà xuất bản: <?=h($getData['nxb'])?></li>
            <li>Năm xuất bản: <?=h($getData['nam_xb'])?></li>
          </ul>
        </div>
      <?php endif; ?>
    </form>

    <!-- FORM POST -->
    <form method="post" action="">
      <h2>Phương thức POST</h2>
      <small>Dữ liệu không hiện trên URL, an toàn hơn khi gửi thông tin.</small>
      <label for="p_ten">Tên sách</label>
      <input id="p_ten" name="ten_sach" type="text" value="<?=h($postData['ten_sach'])?>" required>

      <label for="p_tg">Tác giả</label>
      <input id="p_tg" name="tac_gia" type="text" value="<?=h($postData['tac_gia'])?>" required>

      <label for="p_nxb">Nhà xuất bản</label>
      <input id="p_nxb" name="nxb" type="text" value="<?=h($postData['nxb'])?>" required>

      <label for="p_nam">Năm xuất bản</label>
      <input id="p_nam" name="nam_xb" type="number" min="0" max="<?=date('Y')?>" value="<?=h($postData['nam_xb'])?>" required>
      <?php if ($errPost): ?><div class="error"><?=h($errPost)?></div><?php endif; ?>

      <button class="btn" type="submit">Gửi (POST)</button>

      <?php if (!empty(array_filter($postData)) && !$errPost): ?>
        <div class="result">
          <b>Kết quả (POST):</b>
          <ul>
            <li>Tên sách: <?=h($postData['ten_sach'])?></li>
            <li>Tác giả: <?=h($postData['tac_gia'])?></li>
            <li>Nhà xuất bản: <?=h($postData['nxb'])?></li>
            <li>Năm xuất bản: <?=h($postData['nam_xb'])?></li>
          </ul>
        </div>
      <?php endif; ?>
    </form>
  </div>

  <hr>
  <details>
    <summary>Ghi chú nhanh</summary>
    <ul>
      <li><b>GET</b>: tham số nằm trên URL (ví dụ: <code>?ten_sach=...&tac_gia=...</code>). Dễ bookmark/chia sẻ.</li>
      <li><b>POST</b>: tham số nằm trong thân yêu cầu, không hiện trên URL. Phù hợp dữ liệu nhạy cảm.</li>
      <li>Dùng <code>htmlspecialchars</code> để chống XSS khi in ra trình duyệt.</li>
    </ul>
  </details>
</body>
</html>
