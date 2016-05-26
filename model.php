<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Model</title>
  <link rel="stylesheet" href="">
</head>
<body>
<?php 

   function dbconnect(){
    static $connect = null;
    if ($connect === null) {
      $connect = new mysqli('mysql.hostinger.vn','u615992958_root','rootPassw0rd','u615992958_php');
    }
    return $connect;
   }

   function createAccount($account){
      $conn = dbconnect();
      $cre_username = $account['username']; 
      $cre_password = md5($account['password']); 
      $cre_fullname = $account['fullname']; 
      $cre_email = $account['email']; 
      $sql = "INSERT INTO tbl_contact (username,password,fullname,email) VALUES ('$cre_username','$cre_password','$cre_fullname','$cre_email')";
      if (mysqli_query($conn, $sql)) {
        header("location:login.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    function getCatelogy(){
      $sql = "SELECT * FROM tbl_cate";
      $result = dbconnect() -> query($sql);
      $arr = array();
      while ($row = $result->fetch_assoc()) {
        $arr[]=$row;
      }
      return $arr;
    }

    function get_news($cate){
    $sql = "SELECT * FROM tbl_news WHERE cate_id='$cate'";
    $result = dbconnect() -> query($sql);
    $arr = array();
    if ($result -> num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $arr[]=$row;
      }
    }
    return $arr;
   }

   function get_new($id){
    $sql = "SELECT * FROM tbl_news WHERE ID = '$id'";
    $result = dbconnect() -> query($sql);
    $row = $result->fetch_assoc();
    return $row;
   }

   function get_comment($new_id){
    $sql = "SELECT * FROM tbl_comment WHERE news_id = '$new_id'";
    $result = dbconnect() -> query($sql);
    $arr = array();
    $num = $result->num_rows;
    if ($num > 0) {
      while ($row = $result->fetch_assoc()) {
      $arr[] = $row;
      }
    }
    return $arr;
   }

   function insert_comment($comment){
      $conn = dbconnect();
      $news_id = $_POST['news_id']; 
      $id_new = intval($comment['news_id']);
      $user = $comment['auteur'];
      $commen = $comment['texte'];
      $sql = "INSERT INTO tbl_comment (news_id,user,content,create_date) VALUES ($id_new,'$user','$commen',NOW())";
      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

 ?>
</body>
</html>