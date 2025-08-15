<?php
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập lập trình Web</title>
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
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            max-width: 900px;
            margin: 0 auto;
        }
        .card {
            background: rgba(255, 255, 255, 0.15);
            padding: 15px;
            border-radius: 12px;
            color: #090303ff;
            text-decoration: none;
            font-size: 1.2em;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }
        .card:nth-child(1) { background: #ffcad4; }
        .card:nth-child(2) { background: #ffcad4; }
        .card:nth-child(3) { background: #ffcad4; }
        .card:nth-child(4) { background: #ffcad4; }
        .card:nth-child(5) { background: #ffcad4; }
        .card:nth-child(6) { background: #ffcad4; }
        .card:nth-child(7) { background: #ffcad4; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bài tập lập trình Web</h1>
        <div class="card-grid">
            <a href="tuan1.php" class="card">Tuần 1</a>
            <a href="#" class="card">Tuần 2</a>
            <a href="#" class="card">Tuần 3</a>
            <a href="#" class="card">Tuần 4</a>
            <a href="#" class="card">Tuần 5</a>
            <a href="#" class="card">Tuần 6</a>
            <a href="#" class="card">Tuần 7</a>
        </div>
    </div>
</body>
</html>