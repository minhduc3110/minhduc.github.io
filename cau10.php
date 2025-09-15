<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     function tinhTrungBinh($arr) {
        if (count($arr) == 0) return 0;
        $tong = array_sum($arr);
        return $tong / count($arr);
    }
$mang = [2, 4, 6, 8, 10];
    echo "<b>Câu 10:</b> Trung bình cộng = " . tinhTrungBinh($mang); 
    ?>
</body>
</html>