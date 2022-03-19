<?php
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="logo"> <img src="assets/images/blog.png" alt=""> </div>
        <div class="text-center mt-4 name"> Admin </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center"> <i class="fa-solid fa-user"></i> <input type="text" name="userName" id="userName" placeholder="Username"> </div>
            <div class="form-field d-flex align-items-center"> <i class="fa-solid fa-key"></i> <input type="password" name="password" id="pwd" placeholder="Password"> </div> <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="#">Sign up</a> </div>
    </div>

</body>
</html>