<?php 
session_start();
  require("model.php");
  $news = get_news($_GET['cate_id']);
  $_SESSION['cate_id'] = $_GET['cate_id'];
  $news_id = reset($news)['ID'];
  $news = get_news($_GET['cate_id']);
  $comments = get_comment($news_id);
  $num_ = count($comments);
  echo "<script language=javascript> window.location = 'index.php?news_id=".reset($news)['ID']."';</script>";
 ?>