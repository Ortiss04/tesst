<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Các số chia hết cho 7</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .result {
            border: 1px solid #ccc;
            padding: 10px;
            width: 600px;
        }
    </style>
</head>
<body>
    <div class="result">
        <?php
        $count = 0;
        $numbers = array();
        
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 7 == 0) {
                $numbers[] = $i;
                $count++;
            }
        }
        
        echo "<p>Tìm được: $count số</p>";
        echo "<p>Các số đó là: " . implode(" ", $numbers) . "</p>";
        ?>
    </div>
</body>
</html>