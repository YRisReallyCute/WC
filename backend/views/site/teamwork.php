
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
                    <h1>Teamwork</h1>
                    <span>playID</span>
                    
                </div>
                <!----//End-top-nav---->
            </div>
        </div>
        <!----//End-header---->
        <!----start-feartures----->
        <div id="fea" class="features">
            <div class="container">
                
                <!---- start-features-grids---->
                <div class="features-grids text-center">
                    <div class="col-md-3 features-grid">
                        <span class="fea-icon1"><i class="fa fa-star"> </i> </span>
                        <h3><a href="./data/teamwork/需求文档.pdf">需求文档</a></h3>
                        <p>Requirements Document.</p>
                    </div>
                    <div class="col-md-3 features-grid">
                        <span class="fea-icon1"><i class="fa fa-thumbs-up"> </i> </span>
                        <h3><a href="./data/teamwork/设计文档.pdf">设计文档</a></h3>
                        <p>Design Document.</p>
                    </div>
                    <div class="col-md-3 features-grid">
                        <span class="fea-icon1"><i class="fa fa-tachometer"> </i> </span>
                        <h3><a href="./data/teamwork/实现文档.pdf">实现文档</a></h3>
                        <p>Implemented Document.</p>
                    </div>
                    <div class="col-md-3 features-grid">
                        <span class="fea-icon1"><i class="fa fa-star"> </i> </span>
                        <h3><a href="./data/teamwork/用户手册.pdf">用户手册</a></h3>
                        <p>User's Manual.</p>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-md-3 features-grid">
                        <span class="fea-icon1"><i class="fa fa-star"> </i> </span>
                        <h3><a href="./data/teamwork/项目展示PPT.pdf">项目展示PPT</a></h3>
                        <p>Project Display.</p>
                    </div>
                    <div class="col-md-3 features-grid">
                        <span class="fea-icon1"><i class="fa fa-tachometer"> </i> </span>
                        <h3><a href="./data/teamwork/worldcup.rar">源码</a></h3>
                        <p>Source Code.</p>
                    </div>
                    <div class="col-md-3 features-grid">
                        <span class="fea-icon1"><i class="fa fa-thumbs-up"> </i> </span>
                        <h3><a href="./data/teamwork/worldcup.rar">数据库文件</a></h3>
                        <p>Database File.</p>
                    </div>
                    <div class="col-md-3 features-grid">
                        <span class="fea-icon1"><i class="fa fa-star"> </i> </span>
                        <h3><a href="#">部署文档</a></h3>
                        <p>Deploying Document.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!---- //End-features-grids---->
            </div>
        </div>
        
                    

</body>
</html>