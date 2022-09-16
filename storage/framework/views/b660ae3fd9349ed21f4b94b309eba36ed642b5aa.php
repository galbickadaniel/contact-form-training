<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Contact Us</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo url ('/'); ?>/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo url ('/'); ?>/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo url ('/'); ?>/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo url ('/'); ?>/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo url ('/'); ?>/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/<?php echo url ('/'); ?>/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?php echo url ('/'); ?>/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo url ('/'); ?>/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <?php if($errors->any()): ?>
      <div class="alert alert-danger">
          <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
      </div>
      <?php else: ?>
      <!-- <p class="mssg"><?php echo e(session('mssg')); ?></p> -->
      <?php endif; ?>
    </head>
   <!-- body -->
   <body>
      <!-- header top section start -->
      <div class="header_top">
        <div class="container">
          <div class="row">
            <div class="col-sm-5">
              <div class="contact_main">
                <div class="contact_left">
                  <div class="call_text"><a href="#"><img src="<?php echo url ('/'); ?>/images/call-icon.png"><span class="call_text_left">+01 1234567890</span></a></div>
                </div>
                <div class="contact_right">
                  <div class="call_text">Make an appointment</div>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="logo"><a href="index.html"><img src="<?php echo url ('/'); ?>/images/logo.png"></a></div>
            </div>
            <div class="col-sm-5">
              <div class="contact_main">
                <div class="contact_left">
                  <div class="call_text"><a href="#"><img src="<?php echo url ('/'); ?>/images/mail-icon.png"><span class="call_text_left">Demo@gmail.com</span></a></div>
                </div>
                <div class="contact_right">
                  <div class="call_text"><a href="#"><img src="<?php echo url ('/'); ?>/images/map-icon.png"><span class="call_text_left">+01 9876543210</span></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- header top section end -->
      <!-- header section start -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.html">HOME</a>
            <a class="nav-item nav-link" href="services.html">SERVICES</a>
            <a class="nav-item nav-link" href="about.html">ABOUT</a>
            <a class="nav-item nav-link" href="pricing.html">PRICING</a>
            <a class="nav-item nav-link" href="contact.html">CONTACT US</a>
          </div>
        </div>
      </nav>
      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Contact Us</h1>
          <div class="contact_section_2">
            <div class="row">
              <div class="col-md-6">
                <div class="mail_section">
                  <form id="idform" action="/" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="text" class="mail_text" placeholder="Name" name="name">
                    <input type="text" class="mail_text" placeholder="Email" name="email">
                    <input type="text" class="mail_text" placeholder="Phone Number" name="phone_number">
                    <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                    <input type="hidden" name="action" value="SEND" />
                  </form>
                  <div class="send_bt"><a href="javascript:;" onclick="javascript:document.getElementById('idform').submit()">SEND</a></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="map_text"><img src="<?php echo url ('/'); ?>/images/call-icon-1.png"><span class="call_text_left">+01 9876543210</span>
                <div class="map_text"><img src="<?php echo url ('/'); ?>/images/mail-icon-1.png"><span class="call_text_left">democheck@gmail.com</span>
                <div class="map_text_1"><img ssrc="<?php echo url ('/'); ?>/images/map-icon-1.png"><span class="call_text_left">t is a long established fact that a reader will be distracted by the readable conten</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
      <!-- contact section end -->
      <!-- join us section start -->
      <div class="join_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="member_text">Want To Be A Member? Join With Us</h1>
            </div>
            <div class="col-md-6">
              <div class="join_bt"><a href="#">SEND</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- join us section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
        <div class="container">
          <div class="social_icon">
            <ul>
              <li><a href="#"><img src="<?php echo url ('/'); ?>/images/fb-icon.png"></a></li>
              <li><a href="#"><img src="<?php echo url ('/'); ?>/images/twitter-icon.png"></a></li>
              <li><a href="#"><img src="<?php echo url ('/'); ?>/images/linkdin-icon.png"></a></li>
              <li><a href="#"><img src="<?php echo url ('/'); ?>/images/instagram-icon.png"></a></li>
            </ul>
          </div>
          <p class="lorem_ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
        </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
        <div class="container">
          <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</a></p>
        </div>
      </div>
      <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="<?php echo url ('/'); ?>/js/jquery.min.js"></script>
   <script src="<?php echo url ('/'); ?>/js/popper.min.js"></script>
   <script src="<?php echo url ('/'); ?>/js/bootstrap.bundle.min.js"></script>
   <script src="<?php echo url ('/'); ?>/js/jquery-3.0.0.min.js"></script>
   <script src="<?php echo url ('/'); ?>/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="<?php echo url ('/'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="<?php echo url ('/'); ?>/js/custom.js"></script>
   <!-- javascript --> 
   <script src="<?php echo url ('/'); ?>/js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
     $('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
   </script>
   </body>
   </html>
<?php /**PATH /home/pc/VSCodeProjects/example-app/resources/views/index.blade.php ENDPATH**/ ?>