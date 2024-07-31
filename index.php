<!DOCTYPE html>
<html lang="en">

<head>
  <title>COHA RESORT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="glyphicon.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">




  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
    integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>

</head>

<body>


  <div class="navgi">
    <nav class="abc navbar navbar-inverse " id="navgi">
      <div class="container-fluid">
        <div class="navbar-header">

          <a class="navbar-brand" href="#"><span style="color: white;"><b>COHA</b></span><span
              style="color:orange"><b>RESORT</b></span></a>
        </div>


        <?php

        echo ' <ul class="nav navbar-nav">
      <li class="active"><a class="navlink"href="#">Trang chủ</a></li>

      <li><a href="resort_index.php" target="blank">Resort</a></li>
      <li><a href="post_index.php">Bài viết</a></li>
      <li><a href="contact_index.php">Liên hệ</a></li>
      <li><a href="about_index.php">Giới thiệu</a></li>
    </ul>';


        ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Đăng Nhập</a></li>
        </ul>

      </div>

    </nav>


    <div class="backimage">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text">
              <h1 class="slogancolor">Chào mừng đến COHA RESORT</h1>
              <p class="slogancolor" style="font-size: 18px;">Đến với COHA RESORT bạn sẽ được trải nghiệm dịch vụ book
                tour nghỉ dưỡng nhanh chóng, tận tâm và chu đáo nhất<br>"Nghỉ ngơi là cách tốt nhất để nạp năng lượng
                cho cơ thể và tâm hồn." là một lời khuyên quý giá về tầm quan trọng của việc dành thời gian để thư giãn
                và tái tạo năng lượng
              </p>
            </div>
          </div>


          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
            <div class="form">
              <form action="search_farm.php" class="request-form ftco-animate" method="post">
                <font face="Times new roman">
                  <h1>Book Resort</h1>
                </font>
                <hr>
                <div class="form-group">
                  <label for="city" class="control-label">Thành Phố</label>
                  <select class="form-control" id="city" name="search_city" required>
                    <option selected value="">Chọn thành phố</option>
                    <option value="Nha Trang">Nha Trang</option>
                    <option value="Vũng Tàu">Vũng Tàu</option>
                  </select>
                </div>
                <div class="d-flex">
                  <div class="form-group mr-2">
                    <label for="book_pick_date" class="control-label">Check-in</label>
                    <input type="date" class="form-control" name="check_in" id="book_pick_date" placeholder="Cheack-in"
                      required>
                  </div>

                  <div class="form-group ml-2">
                    <label for="book_out_date" class="control-label">Check-out</label>

                    <input type="date" class="form-control" id="book_out_date" name="check_out" placeholder="Cheack-out"
                      required>
                  </div>
                </div>
                <select class="form-control" name="cat">
                  <option selected>Chọn loại hình</option>
                  <option value="farm">Trang trại</option>
                  <option value="resort">Resort</option>
                </select><br>

                <select class="form-control">
                  <option selected="">Thời điểm trong ngày</option>
                  <option>Buổi sáng</option>
                  <option>Buổi chiều</option>
                </select><br>

                <div class="form-group">
                  <input type="submit" value="Tìm Kiếm" name="search_farm" class="btn btn-primary btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container">

    </div>


    <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="navbar-brand" style="font-size: 40px;text-align: center;margin-left: 32%">
              <font face="Rockwell">
                <h1 id="serv">Dịch vụ <span style="color: burlywood;"><b> của chúng tôi</b></span></h1>
              </font>
            </span>
            <br><br>
            <span class="subheading"
              style="font-size: monospace;text-align: center;margin-left: 32%;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <font face="Rockwell">
                <h1><b>Chúng tôi mang đến cho bạn những gì tốt nhất<b>
                      <h1>
              </font>
            </span>
          </div>
        </div>
      </div>
  </div>
  <br><br>
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services">
          <div class="media-body py-md-4">
            <div class="d-flex mb-3 align-items-center">
              <div class="icon"><span class="flaticon-customer-support"></span></div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="farm details photos\icon1.png" style="height: 100px; width: 100px;">
              <h3 class="heading mb-0 pl-3">Hỗ Trợ Dịch Vụ 24/7</h3>
            </div>
            <p>Bạn có thể nhật hỗ trợ mọi lúc trên Website của chúng tôi.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services">
          <div class="media-body py-md-4">
            <div class="d-flex mb-3 align-items-center">
              <div class="icon"><span class="flaticon-online-booking"></span></div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="farm details photos\icon3.png" style="height: 100px; width: 100px;">
              <h3 class="heading mb-0 pl-3">Đảm Bảo An Toàn</h3>
            </div>
            <p>Tất cả các Resort đều được đảm bảo an ninh. Bạn có thể tin tưởng chúng tôi.</p>
          </div>
        </div>
      </div>


      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services">
          <div class="media-body py-md-4">
            <div class="d-flex mb-3 align-items-center">
              <div class="icon"><span class="flaticon-rent"></span></div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="farm details photos\icon2.png" style="height: 100px; width: 100px;">
              <h3 class="heading mb-0 pl-3">Nói Không Với Chất Lượng Kém</h3>
            </div>
            <p>Chúng tôi luôn mang lại chất lượng dịch vụ tốt nhất với khả năng hiện tại của chúng tôi</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>


  </section>



  <section class="workflow">

    <div class="overlay"> </div>
    <div class="container" style="height: 350px;">

      <div class="row justify-content-center mb-5" style="height: 200px;">

        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate" style="height: 150px;">
          <br><br><br>
          <span style=" color: #fefefe;font-size: 25px; margin-left: 500px; padding: 7px; ">Quy Trình</span><br><br>
        </div>
      </div>

      <div class="row" style="padding-top:-50px;">
        <div class="col-md-4 ftco-animate">
          <div class="media block-6 services services-2">
            <div class="media-body py-md-4 text-center">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span>
              </div>
              <img src="farm details photos\icon location.png" style="height: 100px; width: 100px;">
              <h3 style="color: #f1f1f1"><b>Chọn thành phố</b></h3>
              <p class="panel panel-sm panel-danger" style="color: black">Chọn thành phố bạn muốn đến</p>
            </div>
          </div>
        </div>

        <div class="col-md-4  ftco-animate">
          <div class="media block-6 services services-2">
            <div class="media-body py-md-4 text-center">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span>
              </div>
              <img src="farm details photos\icontime.png" style="height: 100px; width: 100px;">
              <h3 style="color: #f1f1f1"><b>Thiết lập thời gian</b></h3>
              <p class="panel panel-sm panel-danger" style="color: black">Thiết lập thời gian book resort của bạn</p>
            </div>
          </div>
        </div>
        <div class="col-md-4  ftco-animate">
          <div class="media block-6 services services-2">
            <div class="media-body py-md-4 text-center">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span>
              </div>
              <img src="farm details photos\iconfarm.png" style="height: 100px; width: 100px;">
              <h3 style="color: #f1f1f1"><b>Đặt resort bạn muốn</b></h3>
              <p class="panel panel-sm panel-danger" style="color: black">Tận hưởng khoảng thời gian nghỉ dưỡng của bạn
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>


  </section><br><br>

  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2" style="color:white; margin-top: 8%;">Thông Tin</h2>
            <ul class="list-unstyled"><br>
              <li><a href="about_index.php" class="py-2 d-block" style="color:white;">Giới Thiệu</a></li>
              <li><a href="#serv" class="py-2 d-block" style="color:white;">Dịch Vụ</a></li>
              <li><a href="#" class="py-2 d-block" style="color:white;">Điều Khoản và Điều Kiện</a></li>
              <li><a href="#" class="py-2 d-block" style="color:white;">Đảm Bảo Giá Tốt Nhất</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2" style="color:white; margin-top:8%;">Hỗ Trợ Khách Hàng</h2>
            <ul class="list-unstyled"><br>
              <li><a href="#" class="py-2 d-block" style="color:white;">FAQ</a></li>
              <li><a href="#" class="py-2 d-block" style="color:white;">Phương Thức Thanh Toán</a></li>
              <li><a href="#" class="py-2 d-block" style="color:white;">Mẹo Đặt Phòng</a></li>
              <li><a href="#" class="py-2 d-block" style="color:white;">Liên Hệ Chúng Tôi</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2 id="about" class="ftco-heading-2" style="color:white; margin-top: 10%;">Bạn Có Câu Hỏi?</h2>
            <div class="block-23 mb-3">
              <ul style="color:white;"><br>
                <li><span class="text" style="color:white;">99 Lê Lợi, Gò Vấp, Tp.HCM</span></li>
                <li><span class="text" style="color:white;">0562610822</span></li>
                <li><span class="text" style="color:white;">coharesort@gmail.com</span></li>
              </ul><br>

              <div class="social-handling;" style="color: white;">
                <img src="farm details photos\instagram.png" style="width:30px; height:30px ; "> coharesort<br><br>
                <img src="farm details photos\face book.png" style="width:30px; height:30px ;"> coharesort<br><br>
                <img src="farm details photos\twitter.png" style="width:40px; height:40px ;">coharesort<br>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
      </div>
    </div>
    </div>
  </footer>


  <script type="text/javascript" src="bootstrap.min.js"></script>



  <script>


    var modal = document.getElementById('modal-wrapper');
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>


</body>

</html>