<?php
include("getdata.php");

$sorgu=$vt->prepare('SELECT *FROM partnerler ORDER BY id');
$sorgu->execute();
$partnerler=$sorgu-> fetchAll(PDO::FETCH_OBJ);

$sorgu3=$vt->prepare('SELECT *FROM sayfabannerprojelerimiz ORDER BY id');
$sorgu3->execute();
$projeler=$sorgu3-> fetchAll(PDO::FETCH_OBJ);

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
			<h1>Partnerlerimiz<span class="m_1"></span></h1>
		</div>
	</div>
	
	<div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Partner Firmalarımız</h3>
                <p class="lead">Firmamız <strong>Ceylan</strong> Endüstriyel Kimya olarak, ortak projeler yürüttüğümüz partnerlerimiz.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-md-offset-3">
                   
                        <ul class="nav nav-pills " id="myTabs">
                            <li class="active"><a href="#tab1" data-toggle="pill">Partner Firmalar</a></li>
                        </ul>
                   
                </div><!-- end col -->
            </div>

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade in" id="tab1">
                        <div class="row dev-list text-center">
                        <?php 
                foreach($partnerler as $partner){?>
                        <div style="margin-top:10px" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="widget clearfix">
                        <img src="<?= $partner->resim ?>" alt="" class="img-responsive">
                        <div class="widget-title">
                            <h3><?= $partner->baslik ?></h3>
                            
                        </div>
                        <!-- end title -->
                        <p><?= $partner->aciklama ?></p>

                        <hr> 

                        

                        <hr>

                        <a href="partner-detay.php?id=<?= $partner->ID ?>" data-scroll class="btn btn-light grd1 effect-1 btn-radius btn-brd">DETAY</a>

                    </div><!--widget -->
                </div>
                <?php } ?>
                             <!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
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
                                <img src="<?= $proje->resim ?>" alt="" class="img-responsive alignleft">
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
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Çalışma Alanlarımız</h3>
                    <p class="lead">Hizmet verdiğimiz faaliyet alanlarımız.</p>
                </div>
            </div><!-- end title -->

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
                </div><!-- end col --><!-- end col -->  
                <?php } ?>
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