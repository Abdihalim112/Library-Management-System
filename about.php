
 <?php include('includes/header.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us Section</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="about css/style3.css?v=<?php echo time(); ?>">
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
#more {display: none;}
</style>
</head>	
<body>
	<div class="section">
		<div class="containerr">
			<div class="content-section">
				<div class="title">
					<h1>About Us</h1>
				</div>
				<div class="content">
					<h3>Gollis  Library Management System</h3>
					<p>Gollis University It was founded in 2004 as a non-profit institution, opened to students 
for enrollment in 2005, and was upgraded to a university within 10 months of its 
opening. Starting with 40 criminal justice and 40 civil engineering students, the student 
population reached 706 at the end of 2007.The university<span id="dots">...</span><span id="more"> has many campuses in 
different cities the lasanod campus was opened in 2015 while the university has 
received good reception from the community in its various sectors university has gone 
through at different levels and many students graduated while it was open. 
Gollis  Library Management System is an Automated Library System that handles 
the various functions of the library. It provides a complete solution to the library 
management software. Gollis Library was founded December 2021 there is two 
administration who works in two shifts the first shift starts from 8Am and ends 12Pm , 
and the second shifts starts from 4Pm and ends 8Pm . They use manual data to 
register the library data. The library contains three parts Medical (Laboratory, Nursing, 
Midwifery), Arts (E.g. Business, Economic and Accounting) and Computer Science. 
Online libraries provide the students with the convenience of learning at their own 
comfort. The purpose of a library management system is to manage & track the daily work of the 
library such as issuing books, return books, due calculations, etc.</span> </p>
					<div onclick="myFunction()" id="myBtn" class="button">
						<button class="a" onclick="myFunction()" id="myBtn">Read more</button>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>

	<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

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