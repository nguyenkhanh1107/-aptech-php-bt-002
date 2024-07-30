<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function drawIsoscelesTriangle($n) {
    // Phần tăng dần của tam giác
    for ($i = 1; $i <= ceil($n / 2); $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "# ";
        }
        echo "<br>";
    }

    // Phần giảm dần của tam giác
    for ($i = ceil($n / 2) - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "# ";
        }
        echo "<br>";
    }
}

// Gọi hàm với n = 10
$n = 10;
drawIsoscelesTriangle($n);
?>

</body>
</html>