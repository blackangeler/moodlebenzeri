<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require_once("ayar.php");
$registrationmessage=0;
$ipadresinedir				=	$_SERVER["REMOTE_ADDR"];
$tarih						=	date("d.m.Y H:i:s");
$gelenkullaniciadi			=	@trim(@strip_tags(@addslashes($_POST["kullaniciadi"])));
$gelenkullanicisifre		=	@trim(@strip_tags(@addslashes($_POST["kullanicisifre"])));
$gelenkullaniciemail		=	@trim(@strip_tags(@addslashes($_POST["kullaniciemail"])));
$gelenkullaniciadisoyadi	=	@trim(@strip_tags(@addslashes($_POST["kullaniciadisoyadi"])));
$gelenkullanicicinsiyet		=	@trim(@strip_tags(@addslashes($_POST["kullanicicinsiyet"])));
$gelenkullanicitelefon		=	@trim(@strip_tags(@addslashes($_POST["kullanicitelefon"])));
	if(($gelenkullaniciadi!="") and ($gelenkullanicisifre!="") and ($gelenkullaniciemail!="") and ($gelenkullaniciadisoyadi!="") and ($gelenkullanicicinsiyet!="") and ($gelenkullanicitelefon!="")){
		
		
		$veri_oku=$dbh->prepare("select * from uyeler where kullaniciadi='$gelenkullaniciadi' or email='$gelenkullaniciemail' or telefon='$gelenkullanicitelefon' order by id asc LIMIT 1");
		if($veri_oku->execute(array(1))){
			
//$kayitkontrolsayisi	=	@mysql_num_rows($kayitkontrol);
			if($veri_oku->rowCount()<1){
			
		$veri_ekle=$dbh->prepare("insert into uyeler (kullaniciadi,sifre,email,adisoyadi,cinsiyet,telefon,ipadresi,kayittarihi)
			values(?,?,?,?,?,?,?,?)");
		if($veri_ekle->execute(array($gelenkullaniciadi,$gelenkullanicisifre,$gelenkullaniciemail,$gelenkullaniciadisoyadi,$gelenkullanicicinsiyet,$gelenkullanicitelefon,$ipadresinedir,$tarih))){
			$registrationmessage=1;
			$message=	"<font color='#009900'><b>Kayıt işlemi başarıyla tamamlandı.</b></font><br />";
						$message=	"Sitemize giriş yapabilirsiniz.<br />Ana sayfaya gitmek için <a href='index.php'>Buraya tıklayınız</a>.";
		}
		else { $registrationmessage=1;
				
				$message="<font color='#990000'><b>Kayıt işlemi sırasında bir hata oluştu.</b></font><br />Kayıt formuna geri gitmek için <a href='uyeol.php'>Buraya tıklayınız</a>.";
			  
			  
			  print_r($veri_ekle->errorinfo());}
			
			}
			else{
				echo	"Girilmiş olan kullanıcı adı veya e-mail başkası tarafından kullanılmaktadır. <br />Lütfen başka kullanıcı adı veya e-mail seçiniz.<br />Kayıt formuna geri gitmek için <a href='uyeol.php'>Buraya tıklayınız.</a>.";
			}


		
		}else print_r($veri_oku->errorInfo()); //sorgu kontrolsonu,
		
}
else{
		echo	"Form alanında boş alanlar bıraktınız.<br />Lütfen formda boş alanlar bırakmayınız<br />Kayıt formuna geri gitmek için <a href='uyeol.php'>Buraya tıklayınız</a>.";
	}
		?>


<?php if ($registrationmessage==1) {echo $message;} ?>