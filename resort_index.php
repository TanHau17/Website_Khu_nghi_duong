<!DOCTYPE html>
<html>

<head>
  <title>Resort | COHA RESORT</title>
  <link rel="stylesheet" href="resort.css">

  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link  rel="stylesheet" href="glyphicon.css" >

</head>

<body>
  <div class="image">

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">

        <a class="navbar-brand" href="#"><span style="color: white;"><b>COHA</b></span><span style="color:orange"><b>RESORT</b></span></a>

        </div> <?php

        echo ' <ul class="nav navbar-nav">
        <li class="active"><a class="navlink"href="index.php">Trang chủ</a></li>

        <li><a href="farm_index.php" target="blank">Resort</a></li>
        <li><a href="resort_index.php">Bài viết</a></li>
        <li><a href="contact_index.php">Liên hệ</a></li>
        <li><a href="about_index.php">Giới thiệu</a></li>
    </ul>';

        ?>


        <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php" ><span class="glyphicon glyphicon-log-in"></span>Đăng Nhập</a></li> 
            </ul>
      </div>
    </nav>

  </div>
  <div class="hero-wrap" style="background-image:linear-gradient(rgba(0 , 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('farm details photos/card back.jpg');height:100%;
        width: 100%;
        background-size: cover;
        background-position:center;
        background-attachment: fixed;
    margin-top:-20px;
        position: absolute;"><!--bg-image-->
    <section class="hero-wrap hero-wrap-2 js-fullheight" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">

            <font face="Rockwell">
              <h1 class="mb-3 bread" style="color:#f1f1f1; margin-top:52%"><b>RESORT</b></h1>
            </font>
          </div>
        </div>
      </div>
    </section>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br>

  <div class="container-fluid-my-4">
    <div class="container">
      <div class="row">
        <?php
        include 'db.php';
        // $_SESSION['cat'] = $_GET['cat_name'];
        // $cat = $_SESSION['cat'];
        $selectfarm_sql = "SELECT * FROM place";
        $runfarm_sql = @mysqli_query($con, $selectfarm_sql);
        $count = 0;
        // $_SESSION['category'] = "farm";
        

        while ($row = @mysqli_fetch_assoc($runfarm_sql)) {
          if ($count % 3 == 0) {
            echo '<div class="row">';
          }
          echo '<div class="col-md-1"></div>
            <div class="card col-md-3 mx-auto " style="width: 30rem;border-width: 3px;border-color:black; margin-top:20px; margin-left:20px;margin-bottom:20px">
            <img class="class-img-top thumbnail" src="' . $row['img'] . '" style="margin-top: 20px; height:30vh;width:26rem" >
                <div class="card-body">
                  <h3 class="card-title panel panel-default" style="margin-top: -10px;" align="center"><b>' . $row['name'] . '</b></h3>
                  <p class="card-text">Xem chi tiết ' . $row['name'] . ' và đặt ngay</p>
                  <p>' . $row['price'] . 'vnđ/ngày</p>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="bookingform.php?p_name=' . $row['name'] . '&p_id=' . $row['id'] . '&err=noerror" class="btn pull-left" style="background-color: DodgerBlue; color:white;">Đặt Ngay</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="Farm Detail/' . $row['name'] . '.html" target="blank" class="btn pull-right" style="background-color: DodgerBlue; color:white;">Chi Tiết</a>
				
			   </div>';

          echo '</div>';

          if ($count % 3 == 0) {
            echo '</div>';
          }
          $count++;
        }
        ?>
      </div>
    </div>

</body>

</html>