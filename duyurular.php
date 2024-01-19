<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
<link rel="stylesheet" type="text/css" href="CSS/duyurular.css">
</head>

<body>
  <p class="duyuruac" onclick="myFunction()"><a href="#">Duyuru 1</a></p>
 
    <div id="duyuru1">
     <p class="beyaz">İçerik Eklenmedi</p>
    </div>
     <p class="duyuruac" onclick="myFunction2()"><a href="#">Duyuru 2</a></p>
 
    <div id="duyuru2">
  <p class="beyaz">İçerik Eklenmedi</p>
    </div>
      <p class="duyuruac" onclick="myFunction3()"><a href="#">Duyuru 3</a></p>
 
    <div id="duyuru3">
   <p class="beyaz">İçerik Eklenmedi</p>
    </div>
      <p class="duyuruac" onclick="myFunction4()"><a href="#">Duyuru 4</a></p>
 
    <div id="duyuru4">
   <p class="beyaz">İçerik Eklenmedi</p>
    </div>
         <p class="duyuruac" onclick="myFunction5()"><a href="#">Duyuru 5</a></p>
 
    <div id="duyuru5">
   <p class="beyaz">İçerik Eklenmedi</p>
    </div>
<script>
    var i=0;
    function myFunction() {    
        i++;
        if(i%2==0){
        document.getElementById("duyuru1").style.display = "block";
		document.getElementById("duyuru2").style.display = "none";
		document.getElementById("duyuru3").style.display = "none";
		document.getElementById("duyuru4").style.display = "none";
		document.getElementById("duyuru5").style.display = "none";}
        else{
        document.getElementById("duyuru1").style.display = "block";
		document.getElementById("duyuru2").style.display = "none";
		document.getElementById("duyuru3").style.display = "none";
		document.getElementById("duyuru4").style.display = "none";
		document.getElementById("duyuru5").style.display = "none";
        }
    }
	  var i=0;
    function myFunction2() {    
        i++;
        if(i%2==0){
        document.getElementById("duyuru2").style.display = "block";
		document.getElementById("duyuru1").style.display = "none";
		document.getElementById("duyuru3").style.display = "none";
		document.getElementById("duyuru4").style.display = "none";
		document.getElementById("duyuru5").style.display = "none";}
        else{
        document.getElementById("duyuru2").style.display = "block";
		document.getElementById("duyuru1").style.display = "none";
		document.getElementById("duyuru3").style.display = "none";
		document.getElementById("duyuru4").style.display = "none";
		document.getElementById("duyuru5").style.display = "none";
        }
    }
		  var i=0;
    function myFunction3() {    
        i++;
        if(i%2==0){
        document.getElementById("duyuru3").style.display = "block";
		document.getElementById("duyuru1").style.display = "none";
		document.getElementById("duyuru2").style.display = "none";
		document.getElementById("duyuru4").style.display = "none";
		document.getElementById("duyuru5").style.display = "none";}
        else{
        document.getElementById("duyuru3").style.display = "block";
		document.getElementById("duyuru1").style.display = "none";
		document.getElementById("duyuru2").style.display = "none";
		document.getElementById("duyuru4").style.display = "none";
		document.getElementById("duyuru5").style.display = "none";
        }
    }
			  var i=0;
    function myFunction4() {    
        i++;
        if(i%2==0){
        document.getElementById("duyuru4").style.display = "block";
		document.getElementById("duyuru1").style.display = "none";
		document.getElementById("duyuru2").style.display = "none";
		document.getElementById("duyuru3").style.display = "none";
		document.getElementById("duyuru5").style.display = "none";}
        else{
        document.getElementById("duyuru4").style.display = "block";
		document.getElementById("duyuru1").style.display = "none";
		document.getElementById("duyuru2").style.display = "none";
		document.getElementById("duyuru3").style.display = "none";
		document.getElementById("duyuru5").style.display = "none";
        }
    }
			  var i=0;
    function myFunction5() {    
        i++;
        if(i%2==0){
        document.getElementById("duyuru5").style.display = "block";
		document.getElementById("duyuru1").style.display = "none";
		document.getElementById("duyuru2").style.display = "none";
		document.getElementById("duyuru3").style.display = "none";
		document.getElementById("duyuru4").style.display = "none";}
        else{
        document.getElementById("duyuru5").style.display = "block";
		document.getElementById("duyuru1").style.display = "none";
		document.getElementById("duyuru2").style.display = "none";
		document.getElementById("duyuru3").style.display = "none";
		document.getElementById("duyuru4").style.display = "none";
        }
    }
</script>

</body>
</html>