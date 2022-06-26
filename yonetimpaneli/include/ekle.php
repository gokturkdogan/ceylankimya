<?php 
if(!empty($_GET["tablo"])){

    $tablo=$VT->filter($_GET["tablo"]);
    $kontrol=$VT->getdata("moduller","WHERE tablo=? AND durum=?",array($tablo,1),"ORDER BY ID ASC",1);
    if($kontrol!=false){

    

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?=$kontrol[0]["baslik"]?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
              <li class="breadcrumb-item active"><?=$kontrol[0]["baslik"]?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-headera -->

    <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
              <a href="<?=SITE?>index.php?page=liste&tablo=<?=$kontrol[0]["tablo"]?>" class="btn btn-info" style="float:right;margin-bottom:10px;margin-left:10px"><i class="fa fa-bars"></i>LİSTE</a>
      
    </div>
    </div>
    <?php
if(isset($_POST["submit"])){
      $upl='../images/'.$kontrol[0]["tablo"]."/";
      $upload = $upl . basename($_FILES['resim']['name']);
      if(!empty($_POST["kategori"]) && !empty($_POST["baslik"]) && !empty($_POST["anahtar"]) && !empty($_POST["aciklama"]) && !empty($_POST["sirano"])){
        $kategori=$VT->filter($_POST["kategori"]);
        $baslik=$VT->filter($_POST["baslik"]);
        $anahtar=$VT->filter($_POST["anahtar"]);
        $selflink=$VT->selflink($baslik);
        $aciklama=$VT->filter($_POST["aciklama"]);
        $sirano=$VT->filter($_POST["sirano"]);
        $metin=$VT->filter($_POST["metin"]);
        if(move_uploaded_file($_FILES['resim']['tmp_name'], $upload)){
          
          if($upload!=null){
            $ekle=$VT->SorguCalistir("INSERT INTO ".$kontrol[0]["tablo"],"SET baslik=?, selflink=?, kategori=?, metin=?, resim=?, anahtar=?, aciklama=?, durum=?, sirano=?, tarih=?",array($baslik,$selflink,
          $kategori,$metin,$upload,$anahtar,$aciklama,1,$sirano,date("Y-m-d")));

          }
          else{
            ?>
        <div class="alert alert-info">Resim Yükleme İşleminiz Başarısız.</div>
        <?php
          }

        }
        else{
          $ekle=$VT->SorguCalistir("INSERT INTO ".$kontrol[0]["tablo"],"SET baslik=?, selflink=?, kategori=?, metin=?, anahtar=?, aciklama=?, durum=?, sirano=?, tarih=?",array($baslik,$selflink,
          $kategori,$metin,$anahtar,$aciklama,1,$sirano,date("Y-m-d")));
        }
        if($ekle!=false){
          ?>
          <div class="alert alert-success">İşleminiz Başarı İle Kaydedildi.</div>
          <?php

        }
        else{
          ?>
          <div class="alert alert-danger">İşleminiz Kaydedilierken Sorun Oluştu.</div>
          <?php
        }
      }
      else{
        ?>
        <div class="alert alert-danger">Boş bıraktğınız alanları doldurunuz.</div>
        <?php
      }
    }
    ?>
    <form action="#" method="post" enctype="multipart/form-data">
      <div class="col-md-8">

          <div class="card-body card card-primary">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Kategori Seç</label>
                  <select class="form-control select2" style="width: 100%;" name="kategori">
                    <?php
                    $sonuc=$VT->kategorigetir($kontrol[0]["tablo"],"",-1);
                    if($sonuc!=false){

                      echo $sonuc;

                    }
                    else{

                       $VT->tekKategori($kontrol[0]["tablo"]);
                    }
                    ?>
                  </select>
                </div>
 
            </div>
            <div class="col-md-12">
            <div class="form-group">
                <label>Başlık</label>
                <input type="text" class="form-control" placeholder="Başlık..." name="baslik">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Açıklama 1</label>
                <input type="text" class="form-control" placeholder="Metin..." name="metin">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Açıklama 2</label>
                <input type="text" class="form-control" placeholder="Anahtar..." name="anahtar">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Açıklama 3 (Kısa)</label>
                <input type="text" class="form-control" placeholder="Açıklama..." name="aciklama">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Resim</label>
                <input type="file" class="form-control" placeholder="Resim Ekleyiniz..." name="resim">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Sıra Numarası</label>
                <input type="number" class="form-control" placeholder="Sıra No" name="sirano" style="width:100px">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
          <input type="submit" name="submit" class="btn btn-block btn-primary" value="Gönder">
          </div>
          </div>
          
           </div>        
          </div>
    </div>
    </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php 
}
else{
    ?>
    <meta http-equiv="refresh" content="0;url=<?=SITE?>">
    <?php
}

}
else{
    ?>
    <meta http-equiv="refresh" content="0;url=<?=SITE?>">
    <?php
}
  ?>