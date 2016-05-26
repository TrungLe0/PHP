<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container" id="login-modal">
    <div class="modal-dialog">
      <div class="loginmodal-container">
        <h1>Login to Your Account</h1><br>
        <form action="checkLogin.php" method="POST">
        <input type="text" name="username" id="username" placeholder="Username">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
        </form>
        <div class="login-help">
        <a href="register.php">Register</a> - <a href="#">Forgot Password</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
