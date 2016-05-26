<!DOCTYPE html>
<?php
session_start();

if(!$_SESSION['username']){
header("location:login.php");
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VIEW</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    
  <link rel="stylesheet" href="">
</head>
<body>
  Đăng nhập thành công ! <?php echo $_SESSION['username']; ?>
  <h1>TIN TỨC</h1>
  <div id="news">
    <h2><?php echo $news['title']; ?> - <?php echo $news['date']; ?></h2>
    <p><?php echo $news['content']; ?></p> 
    <h3><?php echo $num_ ; ?> bình luận cho tin này</h3> 
    <?php foreach ($comments as $comment) {?>
      <h3><?php echo $comment['user']; ?> đã viết <?php echo $comment['create_date']; ?></h3>
      <p><?php echo $comment['content'] ; ?></p>
    <?php } ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="ajoutcomment">
      <input type="hidden" name="news_id" value="<?php echo $news_id; ?>">
      <input type="text" name="auteur" size="30" value="Tên bạn"><br />
      <textarea name="texte" id="texte" cols="30" rows="5">Nội dung bình luận</textarea><br />
      <input type="submit" name="submit" value="Gửi bình luận">
    </form>
  </div>
</body>
</html>