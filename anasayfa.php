<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
<link rel="stylesheet" type="text/css" href="CSS/anasayfa.css">
</head>

<body>
<div class="roundbaslik">Duyurular</div>
  <div class="panelac" onclick="myFunction()"><a href="#">eDS Sistemi Yenileme İşlemi</a></div>
 
    <div id="panel1">
     <div class="beyaz"> e-Öğrenme Destek Sistemi yenilenmiştir. Mevcut kullanıcı kayıtları ve deneme öğeleri sistemden silinmiş olup yeni kullanıcı kayıtları yapılacaktır.</div>
    </div>
     <div class="panelac" onclick="myFunction2()"><a href="#">ONPORT Yenilendi!</a></div>
 
    <div id="panel2">
  <div class="beyaz"> Eğitim Fakültesi BÖTE Bölümü Ögrencileri için ONPORT web sitesi yeniden tasarlanarak yayına başlamıştır.</div>
    </div>
      <div class="panelac" onclick="myFunction3()"><a href="#">ONPORT Yenilendi!</a></div>
 
    <div id="panel3">
   <div class="beyaz">Eğitim Fakültesi BÖTE Bölümü Ögrencileri için ONPORT web sitesi yeniden tasarlanarak yayına başlamıştır.</div>
    </div>
 

<br><br><br><br>
<div class="roundbaslik">e-Öğrenme Araçları</div>
  
 <div class="aracac" onclick="arac1()">
<a href="#">Moodle</a>
</div>
<div class="button" align="right"><a href="giris.php" target="icerik">
<input type="submit" value="Giriş" name="gir"></a>
</div>
 
    <div id="arac1">
     <div class="beyaz">Moodle gelişmiş bir e-öğrenme aracıdır. İlk olarak 1999 yılında piyasaya sürülen ve halen dünyanın saygın yüzlerce üniversitesi tarafından yaygın olarak kullanılan Moodle açık kaynak kodlu yazılım sistemidir..</div>
    </div>
     <div class="aracac" onclick="arac2()"><a href="#">Xerte</a></div>
     <div class="button" align="right"><a href="giris.php" target="icerik">
<input type="submit" value="Giriş" name="gir"></a>
</div>
 
    <div id="arac2">
  <div class="beyaz"> Xerte gelişmiş bir e-öğrenme aracıdır.</div>
    </div>
      <div class="aracac" onclick="arac3()"><a href="#">Öğrenme Nesneli Portalı</a></div>
      <div class="button" align="right"><a href="giris.php" target="icerik">
<input type="submit" value="Giriş" name="gir"></a>
</div>
 
    <div id="arac3">
   <div class="beyaz">Eğitim Fakültesi BÖTE Bölümü Ögrencileri için ONPORT web sitesi yeniden tasarlanarak yayına başlamıştır.</div>
    </div>
 
<script>
    var i=0;
    function myFunction() {    
        i++;
        if(i%2==0){
        document.getElementById("panel1").style.display = "block";
		document.getElementById("panel2").style.display = "none";
		document.getElementById("panel3").style.display = "none";
		document.getElementById("arac1").style.display = "none";
		document.getElementById("arac2").style.display = "none";
		document.getElementById("arac3").style.display = "none";}
		
        else{
        document.getElementById("panel1").style.display = "block";
		document.getElementById("panel2").style.display = "none";
		document.getElementById("panel3").style.display = "none";
				document.getElementById("arac1").style.display = "none";
		document.getElementById("arac2").style.display = "none";
		document.getElementById("arac3").style.display = "none";}
    }
	  var i=0;
    function myFunction2() {    
        i++;
        if(i%2==0){
        document.getElementById("panel2").style.display = "block";
		document.getElementById("panel1").style.display = "none";
		document.getElementById("panel3").style.display = "none";
				document.getElementById("arac1").style.display = "none";
		document.getElementById("arac2").style.display = "none";
		document.getElementById("arac3").style.display = "none";}
        else{
        document.getElementById("panel2").style.display = "block";
		document.getElementById("panel1").style.display = "none";
		document.getElementById("panel3").style.display = "none";
				document.getElementById("arac1").style.display = "none";
		document.getElementById("arac2").style.display = "none";
		document.getElementById("arac3").style.display = "none";
        }
    }
		  var i=0;
    function myFunction3() {    
        i++;
        if(i%2==0){
        document.getElementById("panel3").style.display = "block";
		document.getElementById("panel1").style.display = "none";
		document.getElementById("panel2").style.display = "none";
				document.getElementById("arac1").style.display = "none";
		document.getElementById("arac2").style.display = "none";
		document.getElementById("arac3").style.display = "none";}
        else{
        document.getElementById("panel3").style.display = "block";
		document.getElementById("panel1").style.display = "none";
		document.getElementById("panel2").style.display = "none";
				document.getElementById("arac1").style.display = "none";
		document.getElementById("arac2").style.display = "none";
		document.getElementById("arac3").style.display = "none";
        }
    }
    var i=0;
    function arac1() {    
        i++;
        if(i%2==0){
        document.getElementById("arac1").style.display = "block";
		document.getElementById("arac2").style.display = "none";
		document.getElementById("arac3").style.display = "none";
				document.getElementById("panel1").style.display = "none";
		document.getElementById("panel2").style.display = "none";
		document.getElementById("panel3").style.display = "none";}
        else{
        document.getElementById("arac1").style.display = "block";
		document.getElementById("arac2").style.display = "none";
		document.getElementById("arac3").style.display = "none";
				document.getElementById("panel1").style.display = "none";
		document.getElementById("panel2").style.display = "none";
		document.getElementById("panel3").style.display = "none";}
    }
	  var i=0;
    function arac2() {    
        i++;
        if(i%2==0){
        document.getElementById("arac2").style.display = "block";
		document.getElementById("arac1").style.display = "none";
		document.getElementById("arac3").style.display = "none";
				document.getElementById("panel1").style.display = "none";
		document.getElementById("panel2").style.display = "none";
		document.getElementById("panel3").style.display = "none";}
        else{
        document.getElementById("arac2").style.display = "block";
		document.getElementById("arac1").style.display = "none";
		document.getElementById("arac3").style.display = "none";
				document.getElementById("panel1").style.display = "none";
		document.getElementById("panel2").style.display = "none";
		document.getElementById("panel3").style.display = "none";
        }
    }
		  var i=0;
    function arac3() {    
        i++;
        if(i%2==0){
        document.getElementById("arac3").style.display = "block";
		document.getElementById("arac1").style.display = "none";
		document.getElementById("arac2").style.display = "none";
				document.getElementById("panel1").style.display = "none";
		document.getElementById("panel2").style.display = "none";
		document.getElementById("panel3").style.display = "none";}
        else{
        document.getElementById("arac3").style.display = "block";
		document.getElementById("arac1").style.display = "none";
		document.getElementById("arac2").style.display = "none";
				document.getElementById("panel1").style.display = "none";
		document.getElementById("panel2").style.display = "none";
		document.getElementById("panel3").style.display = "none";
        }
    }
</script>
</body>
</html>