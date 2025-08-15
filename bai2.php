<?php
// Cấu hình số dòng mỗi trang
$rowsPerPage = 10;

// Xác định trang hiện tại
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
if ($page < 1) {
    $page = 1;
}

// Tính vị trí bắt đầu
$start = ($page - 1) * $rowsPerPage;

// Tổng số dòng
$totalRows = 100;
$totalPages = (int) ceil($totalRows / $rowsPerPage);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Bài 2 - Phân trang</title>
<style>
    body { font-family: Arial, sans-serif; }
    table { border-collapse: collapse; width: 50%; margin: 20px auto; }
    th, td { border: 1px solid #000; padding: 8px; text-align: center; }
    .pagination { text-align: center; margin: 20px; }
    .pagination a {
        padding: 10px;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin: 0 5px;
    }
    .prevnext { background: #a8c0ff; }
    .active { background: #ffcad4; }
    .normal { background: #b9e4c9; }
    .home-link { text-align: center; margin: 20px 0; }
    .home-link a {
        display: inline-block;
        background: #0000ff;
        color: #fff;
        padding: 8px 16px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
    }
</style>
</head>
<body>

<table>
<tr><th>STT</th><th>Tên sách</th><th>Nội dung</th></tr>
<?php
for ($i = $start; $i < $start + $rowsPerPage && $i < $totalRows; $i++) {
    $rowNumber = $i + 1;
    echo "<tr>";
    echo "<td>{$rowNumber}</td>";
    echo "<td>Tensach{$rowNumber}</td>";
    echo "<td>Noidung{$rowNumber}</td>";
    echo "</tr>";
}
?>
</table>

<div class="pagination">
<?php if ($page > 1): ?>
    <a class="prevnext" href="?page=<?= $page - 1 ?>">Previous</a>
<?php endif; ?>

<?php for ($i = 1; $i <= $totalPages; $i++): ?>
    <a class="<?= $i == $page ? 'active' : 'normal' ?>" href="?page=<?= $i ?>"><?= $i ?></a>
<?php endfor; ?>

<?php if ($page < $totalPages): ?>
    <a class="prevnext" href="?page=<?= $page + 1 ?>">Next</a>
<?php endif; ?>
</div>

<div class="home-link">
    <a href="tuan1.php">⬅️ Quay về trang chủ</a>
</div>

</body>
</html>
