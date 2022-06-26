<?php
include("getdata.php");

$sorgu=$vt->prepare('SELECT *FROM ayarlar ORDER BY id');
$sorgu->execute();
$iletisimbilgi=$sorgu-> fetchAll(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>CEYLAN KİMYA</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->


	<!-- LOADER -->
	<div id="preloader">
		<div class="loading">
			<div class="finger finger-1">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="finger finger-2">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="finger finger-3">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="finger finger-4">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="last-finger">
				<div class="last-finger-item"><i></i></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->


        <nav class="megamenu navbar navbar-default">
        <?php 
 include_once("data/header.php");
 ?>
        </nav>
 
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>İletişim<span class="m_1">İletişim Bİlgilerimiz.</span></h1>
		</div>
	</div>
	


	<div class="map-main-box">
		<div class="container">
			<div class="row">
            <div class="col-lg-12">
			<?php 
			foreach($iletisimbilgi as $iletisim){?> 
					<div class="contact-form-wrap">
						<div class="contact-form-box">
                        
							<h2> Adres</h2>
							<p> <?= $iletisim->adres?></p>
                            
						</div>
						<div class="contact-form-box">
                        
							<h2>Telefon</h2>
							<p> <?= $iletisim->telefon?> </p>
                           
						</div>
						<div class="contact-form-box">
                        
							<h2>E-Mail</h2>
							<p> <?= $iletisim->mail?> </p>
                           
						</div>
					</div>
					<?php }?>
				</div>
				<div class="col-md-12 text-center">
					
					
				</div>
			</div>
		</div>
	</div>

	<div class="map-box">
		<div id="custom-places" class="small-map"></div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24133.284010264524!2d29.240625409456364!3d40.879324126081954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cadc9f835830e9%3A0xf5e15cbe86630278!2sPendik%2C%20Kaynarca%2C%2034890%20Pendik%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1651569513471!5m2!1str!2str" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	
  

    


    <?php 
    include_once("data/footer.php");
    ?>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
	<!-- Mapsed JavaScript -->
	<script src="js/mapsed.js"></script>
	<script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>