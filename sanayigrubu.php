<?php 
include("getdata.php");

$sorgu=$vt->prepare('SELECT *FROM sanayigrubu ORDER BY id');
$sorgu->execute();
$sanayiler=$sorgu-> fetchAll(PDO::FETCH_OBJ);
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
			<h1>Sanayi Grubu<span class="m_1"></span></h1>
		</div>
	</div>
	
	

    <div class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Ürün Listesi</h3>
				<div class="dmoain-pricing">
					<div class="table-responsive-sm">
						<table>
							<thead>
								<tr class="domain-head">
									<th style="width:660px" scope="col">
										Ürün Adı
									</th>
									<th scope="col">
										Kategori
									</th>
								
								</tr>
							</thead>
							<tbody>
                            <?php 
                foreach($sanayiler as $sanayi){?>
								<tr>
									<td style="text-align: left;padding-left:10px;padding-right:10px"><?= $sanayi->baslik ?></td>
									<td>Sanayi Grubu</td>
								</tr>
                                <?php } ?>
							</tbody>
						</table>
					</div>
				</div>
            </div><!-- end title -->
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