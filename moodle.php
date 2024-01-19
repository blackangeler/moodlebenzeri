<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
<link rel="stylesheet" type="text/css" href="CSS/servisler2.css">
</head>

<body>
<div class="roundbaslik">Moodle</div>
<div id="kutu1">
Moodle gelişmiş bir e-öğrenme aracıdır. İlk olarak 1999 yılında piyasaya sürülen ve halen dünyanın saygın yüzlerce üniversitesi tarafından yaygın olarak kullanılan Moodle açık kaynak kodlu yazılım sistemidir.</div><br><br>
<div class="roundbaslik">Diğer Servisler</div>
<div id="kutu2">
<p class="dservisac" onclick="myFunction()"><a href="#">Xerte</a></p>
 
    <div id="dservis1">
     <p>Xerte gelişmiş bir öğrenme aracıdır. <br>
     <a href="xerte.php" target="icerik">Devamı...</a></p>
    </div>
     <p class="dservisac" onclick="myFunction2()"><a href="#">OnPort - Öğrenme Nesne Portalı</a></p>
 
    <div id="dservis2">
  <p >Eğitim Fakültesi BÖTE Bölümü Ögrencileri için ONPORT web sitesi yeniden tasarlanarak yayına başlamıştır.<br>
  <a href="onport.php" target="icerik">Devamı...</a></p>
    </div>
      <p class="dservisac" onclick="myFunction3()"><a href="sbank.php">Soru Bankası</a></p>
 
    <div id="dservis3">
   <p >Soru Bankası</p>
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
