<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{?>
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
    <title>Gollis  Library Management System | Admin Dash Board</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<style>
.midab{
  background: ;
  padding-top:20px;
  padding-left:20px;
  padding-right:20px;
  border:dot;
  border-radius:30px;
  margin-bottom:20px;
  
}
.midab2{
  background:powderblue;
  padding-top:10px;
  padding-bottom:10px;
}
.midab4{
  
  background:yellow;
}

</style>
</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div style="background:#5D8AA8;"  class="midab1" class="content-wrapper">
         <div  class="container">
        <div  class="row pad-botm">
            <div class="col-md-12">
                <b><h4 style="color:white; text-align:center;" class="header-line">ADMIN DASHBOARD</h4></b>
                
                            </div>

        </div>
             
             <div class="midab" class="row">
<a href="manage-books.php">
 <div   class="col-md-3 col-sm-3 col-xs-6">
 <div style= " background:#004953; color:white; border:solid; border-radius:20px;"  class="alert alert-success back-widget-set text-center">
 <i class="fa fa-book fa-5x"></i>
<?php 
$sql ="SELECT id from tblbooks ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$listdbooks=$query->rowCount();
?>
<h3><?php echo htmlentities($listdbooks);?></h3>
Books Listed
</div></div></a>

            
       
             <a href="manage-issued-books.php">
               <div  class="col-md-3 col-sm-3 col-xs-6">
                      <div style= "  background:#ff9f00; color:white; border:solid; border-radius:20px;" class="alert alert-warning back-widget-set text-center">
                            <i class="fa fa-recycle fa-5x"></i>
<?php 
$sql2 ="SELECT id from tblissuedbookdetails where (RetrunStatus='' || RetrunStatus is null)";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$returnedbooks=$query2->rowCount();
?>

                            <h3><?php echo htmlentities($returnedbooks);?></h3>
                          Books Not Returned Yet
                        </div>
                    </div>
                </a>

  <a href="reg-students.php">
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div style= "  background:#922724; color:white; border:solid; border-radius:20px;" class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-users fa-5x"></i>
                            <?php 
$sql3 ="SELECT id from tblstudents ";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$regstds=$query3->rowCount();
?>
                            <h3><?php echo htmlentities($regstds);?></h3>
                           Registered Students
                        </div>
                    </div></a>
                    
 <div class="row">



  <a href="manage-categories.php">            
<div class="col-md-3 col-sm-3 rscol-xs-6">
<div style= "  background:#50C878; color:white; border:solid; border-radius:20px;" class="alert alert-info back-widget-set text-center">
<i class="fa fa-file-archive-o fa-5x"></i>
<?php 
$sql5 ="SELECT id from tblcategory ";
$query5 = $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$listdcats=$query5->rowCount();
?>

                            <h3><?php echo htmlentities($listdcats);?> </h3>
                           Listed Categories
                        </div>
                    </div></a>







                    <a href="manage-issued-books.php">
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div style= " background:#007FFF; color:white; border:solid; border-radius:20px;" class="alert alert-primary back-widget-set text-center">
                            <i class="fa fa-bars fa-5x"></i>
                            <?php 
$sql3 ="SELECT id from tblissuedbookdetails ";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$regstds=$query3->rowCount();
?>
                            <h3><?php echo htmlentities($regstds);?></h3>
                            Total Issued Books
                        </div>
                    </div></a>


                    <a href="#">
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div style= " background:#120a8f; color:white; border:solid; border-radius:20px;" class="alert alert-warning back-widget-set text-center">
                            <i class="fa fa-calendar fa-5x"></i>
                            <?php 
// Prints the day, date, month, year, time, AM or PM

?>
                            <h3 style= " font-size:14.2px;" ><?php echo date("l jS \of F Y");  ?></h3>
                            Date today
                        </div>
                    </div></a>



                    <a href="#">
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div style= " background:#004225; color:white; border:solid; border-radius:20px;" class="alert alert-warning back-widget-set text-center">
                            <i class="fa fa-table fa-5x"></i>
                            <?php 
// Prints the day, date, month, year, time, AM or PM

?>
                            <h3 >5</h3>
                            Tables
                        </div>
                    </div></a>



  

                    <a href="reg-students.php">
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div style= " background:#0abab5; color:white; border:solid; border-radius:20px;" class="alert alert-warning back-widget-set text-center">
                            <i class="fa fa-print fa-5x"></i>
                            <?php 
// Prints the day, date, month, year, time, AM or PM

?>
                            <h3 >Print</h3>
                            Print information
                        </div>
                    </div></a>






             

        </div>             
            
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
<?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php } ?>
