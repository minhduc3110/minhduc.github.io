<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Câu 9: In ra màn hình hình chữ nhật rỗng 5x7 bằng dấu * (dùng vòng lặp) -->
    <?php
    function inHCNRong($dai, $rong) {
        for ($i = 1; $i <= $dai; $i++) {
            for ($j = 1; $j <= $rong; $j++) {
                if ($i == 1 || $i == $dai || $j == 1 || $j == $rong) {
                    echo "* ";
                } else {
                    echo "  ";
                }
            }
            echo "\n";
        }
    }
    inHCNRong(5, 7);
    ?>
    <br>
</body>
</html>