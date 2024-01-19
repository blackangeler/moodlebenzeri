<?php
require_once("ayar.php");
//$kullanicisor		=	@mysql_fetch_assoc(@mysql_query("SELECT * FROM uyeler WHERE kullaniciadi='".$_SESSION["kullanici"]."' ORDER BY id ASC LIMIT 1"));
session_start();

$veri_oku=$dbh->prepare("SELECT * FROM uyeler WHERE kullaniciadi='".$_SESSION["kullanici"]."' ORDER BY id ASC LIMIT 1");
//$results = $veri_oku ->fetchAll(PDO::FETCH_ASSOC);	
if($veri_oku->execute(array(1))){
			while($kullanicisor=$veri_oku->fetch()){
				

$_SESSION["id"]	= $kullanicisor["id"];
	
	$adisoyadi	=	$kullanicisor["adisoyadi"];
	
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
<link rel="stylesheet" type="text/css" href="CSS/index2.css">
<script>document.createElement("servisler")</script>
</head>

<body>
<div class="çerçeve">
<div class="banner">
<table width="100%">
<tr>
<td class="logo"><a href="index2.php" class="logolink">E-Öğrenme Destek Sistemi Platformu</td>

</tr>
</table>
</div>
<div class="menu">
<tr>
<td>
<ul>
  <li><a href="anasayfa.php" target="icerik">Ana sayfa</a></li>
  <li><a href="duyurular.php" target="icerik">Duyurular</a></li>
  <li><a href="servisler.php" target="icerik">Servisler</a></li>
  <li><a href="yardim.php" target="icerik">Yardım</a></li>
  <li><a href="iletisim.php" target="icerik">İletişim</a></li>

</ul>
</td>
</tr>
</table></div>
<div class="solmenu">
<div id="deneme">
<div class="menu3">
  <img src="Resimler/kullanici.png" width="150" height="150" class="resimkaydir"> <br><br> <?=$adisoyadi?> <br><br>
<ul>
  <li><a href="profilduzenle.php">Kullanıcı Bilgileri</a></li>

  <li><a href="aldigidersler.php">Aldığı Dersler</a></li>

  <li><a href="#odevler">Ödevler</a></li>
  
  <li><a href="notlistesi.php">Not Listesi</a></li>

  <li><a href="#sifredegistir">Şifre Değiştir</a></li>

  <li>
        <td height="20" align="right" valign="middle"><a href="cikis.php" onClick="return confirm('Çıkış yapmak istediginize eminmisiniz?')">Çıkış Yap</a></td>
        </li>
</ul>
</div>

  </div>
</div>
<div class="icerik">
<iframe name="icerik" width="100%" height="100%" src="anasayfa.php" frameborder="0" scrolling="no"></iframe>
</div>
</div><hr>

<div class="footdiv">

<div class="footer1">HAKKINDA<hr><br>
<a href="projehakkinda.php" target="icerik" class="footerlink">Proje Hakkında</a><br>
<a href="kullanimsartlari.php" target="icerik" class="footerlink">Kullanım Şartları</a><br>
<a href="gizliliksartlari.php" target="icerik" class="footerlink">Gizlilik Kuralları</a><br>
<a href="duyurular.php" target="icerik" class="footerlink">Duyurular</a><br>
<a href="iletisim.php" target="icerik" class="footerlink">Bize Ulaşın</a><br>
</div>
<div class="footer2">E ÖĞRENME<hr><br>
<a href="eogrenmenedir.php" target="icerik" class="footerlink">e-Öğrenme Nedir?</a><br>
<a href="edsnedir.php" target="icerik" class="footerlink">e-Öğrenme Destek Sistemi Nedir?</a><br>
</div>
<div class="footer3"><servisler>SERVİSLER</servisler><hr><br>
<a href="moodle.php" target="icerik" class="footerlink">Moodle</a><br>
<a href="xerte.php" target="icerik" class="footerlink">Xerte</a><br>
<a href="onport.php" target="icerik" class="footerlink">OnPort</a><br>
<a href="sbank.php" target="icerik" class="footerlink">Soru Bankası</a><br>
</div>
<div class="footer4">&nbsp;<hr><br>
<a href="moodleyardim.php" target="icerik" onClick="click" class="footerlink">Moodle Yardımı</a><br>
<a href="xerteyardim.php" target="icerik" class="footerlink">Xerte Yardımı</a><br>
<a href="onportyardim.php" target="icerik" class="footerlink">OnPort Yardımı</a><br>
<a href="sbankyardim.php" target="icerik" class="footerlink">Soru Bankası Yardımı</a><br>
</div>
</div>


</body>
</html>
<?php 
			}//while kapanıyor
		}else print_r($veri_oku->errorInfo()) //sorgu kontrolsonu,
		
		?>
