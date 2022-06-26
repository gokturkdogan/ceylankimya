<?php
include("getdata.php");

$sorgu=$vt->prepare('SELECT *FROM hakkimizdasayfahakkimizda ORDER BY id');
$sorgu->execute();
$hakkimizda=$sorgu-> fetchAll(PDO::FETCH_OBJ);

$sorgu1=$vt->prepare('SELECT *FROM calismaalanlarimiz ORDER BY id');
$sorgu1->execute();
$kategoriler=$sorgu1-> fetchAll(PDO::FETCH_OBJ);
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
			<h1>Hakkımızda<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
        <?php 
            foreach($hakkimizda as $hakkimiz){?>  
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Hakkımızda</h3>
                    <p class="lead"><?= $hakkimiz->aciklama?></p>
                </div>
            </div><!-- end title -->
        
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>CEYLAN KİMYA ÜRÜNLERİ</h4>
                        <h2><?= $hakkimiz->baslik?></h2>
                        <p class="lead"><?= $hakkimiz->metin?></p>

                        <p> <?= $hakkimiz->anahtar?> </p>

                        <a href="index.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">ANASAYFA</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="<?= $hakkimiz->resim?>" alt="" class="img-responsive img-rounded">
                        
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
            <?php }?>

            <hr class="invis"> 

            <div class="row"> 
            <?php 
            foreach($kategoriler as $kategori){?>  
                <div style="margin-top:80px" class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-server global-radius effect-1 alignleft"></i>
                        <h3><?= $kategori->baslik?></h3>
                        <p><?= $kategori->metin?></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->
                <?php }?> 
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    



	
	
  

    


    <?php 
    include_once("data/footer.php");
    ?>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	
	<!-- Mapsed JavaScript -->
	<script src="js/mapsed.js"></script>
	<script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>