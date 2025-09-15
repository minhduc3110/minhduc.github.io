<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function cau8($a, $b, $c) {
        // Kiểm tra hệ số
        if ($a == 0) {
            if ($b == 0) {
                return "Phương trình vô nghiệm";
            }
            return "x = " . (-$c / $b);
        }
    
        // Tính delta
        $delta = $b * $b - 4 * $a * $c;
    
        if ($delta < 0) {
            return "Phương trình vô nghiệm";
        } else if ($delta == 0) {
            $x = -$b / (2 * $a);
            return "Phương trình có nghiệm kép x = $x";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return "x1 = $x1, x2 = $x2";
        }
    }
    echo"<b>Câu 8:</b>" . cau8(1, -3, 2) . "<br><br>";
    ?>
</body>
</html>