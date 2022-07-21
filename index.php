<?php
include 'lib/Session.php';
Session::init();
include('includes/header.php');
include('includes/header_slider.php');
include('includes/menu.php');
?>
<div class="container bg-light-black">
  
  <div class="main-content">
    <div class="featured-heading">
      <h1 style="color: white;">Welcome To Online Examination Portal</h1>
    </div>

    <div class="ruler"></div>

    <div class="tabs">
      <ul id="myTabContent" class="nav nav-tabs">
        <li class=""><a href="#fuscelobin" data-toggle="tab">Registers(Students)</a></li>
        <li class="active"><a href="#vestibuluco" data-toggle="tab">Log In(Students)</a></li>
        <li class=""><a href="#loginadmin" data-toggle="tab">Log In(Administrators)</a></li>
      </ul>
      
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="vestibuluco">
          <div class="media">
            <img src="img/stdlogin.jpg" class="spacing-r" alt="">
            <div class="media-body">
              <h1 class="media-heading ruler-bottom">Log In For Students</h1>
              <p style="font-size: 16px;">Login To Enter Exam Hall</p>
              <div class="readmore">
                <a href="login.php"><button class="btn-log">Log In</button></a>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade " id="loginadmin">
          <div class="media">
            <img src="img/aloginy1.jpg" class="spacing-r" alt="">
            <div class="media-body">
              <h1 class="media-heading ruler-bottom">Log In For Administration</h1>
              <p style="font-size: 16px;">Login To Access Administrator Area</p>
              <div class="readmore">
                <a href="login_twice.php"><button class="btn-log">Log In</button></a>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="fuscelobin">
          <div class="media">
            <img src="img/registery.jpg" class="spacing-r" alt="">
            <div class="media-body">
              <h1 class="media-heading ruler-bottom">Registration For Test Takers</h1>
              <p style="font-size: 16px;">Register To Take Classtest</p>
              <div class="readmore">
                <a href="register_one.php"><button class="btn-log">Register</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include('includes/footer.php');
?>