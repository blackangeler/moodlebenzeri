<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
<link rel="stylesheet" type="text/css" href="CSS/yardim.css">
</head>

<body>
  <p class="duyuruac" onclick="myFunction()"><a href="#">eDS Yardım</a></p>
 
    <div id="edsyardim">
     <p>eDS Yardım</p>
    </div>
     <p class="duyuruac" onclick="myFunction2()"><a href="#">e-Öğrenme</a></p>
 
    <div id="eogrenme">
  <p class="beyaz">e-Öğrenme</p>
    </div>
      <p class="duyuruac" onclick="myFunction3()"><a href="#">Moodle Yardım</a></p>
 
    <div id="moodleyardim">
   <p class="beyaz">Moodle Yardım</p>
    </div>
      <p class="duyuruac" onclick="myFunction4()"><a href="#">Xerte Yardım</a></p>
 
    <div id="xerteyardim">
   <p class="beyaz">İçerik Eklenmedi</p>
    </div>
         <p class="duyuruac" onclick="myFunction5()"><a href="#">Xerte Öğrenme Klavuzu</a></p>
 
    <div id="xerteogrenme">
   <p class="beyaz">İçerik Eklenmedi</p>
    </div>
         <p class="duyuruac" onclick="myFunction6()"><a href="#">Onport - Öğrenme Nesneleri Portalı Yardım</a></p>
 
    <div id="onport">
  <p class="beyaz">İçerik Eklenmedi</p>
    </div>
      <p class="duyuruac" onclick="myFunction7()"><a href="#">Soru Bankası Yardım</a></p>
 
    <div id="sorubank">
   <p class="beyaz">İçerik Eklenmedi</p>
    </div>
      <p class="duyuruac" onclick="myFunction8()"><a href="#">Proje Hakkında</a></p>
 
    <div id="proje">
   <p class="beyaz">İçerik Eklenmedi</p>
    </div>
         <p class="duyuruac" onclick="myFunction9()"><a href="#">Kurallar</a></p>
 
    <div id="kurallar">
   <p class="beyaz">İçerik Eklenmedi</p>
    </div>
<script>
    var i=0;
    function myFunction() {    
        i++;
        if(i%2==0){
        document.getElementById("edsyardim").style.display = "block";	
				document.getElementById("eogrenme").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
		document.getElementById("kurallar").style.display = "none";
		}		
        else{
        document.getElementById("edsyardim").style.display = "block";
				document.getElementById("eogrenme").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
        }
    }
	  var i=0;
    function myFunction2() {    
        i++;
        if(i%2==0){
        document.getElementById("eogrenme").style.display = "block";
		document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
		}
        else{
        document.getElementById("eogrenme").style.display = "block";
		document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
        }
    }
		  var i=0;
    function myFunction3() {    
        i++;
        if(i%2==0){
        document.getElementById("moodleyardim").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("eogrenme").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
		}
        else{
        document.getElementById("moodleyardim").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("eogrenme").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
        }
    }
			  var i=0;
    function myFunction4() {    
        i++;
        if(i%2==0){
        document.getElementById("xerteyardim").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("eogrenme").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
		}
        else{
        document.getElementById("xerteyardim").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("eogrenme").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
        }
    }
			  var i=0;
    function myFunction5() {    
        i++;
        if(i%2==0){
        document.getElementById("xerteogrenme").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("eogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
		}
        else{
        document.getElementById("xerteogrenme").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("eogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
        }
    }
	 var i=0;
    function myFunction6() {    
        i++;
        if(i%2==0){
        document.getElementById("onport").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("eogrenme").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
		}
        else{
        document.getElementById("onport").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("eogrenme").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
        }
    }
		  var i=0;
    function myFunction7() {    
        i++;
        if(i%2==0){
        document.getElementById("sorubank").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("eogrenme").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";}
        else{
        document.getElementById("sorubank").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("eogrenme").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
        }
    }
			  var i=0;
    function myFunction8() {    
        i++;
        if(i%2==0){
        document.getElementById("proje").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("eogrenme").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
		}
        else{
        document.getElementById("proje").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("eogrenme").style.display = "none";
				document.getElementById("kurallar").style.display = "none";
        }
    }
			  var i=0;
    function myFunction9() {    
        i++;
        if(i%2==0){
        document.getElementById("kurallar").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("eogrenme").style.display = "none";
		}
        else{
        document.getElementById("kurallar").style.display = "block";
				document.getElementById("edsyardim").style.display = "none";
		document.getElementById("moodleyardim").style.display = "none";
		document.getElementById("xerteyardim").style.display = "none";
		document.getElementById("xerteogrenme").style.display = "none";
		document.getElementById("onport").style.display = "none";
		document.getElementById("sorubank").style.display = "none";
		document.getElementById("proje").style.display = "none";
				document.getElementById("eogrenme").style.display = "none";
        }
    }
</script>

</body>
</html>