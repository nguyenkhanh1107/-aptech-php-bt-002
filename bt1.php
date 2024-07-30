<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Tạo mảng liên hợp chứa thông tin về các ngôn ngữ lập trình
    $languages = [
        "Java" => [
            "name" => "Java",
            "year" => 1995,
            "frameworks" => ["Spring", "Hibernate", "Struts"]
        ],
        "C#" => [
            "name" => "C#",
            "year" => 2000,
            "frameworks" => [".NET", "Xamarin", "Unity"]
        ],
        "PHP" => [
            "name" => "PHP",
            "year" => 1994,
            "frameworks" => ["Laravel", "Symfony", "CodeIgniter"]
        ],
        "Javascript" => [
            "name" => "Javascript",
            "year" => 1995,
            "frameworks" => ["React", "Angular", "Vue"]
        ],
        "Python" => [
            "name" => "Python",
            "year" => 1991,
            "frameworks" => ["Django", "Flask", "Pandas"]
        ]
    ];

    // In thông tin ngôn ngữ ra màn hình
    echo "<h2>Danh sách ngôn ngữ lập trình:</h2>";
    foreach ($languages as $language) {
        echo "<h3>{$language['name']}</h3>";
        echo "<p>Năm ra đời: {$language['year']}</p>";
        echo "<p>Các framework nổi tiếng: " . implode(", ", $language['frameworks']) . "</p>";
    }

    // Sắp xếp mảng theo tên ngôn ngữ
    ksort($languages);

    // In lại danh sách đã sắp xếp
    echo "<h2>Danh sách ngôn ngữ lập trình (sắp xếp theo tên):</h2>";
    foreach ($languages as $language) {
        echo "<h3>{$language['name']}</h3>";
        echo "<p>Năm ra đời: {$language['year']}</p>";
        echo "<p>Các framework nổi tiếng: " . implode(", ", $language['frameworks']) . "</p>";
    }

    // Thêm ngôn ngữ Golang và Ruby
    $languages["Golang"] = [
        "name" => "Golang",
        "year" => 2009,
        "frameworks" => ["Gin", "Echo", "Beego"]
    ];

    $languages["Ruby"] = [
        "name" => "Ruby",
        "year" => 1995,
        "frameworks" => ["Ruby on Rails", "Sinatra", "Hanami"]
    ];

    // Xóa ngôn ngữ Javascript
    unset($languages["Javascript"]);

    // In danh sách ngôn ngữ sau khi thêm và xóa
    echo "<h2>Danh sách ngôn ngữ lập trình (sau khi thêm và xóa):</h2>";
    foreach ($languages as $language) {
        echo "<h3>{$language['name']}</h3>";
        echo "<p>Năm ra đời: {$language['year']}</p>";
        echo "<p>Các framework nổi tiếng: " . implode(", ", $language['frameworks']) . "</p>";
    }
    ?>

</body>

</html>