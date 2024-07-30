<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function drawTriangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        // In các ký tự * trên cùng một dòng
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        // Xuống dòng
        echo "<br>";
    }
}

// Gọi hàm với n = 5
$n = 5;
drawTriangle($n);
?>
</body>
</html>