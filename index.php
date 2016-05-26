<? ob_start(); ?>
<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CONTROLLER</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <?php
    require ('model.php');
    if(!$_SESSION['username']){
      header("location:login.php");
    }else{
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        insert_comment($_POST);
        echo "<script language=javascript> window.location = 'index.php?news_id=".$_POST['news_id']."';</script>";
      }else{
        if (!isset($_SESSION['cate_id'])) {
          $_SESSION['cate_id'] = 1;
        }else{
          echo "string";
        }
        $newid = $_GET['news_id'];
        $new_ = get_new($newid);
        $cate1 = getCatelogy();
        // echo $cate_id;
        $news_id = $new_['ID'];
        $news = get_news($_SESSION['cate_id']);
        $comments = get_comment($_GET['news_id']);
        $num_ = count($comments);
        require ('home.php');
      }
    }
   ?>
</body>
</html>
<? ob_flush(); ?> 