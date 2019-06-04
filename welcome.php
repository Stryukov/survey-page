<?php
 include('lang/lang.'.$_GET['lang'].'.php');
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Приветственная страница">
    <meta name="author" content="strkv">

    <title><?php echo $lang['title']; ?></title>

    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
 
    <!-- Custom Google Web Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	
    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
	
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<img class="logo2" height="130" src="img/2logo.svg" alt="Generic placeholder image">
			<h3 class="h1_home wow fadeIn" data-wow-delay="0.4s" style="margin-bottom: 20px"><?php echo $lang['welcome']; ?></h3>
			<p class="h3_home wow fadeIn" data-wow-delay="0.6s"><?php echo $lang['welcome-text']; ?></p>

		</div>    
        <!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="img/circle.png" alt=""> </a>
			</div>
		</div>
		<div class="copyright"><?php echo $lang['copyright']; ?></div>
    </div>
	

	
	<!-- What is -->
	<div id="whatis" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class=" text-center wrap_title" style="margin-bottom: 80px;">
				<h2><?php echo $lang['resource-title']; ?></h2>
				<p class="lead" style="margin-top:0"><?php echo $lang['resource-subtitle']; ?></p>
				
			</div>
			
			<div class="row">
			
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img width="100" src="img/pkgo.svg" alt="Generic placeholder image">
				  <h3><?php echo $lang['link1-title']; ?></h3>
				  <p class="lead"><?php echo $lang['link1-desc']; ?></p>
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img width="100" src="img/pkgo.svg" alt="Generic placeholder image">
				  <h3><?php echo $lang['link2-title']; ?></h3>
				   <p class="lead"><?php echo $lang['link2-desc']; ?></p>
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img width="100" src="img/pkgo.svg" alt="Generic placeholder image">
				  <h3><?php echo $lang['link3-title']; ?></h3>
					<p class="lead"><?php echo $lang['link3-desc']; ?></p>
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
				
			<div class="row tworow">
			
				<div class="col-sm-4  wow fadeInDown text-center">
				  <img width="100" src="img/pkgo.svg" alt="Generic placeholder image">
				  <h3><?php echo $lang['link4-title']; ?></h3>
				  <p class="lead"><?php echo $lang['link4-desc']; ?></p>
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img width="100" src="img/pkgo.svg" alt="Generic placeholder image">
				  <h3><?php echo $lang['link5-title']; ?></h3>
				   <p class="lead"><?php echo $lang['link5-desc']; ?></p>
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img width="100" src="img/pkgo.svg" alt="Generic placeholder image">
				  <h3><?php echo $lang['link6-title']; ?></h3>
				 <p class="lead"><?php echo $lang['link6-desc']; ?></p>
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
		</div>
	</div>




    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>

</body>

</html>
