<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phép Tính Trên Hai Số</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 360px;
        }

        h2 {
            color: #0044cc;
            margin-bottom: 20px;
        }

        .row {
            margin: 15px 0;
            text-align: left;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .operations {
            display: flex;
            justify-content: space-around;
            margin: 15px 0;
        }

        .operations label {
            font-weight: normal;
        }

        button {
            background: #0044cc;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #003399;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            color: green;
        }

        .home-link {
            margin-top: 20px;
        }

        .home-link a {
            display: inline-block;
            background: #0b0000ff;
            color: #fff;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        .home-link a:hover {
            background: #666;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>

    <form method="post">
        <div class="operations">
            <label><input type="radio" name="operation" value="add" required> Cộng</label>
            <label><input type="radio" name="operation" value="subtract"> Trừ</label>
            <label><input type="radio" name="operation" value="multiply"> Nhân</label>
            <label><input type="radio" name="operation" value="divide"> Chia</label>
        </div>

        <div class="row">
            <label for="num1">Số thứ nhất:</label>
            <input type="number" name="num1" id="num1" step="any" required>
        </div>

        <div class="row">
            <label for="num2">Số thứ hai:</label>
            <input type="number" name="num2" id="num2" step="any" required>
        </div>

        <button type="submit" name="calculate">Tính</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calculate'])) {
        $num1 = (float)$_POST['num1'];
        $num2 = (float)$_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    $result = 'Lỗi: Không thể chia cho 0!';
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = 'Phép toán không hợp lệ!';
        }

        echo "<div class='result'>Kết quả: <strong>$result</strong></div>";
    }
    ?>

    <!-- Nút quay về trang chủ -->
    <div class="home-link">
        <a href="tuan1.php">⬅️ Quay về trang chủ</a>
    </div>
</div>

</body>
</html>
