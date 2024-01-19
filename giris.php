<?php require_once("ayar.php");
session_start();
	 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
<link rel="stylesheet" type="text/css" href="CSS/edsnedir.css">
</head>

<body>
	
	
    <td height="350" align="center" valign="top"><?php if(empty($_SESSION["kullanici"])){ ?><table width="200" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><form name="uyegirisformu" action="girisyap.php" method="post"><table width="190" border="0" align="center" cellpadding="0" cellspacing="0">
      
        <div class="roundbaslik">
Giriş Kontrolü
</div>
      
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
		  <td><a href="sifremiunuttum.php" target="icerik">Şifremi Unuttum</a></td>
        <td height="20" align="left" valign="middle">&nbsp;</td>
      </tr>
    </table></form></td>
  </tr>
</table><?php }else{ ?><table width="200" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="190" border="0" align="center" cellpadding="0" cellspacing="0">
          <div class="roundbaslik">
Üye İşlem Alanı
</div
      <tr>
        <td height="20" align="left" valign="middle"><a href="profilduzenle.php">Profil Düzenle</a></td>
        </tr>
      <tr>
        <td height="20" align="right" valign="middle"><a href="cikis.php" onClick="return confirm('Çıkış yapmak istediginize eminmisiniz?')">Çıkış Yap</a></td>
		 
	
        </tr>
    </table></td>
  </tr>
</table><?php } ?></td>
  </tr>
	</table>
	
</body>
</html>
