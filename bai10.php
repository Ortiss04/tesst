<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Album Hoa</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .album {
            width: 650px;
            border: 1px solid pink;
            height: auto;
        }
        .header {
            background-color: pink;
            color: purple;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
        .content {
            display: flex;
            padding: 10px;
            background-color: white;
        }
        select {
            width: 150px;
            height: 150px;
            margin-right: 20px;
        }
        .flower-name {
            color: pink;
            text-align: center;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="album">
        <div class="header">Xem Album các loại hoa</div>
        <div class="content">
            <?php
            $flowers = [
                'Hoa bất tử' => 'hoabattu.jpg',
                'Hoa cúc' => 'hoacuc.jpg',
                'Hoa hồng' => 'hoahong.jpg',
                'Hoa lan' => 'hoalan.jpg',
                'Hoa lys' => 'hoaly.jpg',
                'Hoa súng' => 'hoasung.jpg',
                'Hoa đầm bụt' => 'hoadambut.jpg'
            ];
            
            $selectedFlower = isset($_GET['flower']) ? $_GET['flower'] : 'Hoa ly';
            ?>
            
            <form method="get">
                <select name="flower" size="7" onchange="this.form.submit()">
                    <?php foreach ($flowers as $name => $image): ?>
                        <option value="<?php echo $name; ?>" <?php echo ($name == $selectedFlower) ? 'selected' : ''; ?>>
                            <?php echo $name; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </form>
            
            <div>
                <img src="imgs/<?php echo $flowers[$selectedFlower]; ?>" width="250" height="250">
                <div class="flower-name"><?php echo $selectedFlower; ?></div>
            </div>
        </div>
    </div>
</body>
</html>