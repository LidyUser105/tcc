<!--Está é a pagina que o adiministrador vai fazer o cadastro de funcionarios-->
<?php
session_start();
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
?>
<!DOCTYPE html>
<html lang=”pt-br”>
<html>

    <head> 
        <title> meu perfil </title>
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

    <table>
        <tr>
        <td><a href="agendamento.html"> Agendamentos </a></td>
        <td><a href="prontuario.html"> Prontuário </a></td>
        <td><a href="exames.html>"> Exames </a> </td>

        </tr>
    </table>
            <section id="direita">
      <h2>    <?php echo "Bem vindo (a) " . $_SESSION['nome'] ?> </h2>

    <div class="circle">
      <img src="upload/<?php echo $_SESSION['rg']; ?>.jpg" width=200 height=200 style ="border-radius: 70%;">
      <img>
    </div> 

              <table>
                <tr> 
                  <td> Exame de Sangue </td>
                  <td> Exame de urina </td>
                  <td> Exame de fezes </td>
                  <td> Exame Pelvico  </td>
                  <td> Exame Transvaginal </td>
                  <td> Abdominal </td>
                  <td> Tireoide </td>
                  <td> Mamas </td>
                  <td> Ecocardiograma </td>
                  <td> Joelho </td>
                  <td> Bacia </td>
                  <td> Renal </td>
                  <td> Coluna </td>
                  <td> Funcional </td>
                  <td> Angiografia </td>
                  <td> Cardiaca </td>
                  <td> Outros </td>
                </tr>
              <?php
                $dados = $p->buscarDados2();
                if(count($dados) > 0) #se tem cadastro no banco
                {
                 
                  for ($i=0; $i < count($dados); $i++) 
                  {
                    echo "<tr>";
                    foreach ($dados[$i] as $k => $v) 
                    {
                      if($k != "id")
                      {
                        echo "<td>".$v."</td>";
                      }
                    }?>

                  <?php  
                  echo "</tr>";
                    }
                  
                }
                else # se o banco esta vazio
                {
                  echo "O banco esta vazio";
                }

              ?>
              
                <tr>
                  <td></td> 
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </section>
    
</p>
</form>
  <?php

  include("conexao2.php");

  $msg = false;

  if(isset($_FILES['arquivo'])){

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = time() . $extensao; //define o nome do arquivo
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $sql_code = "INSERT INTO perfil (rg,codigo, img, data) VALUES('$_SESSION[rg]',$_SESSION[rg], '$novo_nome', NOW())";

    if($conn->query($sql_code))
      $msg = "Arquivo enviado com sucesso!";
    else
      $msg = "Falha ao enviar arquivo.";

  }

?>
      <h4>Adicione uma foto para o seu perfil</h4>
      <?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>
      <form action="perfil.php" method="POST" enctype="multipart/form-data">
        Arquivo: <input type="file" required name="arquivo">

        <input type="submit" value="Salvar">


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
