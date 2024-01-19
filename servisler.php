<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
<link rel="stylesheet" type="text/css" href="CSS/servisler.css">
</head>

<body>
  <p class="servisac" onclick="myFunction()"><a href="#">Moodle</a></p>
 
    <div id="servis1">
     <p class="beyaz">Moodle gelişmiş bir e-öğrenme aracıdır. İlk olarak 1999 yılında piyasaya sürülen ve halen dünyanın saygın yüzlerce üniversitesi tarafından yaygın olarak kullanılan Moodle açık kaynak kodlu yazılım sistemidir.</p>
    </div>
     <p class="servisac" onclick="myFunction2()"><a href="#">Xerte</a></p>
 
    <div id="servis2">
  <p class="beyaz">Xerte gelişmiş bir e-öğrenme aracıdır.</p>
    </div>
      <p class="servisac" onclick="myFunction3()"><a href="#">Onport - Öğrenme Nesneleri Portalı</a></p>
 
    <div id="servis3">
   <p class="beyaz">Eğitim Fakültesi BÖTE Bölümü Ögrencileri için ONPORT web sitesi yeniden tasarlanarak yayına başlamıştır.</p>
    </div>
 
<script>
    var i=0;
    function myFunction() {    
        i++;
        if(i%2==0){
        document.getElementById("servis1").style.display = "block";
		document.getElementById("servis2").style.display = "none";
		document.getElementById("servis3").style.display = "none";}
        else{
        document.getElementById("servis1").style.display = "block";
		document.getElementById("servis2").style.display = "none";
		document.getElementById("servis3").style.display = "none";
        }
    }
	  var i=0;
    function myFunction2() {    
        i++;
        if(i%2==0){
        document.getElementById("servis2").style.display = "block";
		document.getElementById("servis1").style.display = "none";
		document.getElementById("servis3").style.display = "none";}
        else{
        document.getElementById("servis2").style.display = "block";
		document.getElementById("servis1").style.display = "none";
		document.getElementById("servis3").style.display = "none";
        }
    }
		  var i=0;
    function myFunction3() {    
        i++;
        if(i%2==0){
        document.getElementById("servis3").style.display = "block";
		document.getElementById("servis1").style.display = "none";
		document.getElementById("servis2").style.display = "none";}
        else{
        document.getElementById("servis3").style.display = "block";
		document.getElementById("servis1").style.display = "none";
		document.getElementById("servis2").style.display = "none";
        }
    }
</script>

</body>
</html>