<?php
require_once("ayar.php");
//$kullanicisor		=	@mysql_fetch_assoc(@mysql_query("SELECT * FROM uyeler WHERE kullaniciadi='".$_SESSION["kullanici"]."' ORDER BY id ASC LIMIT 1"));
session_start();
$i=0;
$veri_oku=$dbh->prepare("SELECT * FROM uyeler WHERE kullaniciadi='".$_SESSION["kullanici"]."' ORDER BY id ASC LIMIT 1");
//$results = $veri_oku ->fetchAll(PDO::FETCH_ASSOC);	
if($veri_oku->execute(array(1))){
			while($kullanicisor=$veri_oku->fetch()){
				$i++;



	$sifre		=	$kullanicisor["sifre"];
	$email		=	$kullanicisor["email"];
	$adisoyadi	=	$kullanicisor["adisoyadi"];
	$cinsiyet	=	$kullanicisor["cinsiyet"];
	$telefon	=	$kullanicisor["telefon"];
	$resim		=	$kullanicisor["resim"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Php Eğitim Seti</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="TR" />
<style>
#tablokenar{ border:1px dotted; padding:5px; margin:5px; background-color:#FFFF66; }
</style>
</head>
<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
 
  <tr>
    <td width="200">&nbsp;</td>
    <td width="580">&nbsp;</td>
    <td width="200">&nbsp;</td>
  </tr>
  
        <td width="560" height="350" align="center" valign="top" bgcolor="#CCCCCC"><form name="bilgiguncellemeformu" action="profilduzenlesonuc.php" method="post" enctype="multipart/form-data"><div id="tablokenar"><table width="540" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td height="35" colspan="3" align="center" valign="middle"><font color="#000000"><b>BİLGİ GÜNCELLEME FORMU</b></font></td>
    </tr>
  <tr>
    <td width="150" height="25" align="left" valign="middle">Kullanıcı Adı</td>
    <td width="30" height="25" align="left" valign="middle">:</td>
    <td width="350" height="25" align="left" valign="middle"><?=$_SESSION["kullanici"]?></td>
  </tr>
  <?php if($resim!=""){ ?><tr>
    <td width="150" height="25" align="left" valign="middle">&nbsp;</td>
    <td width="30" height="25" align="left" valign="middle">&nbsp;</td>
    <td width="350" height="25" align="left" valign="middle"><img src="./uyeresimleri/<?=$resim?>" width="75" height="50" /></td>
  </tr><?php } ?>
  <tr>
    <td width="150" height="25" align="left" valign="middle">&nbsp;</td>
    <td width="30" height="25" align="left" valign="middle">&nbsp;</td>
    <td width="350" height="25" align="left" valign="middle"><input type="file" name="resim" /></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Kullanıcı Şifresi</td>
    <td height="25" align="left" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input type="password" name="kullanicisifre" size="30" maxlength="25" value="<?=$sifre?>" /></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">E-Mail Adresi</td>
    <td height="25" align="left" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input type="text" name="kullaniciemail" size="30" value="<?=$email?>" /></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Adı Soyadı</td>
    <td height="25" align="left" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input type="text" name="kullaniciadisoyadi" size="30" value="<?=$adisoyadi?>" /></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Cinsiyet</td>
    <td height="25" align="left" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input name="kullanicicinsiyet" type="radio" value="Bayan" <?php if($cinsiyet=="Bayan"){ ?>checked="checked"<?php } ?> /> Bayan <input type="radio" name="kullanicicinsiyet" value="Erkek" <?php if($cinsiyet=="Erkek"){ ?>checked="checked"<?php } ?> /> Erkek</td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Telefon</td>
    <td height="25" align="left" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input type="text" name="kullanicitelefon" value="<?=$telefon?>" size="20" /></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle"><input type="submit" value="Güncelle" /></td>
  </tr>
</table></div></form></td>
      </tr>
    </table></td>
    <td height="350" align="center" valign="top"><?php if(empty($_SESSION["kullanici"])){ ?><table width="200" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><form name="uyegirisformu" action="girisyap.php" method="post"><table width="190" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" colspan="2" align="left" valign="middle" bgcolor="#FFFFCC"><b>Üye İşlem Alanı</b></td>
      </tr>
      <tr>
        <td width="95" height="20" align="left" valign="middle">Kullanıcı Adı :</td>
        <td width="95" height="20" align="left" valign="middle"><input type="text" name="kadi" size="9" /></td>
      </tr>
      <tr>
        <td height="20" align="left" valign="middle">Şifre :</td>
        <td height="20" align="left" valign="middle"><input type="password" name="ksifre" size="9" /></td>
      </tr>
      <tr>
        <td height="20" align="left" valign="middle">&nbsp;</td>
        <td height="20" align="left" valign="middle"><input type="submit" value="Giriş Yap" /></td>
      </tr>
      <tr>
        <td height="20" align="left" valign="middle"><a href="uyeol.php">Yeni Üye Ol</a></td>
        <td height="20" align="left" valign="middle">&nbsp;</td>
      </tr>
    </table></form></td>
  </tr>
</table><?php }else{ ?><table width="200" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="190" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" align="left" valign="middle" bgcolor="#FFFFCC"><b>Üye İşlem Alanı</b></td>
      </tr>
      
      <tr>
        <td height="20" align="right" valign="middle"><a href="cikis.php" onClick="return confirm('Çıkış yapmak istediginize eminmisiniz?')">Çıkış Yap</a></td>
        </tr>
    </table></td>
  </tr>
</table><?php } ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
</table>
	<?php 
			}//while kapanıyor
		}else print_r($veri_oku->errorInfo()) //sorgu kontrolsonu,
		
		?>
</body>
</html>