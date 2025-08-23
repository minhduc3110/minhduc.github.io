<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "15";
        echo "chuỗi sau khi thêm: " . str_pad($str, 5, "0", STR_PAD_LEFT);
    ?>
</body>
