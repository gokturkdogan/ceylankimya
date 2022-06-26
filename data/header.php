<?php 
include("getdata.php");
$sorgu=$vt->prepare('SELECT *FROM logosayfa ORDER BY id');
$sorgu->execute();
$logosayfa=$sorgu-> fetchAll(PDO::FETCH_OBJ);
?>


<header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div style="padding-bottom:40px" class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php foreach($logosayfa as $logo){?>
                    <a class="navbar-brand" href="index.html"><img src="<?= $logo->resim ?>" alt="image"></a>
                    <?php } ?>
                </div>
                <div style="padding-top:20px" id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Anasayfa</a></li>
                        <li><a href="hakkimizda.php">Hakkımızda </a></li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Kategoriler</button>
                                <div class="dropdown-content">
                                    <a href="sanayigrubu.php">Sanayi Grubu</a>
                                    <a href="boyagrubu.php">Boya Grubu</a>
                                    <a href="savunmasanayi.php">Savunma Sanayi</a>
                                    <a href="yapigrubu.php">Yapı Grubu</a>
                                    <a href="yalitimmalzemeleri.php">Yalıtım Malzemeleri</a>
                                </div>
                            </div>
                            </li>
                        <li><a href="projelerimiz.php">Projelerimiz</a></li>
                        <li><a href="partnerlerimiz.php">Partnerlerimiz</a></li>
                        <li><a href="iletisim.php">İletişim</a></li>
                        
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>
