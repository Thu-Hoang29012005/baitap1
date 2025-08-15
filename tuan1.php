<?php
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập tuần 1</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #a8c0ff, #0c032bff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #090303ff;
            font-size: 2.5em;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            max-width: 600px;
            margin: 0 auto;
        }
        .card {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            color: #090303ff;
            text-decoration: none;
            font-size: 1.3em;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }
        .card:hover {
            background: rgba(255, 255, 255, 0.4);
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .card:nth-child(1) { background: #9b3672ff; }
        .card:nth-child(2) { background: #9b3672ff; }
        .card:nth-child(3) { background: #9b3672ff; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bài tập tuần 1</h1>
        <div class="card-grid">
            <a href="hello.php" class="card">Bài 1</a>
            <a href="bai2.php" class="card">Bài 2</a>
            <a href="bai3.php" class="card">Bài 3</a>
        </div>
    </div>
</body>
</html>