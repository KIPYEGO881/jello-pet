<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <style>
                img{
                    display: center;
                    height: ;
                    width: ;

                    }
image1{
    width: 20px;
    height: 30px;
}
            </style>
            <link href="images/jello_vet.png" rel="shortcut icon">
            <title>Jello Vet services</title>

            <!--
jello vetinary services


            -->
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="team" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

            <link href="css/bootstrap.css" rel="stylesheet">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/font-awesome.min.css" rel="stylesheet">
            <link href="css/animate.min.css" rel="stylesheet">
            <link href="css/prettyPhoto.css" rel="stylesheet">
            <link href="css/main.css" rel="stylesheet">
            <link href="css/responsive.css" rel="stylesheet">
            <!-- MAIN CSS -->
            <link rel="stylesheet" href="tooplate-style.css">


        </head>
        <body>
        <div style="background-color: red;"> <i class="glyphicon glyphicon-calendar" "></i> <?php echo date('Y d, M');?></div>
        <video class="video" poster="" autoplay muted loop style="top: 50%; left: 50%;transform: translate(-50%, -50%); position:fixed; width: 100%;">
            <source src="images/jello_video.mp4" type="video/mp4">
        </video>

        <!-- PRE LOADER -->
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="wow fadeInDown" style="margin-top:20px; color:red;">
                        <img src="images/jello_vet.png"  width="30% "/> </a>
                </div>

                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li class="active"><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>

                    </ul>
                </div>
            </div><!--/.container-->
        </nav>
        <div class="carousel-item active">
        <div class="carousel-container">
            <div  class="carousel-content">
                <h1 class="animate_aminated animate_fadeInDown">welcome to jello veterinary services</h1>
            </div></div></div>
                <!-- MENU LINKS -->

            </div>
        </section>
<


</div>
        <!-- FEATURE -->
        <section id="home" data-stellar-background-ratio="0.5">
            <div class="col-md-3" >
                <div class="panel panel-default wow fadeInDown">
                    <!-- Default panel contents -->

                    <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Welcome To Our Jello Vet Services</div>

                </div>

                <div class="panel panel-default wow fadeInDown">
                    <!-- Default panel contents -->
                    <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Jello products  On Special Offer </div>
                    <ul class="list-group">

                        <li class="list-group-item wow fadeInDown">Dog - <span style="color:#8B8B00; font-weight:bold;">Php 500 to 600 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>


                        <li class="list-group-item wow fadeInDown">Cat- <span style="color:#8B8B00; font-weight:bold;">Php 200 to 350 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>



                    </ul>

                    <a href="available.php" class="btn btn-success btn-sm pull-right wow fadeInDown">Click here to View More</a>

                <br>
                <div class="panel panel-default wow fadeInDown">
                    <div class="panel-heading wow fadeInDown" style="font-size:16px; font-weight:bold; color: #36648B;">Our Location</div>
                </div>

                    <div class="recent-work-wrap class="wow fadeInDown""><br><br>
                <img class="img-responsive wow fadeInDown" src="images/c71.jpg" alt="">

                <div class="recent-work-inner">
                    <a class="preview wow fadeInDown" href="" rel="prettyPhoto">
                        <br><span class="btn btn-success btm-sm pull-right">Preview Map</span></a>

            </div>
            </div>
            </div>

            </div>
<div class="image1">
    <img src="images/PET.jpeg" alt="" style="height: 250px; width: 230px;">
    <img src="images/d6.jpg" alt=""><img src="images/c4.jpg" alt=""><img src="images/b7.jpg" alt=""><img src="images/back.png" alt="">

</div>
<div>
          <img src="images/images__med.png">
          <img src="images/d4.jpg">
            <img src="images/foods/logo.png" >
           <img src="images/c11.jpg" >
            <img src="images/3.jpg.jpg" alt="">
            <img src="images/d3.jpg" alt=""></div>

        </section>





        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/custom.js"></script>

        </body>
        </html>
 <!----loginModal----->
<?php include('loginModal.php');?>      
                     
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
        <footer id="footer" class="midnight-blue wow fadeInDown">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 wow fadeInDown">
                        &copy; 2022 <a target="_blank" href="#" title="#">Jello vet Online Website</a>. All Rights Reserved .
                    </div>
                    <div class="col-sm-6">
                        <ul class="pull-right wow fadeInDown">
                            <li class="wow fadeInDown"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>

                            <li class="wow fadeInDown"><a href="contacts.php"><i class="fa fa-phone"></i> Contacts</a></li>
                            <li class="wow fadeInDown"><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Admin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->
        <!----loginModal----->
<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>