<!DOCTYPE html>
<html lang=”pt-br”>
<html>

    <head> 
        <title>  Tela inicial </title>
        <meta charset= "utf-8" >
        <link rel= "stylesheet" href="css.css" type="text/css"> 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/components/carousel/#with-indicators.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}
.mySlides {display:none}
        </style>   
    </head>
    <body>
        <div class="w3-top">
      <div class="w3-bar w3-green w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-white"><b>Silveira</b> Saúde e Facilidade</a>
    <a href="perfil.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Perfil</a>
    <a href="prontuario.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Prontuario</a>
    <a href="exames.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Exames</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Ajuda</a>
    <a href="login.php" class="w3-right w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-user fa-fw w3-margin-right"></i>LogIn</a>
        </div>

       <center>
        <br></br>

             <div class="w3-container">
          <div class="w3-content" style="max-width:800px">
            <img class="mySlides" src="img/Seja-Bem vinde.jpg" style="width:50%">
            <img class="mySlides" src="img/Agendamento.jpeg" style="width:50%">
            <img class="mySlides" src="img/Protuario.jpeg" style="width:50%">
            <img class="mySlides" src="img/Exames.jpeg" style="width:50%">
            <img class="mySlides" src="img/Ajuda.jpeg" style="width:50%">

          </div>
          
          <div class="w3-center">
            <div class="w3-section">
              <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
              <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
            </div>
            <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
            <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
            <button class="w3-button demo" onclick="currentDiv(3)">3</button>
            <button class="w3-button demo" onclick="currentDiv(4)">4</button> 
            <button class="w3-button demo" onclick="currentDiv(5)">5</button> 
 
          </div>
          
          <script>
          var slideIndex = 1;
          showDivs(slideIndex);
          
          function plusDivs(n) {
            showDivs(slideIndex += n);
          }
          
          function currentDiv(n) {
            showDivs(slideIndex = n);
          }
          
          function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" w3-green", "");
            }
            x[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " w3-green";
          }
          </script>
          <form method="POST"enctype="multipart/form-data">
          <br></br>

   </body>
   <footer>
   <footer class=" footer w3-center w3-green w3-row-padding w3-padding-1200 w3-opacity w3-hover-opacity-off">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <p>TCC Realizado Pelos Alunos Da ETEC De Taboão Da Serra <a title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
    <p>Bruno Jun - Camille Yamashita - Danielle Duarte - Elida Amoroso - Giovanna Aparecida - Gustavo Henrique - Iago Gabriel<a title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
  </div>
</footer>  
   </footer>
</html>
