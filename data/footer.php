<?php 
include("getdata.php");
$sorgu=$vt->prepare('SELECT *FROM ayarlar ORDER BY id');
$sorgu->execute();
$ayarlar=$sorgu-> fetchAll(PDO::FETCH_OBJ);

$sorgu1=$vt->prepare('SELECT *FROM partnerler ORDER BY id LIMIT 6');
$sorgu1->execute();
$partnerler=$sorgu1-> fetchAll(PDO::FETCH_OBJ);

$sorgu2=$vt->prepare('SELECT *FROM footerbilgi ORDER BY id');
$sorgu2->execute();
$footerbilgi=$sorgu2-> fetchAll(PDO::FETCH_OBJ);
?>


<div class="parallax section db parallax-off" style="background-image:url('uploads/parallax_02.jpg');">
        <div class="container">
            <div class="row logos">
                <?php
            foreach($partnerler as $partner){?>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img style="width:150px;height:120px" src="<?= $partner->resim ?>" alt="" class="img-repsonsive"></a>
                </div>
                <?php } ?>  
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                        <?php
                        foreach($footerbilgi as $footer){?>
                            <img style="width:100%" src="<?= $footer->resim ?>" alt="Logo Ekleyiniz">
                        </div>
                        
                        <p><?= $footer->metin ?></p>
                        <?php } ?>  
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Sayfalar</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Anasayfa</a></li>
                            <li><a href="#">Hakkımızda</a></li>
                            <li><a href="#">Kategoriler</a></li>
							<li><a href="#">Partnerlerimiz</a></li>
							<li><a href="#">İletişim</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>İletişim</h3>
                        </div>
                        <?php 
                foreach($ayarlar as $ayar){?>
                        <ul class="footer-links">
                            <li><a href="mailto:#"><?= $ayar->mail ?></a></li>
                            <li><?= $ayar->adres ?></li>
                            <li><?= $ayar->telefon ?></li>
                        </ul><!-- end links -->
                        <?php } ?>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Sosyal Medya</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i> </a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">Tüm Hakları Saklıdır. &copy; 2022 <a href="#">Ceylan Kimya</a> Design By : <a href="">Göktürk DOĞAN</a></p>
                </div>


            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

   