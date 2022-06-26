<?php
include("getdata.php");

$sorgu=$vt->prepare('SELECT *FROM partnerler ORDER BY id DESC LIMIT 3');
$sorgu->execute();
$partnerler=$sorgu-> fetchAll(PDO::FETCH_OBJ);

$sorgu1=$vt->prepare('SELECT *FROM onecikankategori1 ORDER BY id DESC LIMIT 3');
$sorgu1->execute();
$kozmetikurunler=$sorgu1-> fetchAll(PDO::FETCH_OBJ);

$sorgu2=$vt->prepare('SELECT *FROM onecikankategori2 ORDER BY id DESC LIMIT 2');
$sorgu2->execute();
$boyaurunler=$sorgu2-> fetchAll(PDO::FETCH_OBJ);

$sorgu3=$vt->prepare('SELECT *FROM sayfabannerprojelerimiz ORDER BY id');
$sorgu3->execute();
$projeler=$sorgu3-> fetchAll(PDO::FETCH_OBJ);

$sorgu4=$vt->prepare('SELECT *FROM anasayfahakkimizda ORDER BY id');
$sorgu4->execute();
$hakkimizda=$sorgu4-> fetchAll(PDO::FETCH_OBJ);

$sorgu5=$vt->prepare('SELECT *FROM logosayfa ORDER BY id');
$sorgu5->execute();
$logosayfa=$sorgu5-> fetchAll(PDO::FETCH_OBJ);

$sorgu6=$vt->prepare('SELECT *FROM calismaalanlarimiz ORDER BY id');
$sorgu6->execute();
$kategoriler=$sorgu6-> fetchAll(PDO::FETCH_OBJ);

$sorgu7=$vt->prepare('SELECT *FROM banner ORDER BY id');
$sorgu7->execute();
$bannerler=$sorgu7-> fetchAll(PDO::FETCH_OBJ);
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

 <?php 
 include_once("data/header.php");
 ?>
	
	<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->

		<div class="carousel-inner" role="listbox">
			<div class="item active">
            <?php
            foreach($bannerler as $banner){?>
				<div id="home" class="first-section" style="background-image:url('<?= $banner->resim ?>');">
                
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-center">
								<div class="big-tagline">
                                <?php
            foreach($logosayfa as $logo){?>
									<img src="<?= $logo->resim ?>" alt="Logo Ekleyiniz">
                                    <?php }?>
									<h2 data-animation="animated zoomInRight">Ceylan <strong>Kimya</strong> Ürünleri</h2>
									<p class="lead" data-animation="animated fadeInLeft"><?= $banner->baslik ?> </p>
									 
								</div>
							</div>
						</div><!-- end row -->            
					</div><!-- end container -->
				</div><!-- end section -->
                <?php }?>
			</div>


			<!-- Left Control -->


			<!-- Right Control -->

		</div>
	</div>
	
    <?php 
                            foreach($hakkimizda as $hakkimiz){?>  
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Hakkımızda</h3>
                    <p class="lead"><?= $hakkimiz->aciklama?></p>
                </div>
            </div><!-- end title -->
        
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>2022 KİMYA ENDÜSTRİSİ</h4>
                        <h2><?= $hakkimiz->baslik?></h2>
                        <p class="lead"><?= $hakkimiz->metin?></p>

                        <p> <?= $hakkimiz->anahtar?> </p>

                        <a href="hakkimizda.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Hakkımızda</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="<?= $hakkimiz->resim?>" alt="" class="img-responsive img-rounded">
                       
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis"> 



            <hr class="hr3"> 

        </div><!-- end container -->
    </div><!-- end section -->
    <?php }?>


    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('uploads/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Projelerimiz</h3>
                <p class="lead">Partner Firmalarımız İle Yürütmekte olduğumuz Projelerimiz.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                    <?php 
                            foreach($projeler as $proje){?>   
                    <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> <?= $proje->baslik ?></h3>
                                <p class="lead"><?= $proje->metin ?></p>
                            </div>
                            <div class="testi-meta">
                                <img style="width:300px" src="<?= $proje->resim ?>" alt="" class="img-responsive alignleft">
                                <h4><?= $proje->anahtar ?> <small>- <?= $proje->aciklama ?></small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <?php }?>
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    <div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Çalışma Alanlarımız</h3>
                <p class="lead">Firmamız <strong>Ceylan</strong> Endüstriyel Kimya Ürünleri.</p>
            </div><!-- end title -->
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
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>