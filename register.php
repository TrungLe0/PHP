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
        <h1>Create Account</h1><br>
        <form action="createAccount.php" method="POST">
        <input type="text" name="username" id="username" placeholder="Username">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="text" name="fullname" id="fullname" placeholder="Họ và tên">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="submit" name="login" class="login loginmodal-submit" value="Create">
        </form>
        <div class="login-help">
          <a href="login.php">Login</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>