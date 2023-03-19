<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>
    <h1>an vao day</h1>
    <a href="2.php">CLICK</a>
</h2>

    <form action ="2.php" method = "post">
        <label for = "my_name"> nhập tên </label>
        <input type = "text" id= "my_name" name =" my_name" />
        <br>

        <label for="pwd">nhập mật khẩu</label>
        <input type="password" id="pwd" name= "pwd" />
        <br>

        <label for="age">nhập tuổi</label>
        <input type="number" min="1" max="999" id="age" name=" age" />

        <br>

        <input type="submit" value="gửi data"/>
    </form>
  

</body>
</html>