<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function isPrime($number) {
    // Các số nhỏ hơn 2 không phải là số nguyên tố
    if ($number < 2) {
        return false;
    }

    // Kiểm tra xem số đó có ước số nào khác 1 và chính nó không
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Nếu có ước số, không phải là số nguyên tố
        }
    }

    return true; // Nếu không có ước số, là số nguyên tố
}

// Ví dụ kiểm tra
$number = 17;
if (isPrime($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}
?>

</body>
</html>