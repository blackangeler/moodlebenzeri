<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
<link rel="stylesheet" type="text/css" href="CSS/servisler2.css">
</head>

<body>
<div class="roundbaslik">Soru Bankası</div>
<div id="kutu1"><br>
Soru Bankası
</div><br><br>
<div class="roundbaslik">Diğer Servisler</div>
<div id="kutu2">
<p class="dservisac" onclick="myFunction()"><a href="#">Moodle</a></p>
 
    <div id="dservis1">
     <p>Moodle gelişmiş bir e-öğrenme aracıdır. İlk olarak 1999 yılında piyasaya sürülen ve halen dünyanın saygın yüzlerce üniversitesi tarafından yaygın olarak kullanılan Moodle açık kaynak kodlu yazılım sistemidir. <br>
     <a href="moodle.html" target="icerik">Devamı...</a></p>
    </div>
     <p class="dservisac" onclick="myFunction2()"><a href="#">Xerte</a></p>
 
    <div id="dservis2">
  <p >Xerte gelişmiş bir öğrenme aracıdır.Eğitim <br>
  <a href="onport.php" target="icerik">Devamı...</a></p>
    </div>
      <p class="dservisac" onclick="myFunction3()"><a href="sbank.php">OnPort - Öğrenme Nesneleri Portalı</a></p>
 
    <div id="dservis3">
   <p >Fakültesi BÖTE Bölümü Ögrencileri için ONPORT web sitesi yeniden tasarlanarak yayına başlamıştır.<br>
   <a href="sbank.php" target="icerik">Devamı...</a></p>
    </div>
    <script>
    var i=0;
    function myFunction() {    
        i++;
        if(i%2==0){
        document.getElementById("dservis1").style.display = "block";
		document.getElementById("dservis2").style.display = "none";
		document.getElementById("dservis3").style.display = "none";
		}
        else{
        document.getElementById("dservis1").style.display = "block";
		document.getElementById("dservis2").style.display = "none";
		document.getElementById("dservis3").style.display = "none";

        }
    }
	  var i=0;
    function myFunction2() {    
        i++;
        if(i%2==0){
        document.getElementById("dservis2").style.display = "block";
		document.getElementById("dservis1").style.display = "none";
		document.getElementById("dservis3").style.display = "none";
		}
        else{
        document.getElementById("dservis2").style.display = "block";
		document.getElementById("dservis1").style.display = "none";
		document.getElementById("dservis3").style.display = "none";
        }
    }
		  var i=0;
    function myFunction3() {    
        i++;
        if(i%2==0){
        document.getElementById("dservis3").style.display = "block";
		document.getElementById("dservis1").style.display = "none";
		document.getElementById("dservis2").style.display = "none";
}
        else{
        document.getElementById("dservis3").style.display = "block";
		document.getElementById("dservis1").style.display = "none";
		document.getElementById("dservis2").style.display = "none";
}
    }
	</script>
</div>
</body>
</html>
