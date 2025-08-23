<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function startsWith($string, $substring) {
        // Lấy độ dài chuỗi con
        $length = strlen($substring);
        // So sánh phần đầu chuỗi với chuỗi con
        return strncmp($string, $substring, $length) === 0;
    }

    // Ví dụ sử dụng
    $str = "Minh Duc";
    $sub1 = "Minh";
    $sub2 = "Duc";

    if (startsWith($str, $sub1)) {
        echo "'$str' bắt đầu bằng '$sub1'<br>";
    } else {
        echo "'$str' KHÔNG bắt đầu bằng '$sub1'<br>";
    }

    if (startsWith($str, $sub2)) {
        echo "'$str' bắt đầu bằng '$sub2'<br>";
    } else {
        echo "'$str' KHÔNG bắt đầu bằng '$sub2'<br>";
    }
    ?>
</body>
</html>