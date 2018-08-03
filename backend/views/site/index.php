<?php

/* @var $this yii\web\View */
//$this->body background="../images/header-bg.jpg";
$this->title = 'My Yii Application';

?>

<body style="overflow:hidden">
<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
<!---- start-smoth-scrolling---->
<!-- Custom Theme files -->
<link href="css/theme-style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<!----//webfonts---->
<!----start-top-nav-script---->
        <script>
            $(function() {
                var pull        = $('#pull');
                    menu        = $('nav ul');
                    menuHeight  = menu.height();
                $(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
                $(window).resize(function(){
                    var w = $(window).width();
                    if(w > 320 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    }
                });
            });
        </script>
        <!----//End-top-nav-script---->
</head>
<body>
        <!----start-container---->
            <!----start-header---->
        <div id="home" class="header scroll">
            <div class="container">
                <!---- start-logo---->
                <!-- <div class="logo">
                    <a href="index.html"><img src="images/logo.png" title="Mabur" /></a>
                </div> -->
                <!---- //End-logo---->
                <!----start-top-nav---->
                 
                <div class="clearfix"> </div>
                <div class="slide-text text-center">

                    <h1>     </h1>
                    <span></span>
                    <h1>欢迎来到后台！</h1>
                    
                    
                </div>
                <!----//End-top-nav---->
            </div>
        </div>
        <!----//End-header---->
        <!----start-feartures----->
       
                    

</body>
</html>
    

<!-- <div id="home" class="header scroll" style="overflow:hidden">
 -->    
<p></p>
            <div class="cbottom">
                <div class="col-md-3 col-sm-3 cbl">
            </div>
            <div class="col-md-6 col-sm-6 cbr">
                <div style="background:url(../web/statics/assets/img/avatars/6.jpg) no-repeat; width:1800px; height:850px;">

<!-- <img src="../web/statics/assets/img/avatars/2.jpg"> -->
                <!---- start-logo---->
                <!-- <div class="logo">
                    <a href="index.html"><img src="images/logo.png" title="Mabur" /></a>
                </div> -->
                <!---- //End-logo---->
                <!----start-top-nav---->
                <h1>
            <label class="line"></label>
        <p align="left",size="150px">WELCOME！</p>
      
        </h1>
        </div>
               <!--  <div class="clearfix"> </div>
                <div class="slide-text text-center">
 -->
                    
                    
               <!--  </div> -->
                <!----//End-top-nav---->
            </div>

        </div>