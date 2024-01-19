<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require_once("ayar.php");
session_start();
$dosyayolu			=	"./uyeresimleri/";
$gelenkullanicisifre			=	@trim(@strip_tags(@addslashes($_POST["kullanicisifre"])));
$gelenkullaniciemail			=	@trim(@strip_tags(@addslashes($_POST["kullaniciemail"])));
$gelenkullaniciadisoyadi		=	@trim(@strip_tags(@addslashes($_POST["kullaniciadisoyadi"])));
$gelenkullanicicinsiyet			=	@trim(@strip_tags(@addslashes($_POST["kullanicicinsiyet"])));
$gelenkullanicitelefon			=	@trim(@strip_tags(@addslashes($_POST["kullanicitelefon"])));
	if(($gelenkullanicisifre!="") and ($gelenkullaniciemail!="") and ($gelenkullaniciadisoyadi!="") and ($gelenkullanicicinsiyet!="") and ($gelenkullanicitelefon!="")){
		//$bilgileriguncelle	=	@mysql_query("UPDATE uyeler SET sifre='$gelenkullanicisifre', email='$gelenkullaniciemail', adisoyadi='$gelenkullaniciadisoyadi', cinsiyet='$gelenkullanicicinsiyet', telefon='$gelenkullanicitelefon' WHERE kullaniciadi='".$_SESSION["kullanici"]."' ORDER BY id ASC LIMIT 1");
		$veri_ekle=$dbh->prepare("update uyeler set sifre=?,email=?,adisoyadi=?,cinsiyet=?,telefon=? where kullaniciadi='".$_SESSION["kullanici"]."' order by id asc LIMIT 1");
		if($veri_ekle->execute(array($gelenkullanicisifre,$gelenkullaniciemail,$gelenkullaniciadisoyadi,$gelenkullanicicinsiyet,$gelenkullanicitelefon))){echo "Kayit Basarili";	
		
		
		
			
				$gelenresimadi			=	$_FILES["resim"]["name"];
				$gelenresimturu			=	$_FILES["resim"]["type"];
				$gelenresimgeciciadi	=	$_FILES["resim"]["tmp_name"];
				$gelenresimboyutu		=	$_FILES["resim"]["size"];
				
				$resimuzantisial			=	substr($gelenresimadi,-4);
				$resmiyenidenisimlendirbir	=	rand(1000000,9999999);
				$resmiyenidenisimlendiriki	=	rand(1000000,9999999);
				$resmiyenidenisimlendiruc	=	rand(1000000,9999999);
				$resmiyenidenisimlendir		=	$resmiyenidenisimlendirbir.$resmiyenidenisimlendiriki.$resmiyenidenisimlendiruc;
				$resminsonadi				=	$resmiyenidenisimlendir.$resimuzantisial;
				
					if(($gelenresimadi!="") and ($gelenresimturu!="") and ($gelenresimgeciciadi!="") and ($gelenresimboyutu!="")){
						//$kullanicisor	=	@mysql_fetch_assoc(@mysql_query("SELECT * FROM uyeler WHERE kullaniciadi='".$_SESSION["kullanici"]."' ORDER BY id ASC LIMIT 1"));
						$veri_oku=$dbh->prepare("select * from uyeler where kullaniciadi='".$_SESSION["kullanici"]."' order by id asc limit 1");
		if($veri_oku->execute(array(1))){
			while($kullanicisor=$veri_oku->fetch()){
				
				
						
						
						
						
							$kullanicisorresim	=	$kullanicisor["resim"];
								if($kullanicisorresim!=""){
									$resimsil		=	@unlink($dosyayolu.$kullanicisorresim);
									$resimyukle		=	@move_uploaded_file($gelenresimgeciciadi,$dosyayolu.$resminsonadi);
										//$resimicinguncelle	=	@mysql_query("UPDATE uyeler SET resim='$resminsonadi' WHERE kullaniciadi='".$_SESSION["kullanici"]."' ORDER BY id ASC LIMIT 1");
										//if($resimicinguncelle){
												//@header("location:profilduzenle.php");	
											//}else{
											//	echo	"Güncelleme Ýþlemi Baþarýyla Tamamlandý, Fakat Resim Veritabanýna Yazýlamadý.<br />Bilgi Güncelleme Formuna Geri Gitmek Ýçin <a href='profilduzenle.php'>Buraya Týklayýnýz</a>.";
											//}
									$veri_ekle3=$dbh->prepare("update uyeler set resim=? where kullaniciadi='".$_SESSION["kullanici"]."' ORDER BY id ASC LIMIT 1");
		if($veri_ekle3->execute(array($resminsonadi))){
		
			@header("location:profilduzenle.php");		}		
		else {echo "Kayit problemi: ";print_r($veri_ekle3->errorinfo());}
									
								}else{
									$resimyukle		=	@move_uploaded_file($gelenresimgeciciadi,$dosyayolu.$resminsonadi);
										//$resimicinguncelle	=	@mysql_query("UPDATE uyeler SET resim='$resminsonadi' WHERE kullaniciadi='".$_SESSION["kullanici"]."' ORDER BY id ASC LIMIT 1");
										//	if($resimicinguncelle){
											///	@header("location:profilduzenle.php");	
											//}else{
											//	echo	"Güncelleme Ýþlemi Baþarýyla Tamamlandý, Fakat Resim Veritabanýna Yazýlamadý.<br />Bilgi Güncelleme Formuna Geri Gitmek Ýçin <a href='profilduzenle.php'>Buraya Týklayýnýz</a>.";
											//}
									$veri_ekle2=$dbh->prepare("update uyeler set resim=? where kullaniciadi='".$_SESSION["kullanici"]."' ORDER BY id ASC LIMIT 1");
		if($veri_ekle2->execute(array($resminsonadi))){
			
			@header("location:profilduzenle.php");		}
		else {echo "Kayit problemi: ";print_r($veri_ekle2->errorinfo());}
									
								}
					}
			}else {echo "Kayit problemi: ";print_r($veri_ekle->errorinfo());}
	}else{
		echo	"Form alanında boş alanlar bıraktınız.<br />Lütfen Formda Boþ Alan Býrakmayýnýz.<br />Bilgi Güncelleme Formuna Geri Gitmek için <a href='profilduzenle.php'>Buraya tıklayınız.</a>.";
	}
				
				
				 
			}
		else{
				echo	"Bilgi Güncelleme Ýþlemi Sýrasýnda Hata Oluþtu.<br />Lütfen Tekrar Deneyiniz.<br />Bilgi Güncelleme Formuna Geri Gitmek Ýçin <a href='profilduzenle.php'>Buraya Týklayýnýz</a>.";
			} }
		
		
		?>
