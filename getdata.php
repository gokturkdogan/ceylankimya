<?php //PDO bağlantısı için vt_ayar.php dosyamızı oluşturuyoruz.
try{
	$host='localhost';
	$vtadi='ceylankimya';// veritabanı adı
	$kullanici='root';//varsayılan olarak kullanıcı ismi
	$sifre='';//Varsayılan olarak Mysql root şifresi boş
	$vt=new PDO("mysql:host=$host;dbname=$vtadi;charset=UTF8","$kullanici",$sifre);
}
catch(PDOException $e){
	print $e->getMessage();
} //bu dosyayı bağlantı kuracağımız her sayfa için include edeceğiz.
?>