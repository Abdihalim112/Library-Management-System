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
    <title>Gollis  Library Management System | </title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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

    </style>
</head>
<body style style=>
    <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
<div class="content-wrapper">
<div class="container">
<!--Slider---->
     <div class="row">
              <div class="col-md-10 col-sm-8 col-xs-12 col-md-offset-1">
                    <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="assets/img/1.jpg?v=<?php echo time(); ?>" alt="" />
                        </div>
                        <div class="item">
                            <img src="assets/img/2.jpg?v=<?php echo time(); ?>" alt="" />
                        </div>
                        <div class="item">
                            <img src="assets/img/3.jpg?v=<?php echo time(); ?>" alt="" /> 
                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
              </div>
             </div>

<hr />
<body>


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
            <button type="button" class="btn btn-primary">Show More Books</button>
            </a>
        </div>
    </div>
      
</div>
</div>

        </div>


      
    
</body>


             
 
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
 <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

   


</html>
