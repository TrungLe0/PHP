<?php
 session_start();
require ('model.php');
 
// username và password được gửi từ form đăng nhập
$myusername=$_POST['username'];
$mypassword=md5($_POST['password']);
 
 
$sql="SELECT * FROM tbl_contact WHERE username='$myusername' AND password='$mypassword'";
$result = dbconnect()->query($sql);

// nếu tài khoản trùng khớp thì sẽ trả về giá trị 1 cho biến $count
if($result -> num_rows > 0){
  while($row = $result->fetch_assoc()) {
    $_SESSION['fullname'] = $row['fullname'];
  }
  $_SESSION['username'] = $myusername;
  $_SESSION['password'] = $mypassword;
  
  $login_session = $_SESSION['username'];
  header("location:index.php?news_id=1");
}else {
  echo "Sai tên đăng nhập hoặc mật khẩu";
  }
?>