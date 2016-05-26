<!DOCTYPE html>
<?php

if(!$_SESSION['username']){
header("location:login.php");
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sử Dụng Layout</title>
  <!-- tích hợp css của bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!--tích hợp css-->
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  <div class="container">
    <!--Header-->
    <div id="header" class="row">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container div-container">
          <div class="navbar-header"><h1 class="navbar-brand"><?php echo $_SESSION['fullname']; ?></h1>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header-menu">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
          </button>
        </div>
        <div id="header-menu" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li role="presentation"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Blog</a></li>
            <li role="presentation"><a href="#">About Us</a></li>
          </ul>
          <div class="navbar-right">
            <a href="register.php" class="btn btn-primary navbar-btn">Singup</a>
            <a href="logout.php" class="btn btn-default navbar-btn">Logout</a>
          </div>
        </div>
        </div>
      </nav>
      
    </div>

    <!--Main-->
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-ml-12">
        <!--Slide show-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

  <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img/bg1.jpg" alt="...">
              <div class="carousel-caption">
               
              </div>
            </div>
            <div class="item">
              <img src="img/bg2.jpg" alt="...">
              <div class="carousel-caption">
              
              </div>
            </div>
            <div class="item">
              <img src="img/bg3.jpg" alt="...">
              <div class="carousel-caption">
              
              </div>
            </div>
          </div>

  <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- end slide show -->
      </div>
    </div>
    <div id="main">    
      <div class="row home-row">
      <?php foreach ($news as $new) { ?>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
          <h3 class="home-title">
            <?php echo $new['title']; ?>
          </h3>
          <p class="text-center more"><?php echo $new['content'] ?></p>
          <p class="text-center">
            <a href="index.php?news_id=<?php echo $new['ID']; ?>" class="btn btn-primary">Read More</a>  
          </p>
        </div>
      <?php } ?>
      </div>
  
      <div class="row home-row">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <ul id="home-sub-nav" class="nav nav-pills nav-stacked">
            <?php foreach ($cate1 as $cate_) { ?>
              <li role="presentation"><a href="getCatelogy.php?cate_id=<?php echo $cate_['ID']; ?>"><?php echo $cate_['name'] ?></a></li>
            <?php } ?>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <h2><?php echo $new_['title']; ?></h2>
              <p><?php echo $new_['content']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" style="background:#eee">
              <label>Ý kiến bạn đọc (<?php echo $num_ ; ?>)</label> 
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="ajoutcomment">
                <input type="hidden" name="news_id" value="<?php echo $news_id; ?>">
                <input type="hidden" name="cate" value="<?php echo $catelogy; ?>">
                <input type="hidden" name="auteur" value="<?php echo $_SESSION['username']; ?>"><br />
                <textarea name="texte" id="texte" rows="3" class="form-control">Nội dung bình luận</textarea><br />
                <input type="submit" name="submit" value="Gửi" class="btn btn-primary" style="float:right">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <?php foreach ($comments as $comment) {?>
                <label><?php echo $comment['user']; ?> đã viết <?php echo $comment['create_date']; ?></label>
                <p><?php echo $comment['content'] ; ?></p>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Footer-->
    <div id="footer" class="row">
      <div class="col-xs-6">Coppyright 2015 - Trung Leo</div>
      <div class="col-xs-6 power">Powered by Bootstrap</div>
    </div>
  </div>
  <!-- tích hợp jquery  -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <!-- tích hợp jquery của bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
  $("li").first().addClass("active");
  $(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover({
    trigger: "hover",
  });
})
</script>

</body>
</html>