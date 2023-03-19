<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color: brown;">Đây là trang 1</h1>
    <h2>
        <a href="1.php">sang trang 1 </a>
    </h2>

<?php
    $name = $_POST["my_name"] ?? "không có tên";
    $age = $_POST["age"] ?? -1;
    $pwd = $_POST["pwd"] ?? "";
    echo "<h2> $name - $age tuổi </h2>";
    ?>
</body>
</html>