<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function isLeapYear($year) {
    // Kiểm tra các điều kiện để xác định năm nhuận
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true; // Năm nhuận
    } else {
        return false; // Không phải năm nhuận
    }
}

// Ví dụ kiểm tra
$year = 2024;
if (isLeapYear($year)) {
    echo "$year là năm nhuận.";
} else {
    echo "$year không phải là năm nhuận.";
}
?>

</body>
</html>