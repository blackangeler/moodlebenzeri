<?php
require_once("ayar.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
<link  rel="stylesheet" type="text/css" href="CSS/uyeligimyok.css">
</head>

<body>
<div class="roundbaslik">
eDS Üyelik Kaydı Açıklamalar
</div>
<div id="kutu1">
eDS Üyelik Kaydı Açıklamalar
</div><br><br><br>
<div class="roundbaslik">
eDS Üyelik Kaydı
</div>
<div id="kutu2">
	<form name="uyekayitformu" action="uyeolsonuc.php" method="post"><div id="tablokenar"><table width="540" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td height="35" colspan="3" align="center" valign="middle"><font color="#000000"><b>Yeni Kayıt formu</b></font></td>
    </tr>
  <tr>
    <td width="150" height="25" align="left" valign="middle">Kullanıcıadı</td>
    <td width="30" height="25" align="left" valign="middle">:</td>
    <td width="350" height="25" align="left" valign="middle"><input type="text" name="kullaniciadi" size="30" maxlength="25" /></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Kullanıcı Şifresi</td>
    <td height="25" align="left" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input type="password" name="kullanicisifre" size="30" maxlength="25" /></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">E-Mail Adresi</td>
    <td height="25" align="left" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input type="text" name="kullaniciemail" size="30" /></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Adı Soyadı</td>
    <td height="25" align="left" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input type="text" name="kullaniciadisoyadi" size="30" /></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Cinsiyet</td>
    <td height="25" align="left" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input type="radio" name="kullanicicinsiyet" value="Bayan" /> Bayan <input type="radio" name="kullanicicinsiyet" value="Erkek" /> Erkek</td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Telefon</td>
    <td height="25" align="left" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input type="text" name="kullanicitelefon" size="20" /></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle"><input type="submit" value="Kayıt Ol" /></td>
  </tr>
</table></div></form>
	

</div>
</body>
</html>
