<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['signup']))
{
 
//Code for student ID
$count_my_page = ("studentid.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp); 
$StudentId=  $_POST['StudentId'];
$fname=$_POST['fullanme'];
$mobileno=$_POST['mobileno'];
$status=1;
$sql="INSERT INTO  tblstudents(StudentId,FullName,MobileNumber,Status) VALUES(:StudentId,:fname,:mobileno,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':StudentId',$StudentId,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo '<script>alert("Your Registration successfull and your student id is  "+"'.$StudentId.'")</script>';
echo "<script>window.location.href='reg-students.php'</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}

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
    <title>Gollis Library Management System | Student Signup</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css?v=<?php echo time(); ?>" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css?v=<?php echo time(); ?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/css/util.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css?v=<?php echo time(); ?>">
<!--===============================================================================================-->


<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>
<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>    

</head>
<body>
    <!------MENU SECTION START-->
    <?php include('includes/header.php');?>
    
	<div  class="limiter">
		<div  class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				<img src="assets/img/img-01.png?v=<?php echo time(); ?>" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" onSubmit="return valid()";>
					<span class="login100-form-title">
						<b>Student Registration</b>
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="StudentId" autocomplete="off" required placeholder="Student Id" maxlength="10" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                        <i class="fa fa-bars" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="fullanme" autocomplete="off" required placeholder="Full Name" maxlength="20" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="tel" name="mobileno" autocomplete="off" required placeholder="Mobile Number" maxlength="12" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					

					</div>
					
					<div  class="container-login100-form-btn">
						<button class="login100-form-btn" name="signup">
						Register
						</button>
					</div>

					
		</div>
	</div>
	
	
	<?php include('includes/footer.php');?>
	
<!--===============================================================================================-->	
<script src="assets/vendor/jquery/jquery-3.2.1.min.js?v=<?php echo time(); ?>"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js?v=<?php echo time(); ?>"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js?v=<?php echo time(); ?>"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js?v=<?php echo time(); ?>"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/tilt/tilt.jquery.min.js?v=<?php echo time(); ?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>
