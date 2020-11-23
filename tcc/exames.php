<!-- PAGINA PARA O MÉDICO FAZER A SOLICITAÇÃO DE EXAMES -->
<?php
include_once "conexao2.php";
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
session_start();
?>
<!DOCTYPE html>
<html lang=”pt-br”>
<html>

    <head> 
        <title>  Pedidos de Exame </title>
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

        <header>
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
           </header>
        <body>

          
     <h1> Solicitar exames </h1> 

<?php

    $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
    if($SendPesqUser){
      $rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
      $result_usuario = "SELECT * FROM consultas WHERE cod_pac LIKE '%$rg%'";
      $resultado_usuario = mysqli_query($conn, $result_usuario);
      while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
        echo "RG: " . $row_usuario['cod_pac'] . "<br>";

if(isset($_POST['data']))
    {
      $Esangue = (bool) rand(0, 1) ? "checked" : null;
      $urina  = (bool) rand(0, 1) ? "checked" : null;
      $fezes  = (bool) rand(0, 1) ? "checked" : null;


      $_POST['Esangue'] = ( isset($_POST['Esangue']) ) ? true : null;
      $_POST['urina']  = ( isset($_POST['urina']) )  ? true : null;
      $_POST['fezes']  = ( isset($_POST['fezes']) )  ? true : null;

        $nomeM = $_SESSION['nome_fun'];
        $codM = $_SESSION['crm'];
        $data = addslashes($_POST['data']);
        $Esangue = addslashes($_POST['Esangue']);
        $urina = addslashes($_POST['urina']);
        $fezes = addslashes($_POST['fezes']);
        $outros = addslashes($_POST['outros']);
  


          if(isset($_POST["insert"]))
        {
            if(!$p->exames2($rg,$data,$nomeM,$codM,$Esangue,$urina,$fezes,$outros))
            {
                echo "Erro!";
            }
}
             }}   }

    ?>

    
       <form method="POST"enctype="multipart/form-data">

</section>
        <section id="direita">
              <legend> Selecione os exames que deseja realizar: </legend>
          <div>
            <input type = "checkbox" name = "Esangue" value = "rotina">
            <label for = "Esangue">  exame de sangue </label>
          </div>
          <div>
            <input type = "checkbox" name = "urina" value = "rotina">
            <label for = "urina"> urina </ label>
          </div>
          <div>
            <input type = "checkbox" name = "fezes" value = "rotina">
            <label for = "fezes"> fezes </label>
          </div>

            <br><label for="outros"> Outros: </label>
            <input type="text" name="outros" placeholder="Circulação sanguínea" >

            <br><label for="data"> Data do pedido </label>
            <input type="text" name="data" placeholder="insira a data atual" >

            <input type="submit" name="insert" value="submit">

  </section>
</form>
</body>

<footer class="footer w3-center w3-green w3-row-padding w3-padding-1200 w3-opacity w3-hover-opacity-off">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <p>TCC Realizado Pelos Alunos Da ETEC De Taboão Da Serra <a title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
    <p>Bruno Jun - Camille Yamashita - Danielle Duarte - Elida Amoroso - Giovanna Aparecida - Gustavo Henrique - Iago Gabriel<a title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
  </div>
   </footer>
</html>
<
