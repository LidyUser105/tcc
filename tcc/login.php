<?php
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang=”pt-br”>
<html>

    <h1> Login  </h1>

    <head> 
        <title>  Tela de login </title>
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
</style>
        </head>

        <div class="w3-top">
      <div class="w3-bar w3-green w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-white"><b>Silveira</b> Saúde e Facilidade</a>
    <a href="perfil.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Perfil</a>
    <a href="prontuario.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Prontuario</a>
    <a href="exames.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Exames</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Ajuda</a>
    <a href="login.php" class="w3-right w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-user fa-fw w3-margin-right"></i>Cliente</a>
    <a href="login2.php" class="w3-right w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-user fa-fw w3-margin-right"></i>Funcionario</a>
    <a href="cadastroI.php" class="w3-right w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-user fa-fw w3-margin-right"></i>Cadastro</a>
        </div>
        
        <body>
        
            <style type="text/css"> 
            h1{ 
              font-family:Didot, serif;
              text-align: center;
                }

            label { 
              font-family:Didot, serif;
              text-align: center;
              font-size: 20px;
          }
          input { 
              font-family:Didot, serif;
              text-align: center;
              font-size: 16px;
          }
          input.enviar{
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
        }


            </style>
           <?php
    if(isset($_POST['botao']))
    {
        $rg = addslashes($_POST['rg']);
        $senha = addslashes($_POST['senha']);

        if(!empty($rg) && !empty($senha) )
        {
             $p -> conecta("tcc","localhost","root","");
            if($p->msgErro == "")
            {
                if($p -> login($rg,$senha))
                {   
                   header("Location: perfil.php");
                }
                
                if($p->msgErro == !empty($msgErro)){
                    echo "Senha ou RG incorretos. Tente novamente";
                }
            
        }
        else{
            echo "erro: ".$u->msgErro;
        }
    }
        else
        {
            echo "Preencha todos os campos";
        }



    }?>
              
    
       <form method="POST" enctype="multipart/form-data">
       <script src="jquery.min.js"></script>
        <center>

            <br><label for="rg"> RG: </label>
            <br><input type="text" name="rg"  id="rg" placeholder="XX.XXX.XXX-X"  OnKeyUp="mascaraData(this);" maxlength="12" >
            
            <br><label for="senha"> Senha: 
            <br><input type="password" name="senha"></div><br/>  

           <input class="enviar w3-button w3-light-grey w3-padding-large w3-large" type="submit" name="botao" value="Login" >



</center>

                        <script>
              // colocar os / . etc nos campos automaticamente
    function mascaraData(campoData){
              var data = campoData.value;
              if (data.length == 2){
                  data = data + '.';
                  document.forms[0].rg.value = data;
      return true;              
              }
              if (data.length == 6){
                  data = data + '.';
                  document.forms[0].rg.value = data;
                  return true;
              }
              if (data.length == 10){
                  data = data + '-';
                  document.forms[0].rg.value = data;
                  return true;
              }
         }

    $("#rg").on("input", function(){
  var regexp = /[AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz/*&%$#@!<>,^~}{)(|)}]/g;
  if(this.value.match(regexp)){
    $(this).val(this.value.replace(regexp,''));
  }
});
            
            </script>
</form>
<footer>
   <footer class="footer w3-center w3-green w3-row-padding w3-padding-1200 w3-opacity w3-hover-opacity-off">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <p>TCC Realizado Pelos Alunos Da ETEC De Taboão Da Serra <a title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
    <p>Bruno Jun - Camille Yamashita - Danielle Duarte - Elida Amoroso - Giovanna Aparecida - Gustavo Henrique - Iago Gabriel<a title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
  </div>
</footer>  
   </footer>
</body>
</footer>  
</html>        
