<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bilgi Yarışması</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="emre_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<table cellpadding="3" cellspacing="1" border="1" width="550" align="center">
    <tr bgcolor="#000000">
    	<td width="100" height="30"><font color="#FFFFFF">Öğrenci No</font></td>
    	<td width="200" height="30"><font color="#FFFFFF">Öğrenci Adı Soyadı</font></td>
    	<td width="150" height="30"><font color="#FFFFFF">Öğrenci Sınıfı</font></td>
    </tr>
<?php
	require_once("ayar.php");
	session_start();
$veri_oku=$dbh->prepare("select id,adisoyadi,ogrencininsinifi from uyeler where id='".$_SESSION["id"]."' order by id asc");
		if($veri_oku->execute(array(1))){
			while($oku=$veri_oku->fetch()){
			
				
				
//$sorgu1		=	@mysql_query("SELECT * FROM ogrenciler ORDER BY ogreciadisoyadi ASC");
	//while($kayitlar1=@mysql_fetch_assoc($sorgu1)){
		$gelenidd				=	$oku["id"];
		$gelenogreciadisoyadi	=	$oku["adisoyadi"];
		$gelenogrencininsinifi	=	$oku["ogrencininsinifi"];
?>		
    <tr bgcolor="#F1F1F1">
   	  <td width="100" height="20"><b><?=$gelenidd?></b></td>
   	  <td width="200" height="20"><b><?=$gelenogreciadisoyadi?></b></td>
   	  <td width="125" height="20"><b><?=$gelenogrencininsinifi?></b></td>
   	 
    </tr>
<?php    
			
			
			$gelenyazili1notu=0;
	$gelenyazili2notu=0;
	$gelensozlu1notu=0;
	$gelensozlu2notu=0;
			$f=0;
$veri_oku2=$dbh->prepare("select id,dersadi,yazili1notu,yazili2notu,sozlu1notu,sozlu2notu from dersler where ? order by id asc");
		if($veri_oku2->execute(array(1))){
			while($oku2=$veri_oku2->fetch()){
				$f++;
			
//$sorgu2		=	@mysql_query("SELECT * FROM dersler WHERE ogrenciid='$gelenid' ORDER BY dersadi ASC");
	//while($kayitlar2=@mysql_fetch_assoc($sorgu2)){
		$gelenid				=	$oku2["id"];
		$gelendersadi			=	$oku2["dersadi"];
		$gelenyazili1notu		=	$oku2["yazili1notu"];
		$gelenyazili2notu		=	$oku2["yazili2notu"];
		$gelensozlu1notu		=	$oku2["sozlu1notu"];
		$gelensozlu2notu		=	$oku2["sozlu2notu"];
		$ortalamanothesapla		=	($gelenyazili1notu+$gelenyazili2notu+$gelensozlu1notu+$gelensozlu2notu)/4;
		$ortalamaduzenle		=	@number_format($ortalamanothesapla,2,",","");
?>
    <tr bgcolor="#FFFFCC">
    	<td height="20" colspan="4">Ders : <?=$gelendersadi?> Y1: <?=$gelenyazili1notu?> Y2: <?=$gelenyazili2notu?> S1: <?=$gelensozlu1notu?> S2: <?=$gelensozlu2notu?>  (Not Ortalaması: <?=$ortalamaduzenle?>)</td>
  </tr>
	
<?php
	//}
?>   
	<?php 
			
				}//while kapaniyor
				}else print_r($veri_oku2->errorInfo()); //sorgu kontrolsonu,
			
			
			}//while kapaniyor
				}else print_r($veri_oku->errorInfo()); //sorgu kontrolsonu,
			
	
		
		?>
<?php
	//}
?>
</table>
	</body>
</html>