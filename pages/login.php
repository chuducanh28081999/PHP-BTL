<?php
session_start();
include("../DB/getConnection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <?php
  include_once("../includes/css.php");
  ?>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="../img/logo.jpg" />
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Đăng nhập vào hệ thống</h1>
                  </div>
                  <form class="user" action="../action/login.php" method="POST">
                    <div class="form-group">
                      <input type="text" name="userName" class="form-control form-control-user" placeholder="UserName">
                    </div>
                    <div class="form-group">
                      <input type="password" name="passWord" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="PassWord">
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Login in" name="login" />
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="">Điện lực Nam Từ Liêm</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <?php
  include_once("../includes/js.php");
  ?>

</body>

</html>