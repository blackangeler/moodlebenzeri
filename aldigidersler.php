<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
				
				
				$gelenidd				=	$oku["id"];
		$gelenogreciadisoyadi	=	$oku["adisoyadi"];
				$ogrencininsinifi	=	$oku["ogrencininsinifi"];
		

?> 
				

				<tr bgcolor="#F1F1F1">
   	  <td width="100" height="20"><b><?=$gelenidd?></b></td>
   	  <td width="200" height="20"><b><?=$gelenogreciadisoyadi?></b></td>
					<td width="200" height="20"><b><?=$ogrencininsinifi?></b></td>
   	 
   	  
    </tr>


	<?php			
//$sorgu1		=	@mysql_query("SELECT * FROM ogrenciler ORDER BY ogreciadisoyadi ASC");
	//while($kayitlar1=@mysql_fetch_assoc($sorgu1)){
		
		






$veri_oku2=$dbh->prepare("select id,dersadi from dersler where ? order by id asc");
		if($veri_oku2->execute(array(1))){
			while($oku2=$veri_oku2->fetch()){
				
$gelenid				=	$oku2["id"];
		$gelendersadi			=	$oku2["dersadi"];

?>

	<tr bgcolor="#FFFFCC">
    	<td height="20" colspan="4">Ders : <?=$gelendersadi?>    </td>
  </tr>
</body>
</html>

<?php 
			
			}//while kapaniyor
				}else print_r($veri_oku2->errorInfo()); //sorgu kontrolsonu,
			
			}//while kapaniyor
				}else print_r($veri_oku->errorInfo()); //sorgu kontrolsonu,
			
		
		
		?>