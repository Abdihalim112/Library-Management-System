
<?php
session_start();
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Gollis Library Management System</title>
    <!-- BOOTSTRAP CORE CSS -->
    <link href="assetss/css/bootstrap.css" rel="stylesheet" />
    <!-- IONICON STYLE SHEET FOR BEAUTIFUL ICONS -->
    <link href="assetss/css/ionicons.css?v=<?php echo time(); ?>" rel="stylesheet" />
    <!-- STYLE FOR OPENING IMAGE IN POPUP USING FANCYBOX-->
    <link href="assetss/js/source/jquery.fancybox.css" rel="stylesheet" />
    <!-- CUSTOM CSS -->
    <link href="assetss/css/style2.css?v=<?php echo time(); ?>" rel="stylesheet" />
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
    .new-issue{
    margin-left : 55px;
    margin-right: 15px;
    background-color: ;
}


.roww
{
    padding-left: 135px;
    background-color: antiquewhite;
    margin-left: -15px;
    margin-right: -15px;
}
.row
{
   
   width:100%;
    margin-right:0px;
}
.div1{
    width: 50%;
    float:left;
}
.div2{
    width: 50%;
    float:right;
    
}
</style>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">
    <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->



















 <!-- HEADER  -->

    <div id="header">
        <div class="overlay">
            <div class="container">
                <div class="row scroll-me">
                    <div class="div1"  >
                  

                        <h1 data-scroll-reveal="enter from the bottom after 0.2s">Gollis Library  Management System 
                        </h1>
                        
                        <h4 data-scroll-reveal="enter from the bottom after 0.4s">is designed to manage all the functions of a library  It helps Adminstration to maintain the database of  new books. 

                        </h4>
                        <h4 data-scroll-reveal="enter from the bottom after 0.4s">
                        <a href="adminlogin.php"><button style="margin-bottom:30px;  border-radius:25px; font-size: 25px;" class="btn btn-success rounded-pill btn-lg ">Get started</button></a>

</h4>
                    </div>
                    <div class="div2">
                        
                    <img src="assetss/img/42.png" class="resiz" data-scroll-reveal="enter from the bottom after 0.4s" >

</div>
                    
                </div>
            </div>
            
        </div>

    </div>
    <!--HEADER SECTION END  -->
    <section id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                    <h2><strong>System features</strong></h2>
                   

                </div>
            </div>
            <div class="row text-center pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="col-md-3">
                    <i class="ion-ios-book-outline"></i>
                    <h4><strong>Manage Books</strong></h4>
                    You can add  and manage library books edit ,delete and update
                </div>
                <div class="col-md-3">
                    <i class="ion-android-contacts"></i>
                    <h4><strong>Manage Students </strong></h4>
                    You can register  and manage students edit ,delete and update
                </div>
                
                <div class="col-md-3">
                    <i class="ion-ios-settings"></i>
                    <h4><strong>Issue Book</strong></h4>
                    You can issue new books in a library easly 
                </div>
            
                
                <div class="col-md-3">
                    <i class="ion-ios-people-outline"></i>
                    <h4><strong>Manage issued books</strong></h4>
                   you can manage issued books in a simple steps
                </div>
            </div>
            
<h2  style= "text-align:center;">
<b style= "padding-bottom:24px;" > AVAILABLE BOOKS<b>
</h2>

<div data-widget-def="ux3-layout-widget" data-widget-id="2370fd7f-d084-4b28-aefc-14498bae1037" class="roww">
        




            <h2 class="section__mainHeader col-md-12" style= "text-align:center;">
               
                
            </h2>
            
        <div class="col-sm-4 col-md-2">



        
        <div class="new-issue">
    <a href="adminlogin.php">
        <img class="hidden-sm hidden-xs" src="assets/bookpic/book1.jpg" alt="">
        <h3 class="new-issue--header"> Medical Physiology</h3>
    </a>
</div>
</div><div class="col-sm-4 col-md-2">



        
        <div class="new-issue">
    <a href="adminlogin.php">
        <img class="hidden-sm hidden-xs" src="assets/bookpic/book2.jpg" alt="">
        <h3 class="new-issue--header">Cambridge IGCSE ICT</h3>
    </a>
</div>
</div><div class="col-sm-4 col-md-2">



        
        

<div class="new-issue">
    <a href="adminlogin.php">
        <img class="hidden-sm hidden-xs" src="assets/bookpic/book3.jpg" alt="Ecological Research">
        <h3 class="new-issue--header">ICT education</h3>
    </a>
</div>
</div><div class="col-sm-4 col-md-2">



        
        <div class="new-issue">
    <a href="adminlogin.php">
        <img class="hidden-sm hidden-xs" src="assets/bookpic/book4.jpg" alt="">
        <h3 class="new-issue--header">Complete ICT for Cambridge </h3>
    </a>
</div>
</div><div class="col-sm-4 col-md-2">



        
        <div class="new-issue">
    <a href="adminlogin.php">
        <img class="hidden-sm hidden-xs" src="assets/bookpic/book5.jpg" alt="">
        <h3 class="new-issue--header">ICT and English Language</h3>
    </a>
</div>


</div><div class="col-sm-4 col-md-2">



   



    
</div>
</div><div class="col-sm-4 col-md-2">
<br/>

<div class="container bg-light">
<a href="adminlogin.php">
        <div class="col-md-12 text-center">
            <button style="margin-bottom:30px; border:solid; border-radius:25px; font-size: 25px;" type="button" class="btn btn-primary">Show More Books</button>
            </a>
            <br/>
        </div>
        
    </div>
      
</div>
</div>

        </div>
        </div>


    </section>


    <!-- SERVICES SECTION END  -->
    
    
   
    <!-- CONTACT SECTION END -->
    <footer>
    <?php include('includes/footer.php');?>
    </footer>
    <!--FOOTER SECTION END  -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  SCRIPTS -->
    <script src="assetss/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assetss/js/bootstrap.js"></script>
    <!-- SCROLLING SCRIPTS PLUGIN  -->
    <script src="assetss/js/jquery.easing.min.js"></script>
    <!--  FANCYBOX PLUGIN -->
    <script src="assetss/js/source/jquery.fancybox.js"></script>
    <!-- ISOTOPE SCRIPTS -->
    <script src="assetss/js/jquery.isotope.js"></script>
     <!-- SCROLL ANIMATIONS  -->
    <script src="assetss/js/scrollReveal.js"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="assetss/js/custom.js"></script>





    
</body>
</html>
