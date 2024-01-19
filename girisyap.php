<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("ayar.php");
session_start();
$gelenkadi		=	@trim(@strip_tags(@addslashes($_POST["kadi"])));
$gelenksifre	=	@trim(@strip_tags(@addslashes($_POST["ksifre"])));
$tarih			=	date("d.m.Y H:i:s");
if(($gelenkadi!="") and ($gelenksifre!="")){
	//$kayitsor			=	@mysql_query("SELECT * FROM uyeler WHERE kullaniciadi='$gelenkadi' AND sifre='$gelenksifre' ORDER BY id ASC LIMIT 1");
	$veri_oku=$dbh->prepare("select * from uyeler where kullaniciadi='$gelenkadi' order by id asc LIMIT 1");
		if($veri_oku->execute(array(1))){
	
	
	
	
	//$kayitsortoplam		=	@mysqli_num_rows($kayitsor);
			//$kayitsortoplam>0
		if($veri_oku->rowCount()>0){
			//$logkaydiyap	=	@mysql_query("INSERT INTO uyegiriscikislog (kullaniciadi, islemtarihi) values ('$gelenkadi', '$tarih')");
				//$_SESSION["kullanici"]	=	$gelenkadi;
					//@header("location:index.php");
			
			$veri_ekle=$dbh->prepare("insert into uyegiriscikislog (kullaniciadi,islemtarihi)
			values(?,?)");
		if($veri_ekle->execute(array($gelenkadi,$tarih))){
			$_SESSION["kullanici"]	=	$gelenkadi;
			
			@header("location:index2.php");}
			
		else {echo "Kayit problemi: ";print_r($veri_ekle->errorinfo());}
			
			
			
			
			
		}else{
			echo	"Kullanıcı adi veya şifre uyuşmuyor.<br />Lütfen Bilgileri Kontrol Ederek Tekrar Deneyiniz.<br />Ana Sayfaya Gitmek için <a href='index.php'>Buraya tıklayınız.</a>.";
		}

	
	
	
			
		}else print_r($veri_oku->errorInfo());	} //sorgu kontrolsonu,
else{
	echo	"Giriş formu alanında boş alanlar bıraktınız.<br />Lütfen giriş formunda boş alan bırakmayınız.<br />Ana Sayfaya Gitmek için <a href='index.php'>Buraya tıklayınız.</a>.";
}
		?>
