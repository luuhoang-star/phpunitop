<?php
if(isset($_POST['btn_login'])){
    $error= array(); // Phất cờ
    if(empty($_POST['username'])) {
        //Hạ cờ
        $error['username'] = "Không được để trống";
    }else {
        $username = $_POST['username'];
    }
    if(empty($_POST['password'])) {
        //Hạ cờ
        $error['password'] = "Không được để trống trường password";
    }else {
        $password = $_POST['password'];
    }

    //Kết luận
    if(empty($error)){
        //Xử lý không có lỗi
        echo "User: $username <br> Password: $password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuẩn hóa dữ liệu Form đăng nhập</title>
</head>
<body>
    <style>
        p.error{color:red};
    </style>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
       <label for="username">Username</label><br>
       <input  type="text" name="username" id="username"><br>
       <p class="error"><?php if(!empty($error['username'])) echo $error['username']; ?> </p>
       <label for="password">Password</label><br>
       <input type="password" name="password" id="password"><br><br>
       <p class="error"><?php if(!empty($error['password'])) echo $error['password']; ?> </p>

       <input type="submit" name="btn_login" value="login">
    </form>
    
</body>
</html>