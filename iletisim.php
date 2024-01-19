<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
<link rel="stylesheet" type="text/css" href="CSS/iletisim.css">
</head>

<body>
<div class="roundbaslik">
İletişim Bilgilerimiz
</div>
<div id="kutu1">
<a href="#">Örnek Site</a>, Posta Kodu:00000 İlçe/Şehir<br>
E-Posta:<a href="#">Örnek Mail</a>
<br>
Telefon : 0312 222 22 22
</div>
<div class="roundbaslik">
İletişim Formu
</div>
<div id="kutu2">
<table>
<tr>
<td colspan="2" align="center">
Aşağıdaki formu kullanarak; görüş, öneri, eleştiri ve sorularınızı bize ulaştırabilirsiniz...
</td>
</tr>
	<form name="emailformu" action="sonuc.php" method="post">
<tr>
<td align="right">Adınız :</td>
<td><input type="text" name="isimsoyisim"></td>
</tr>
<tr>
<td align="right">E-Posta Adresiniz :</td>
<td><input type="email" name="email"></td>
</tr>
		<tr>
<td align="right">Konu :</td>
<td><input type="text" name="islemturu"></td>
</tr>
		
<tr>
<td align="right">Mesajınız :</td>
<td> <textarea rows="10" cols="75" name="mesaj"></textarea>
</td>
</tr>
<tr>
</table><br>
<center><input type="submit" name="mesajgonder" value="Gönder"></center>
	</form>
</body>
</html>
