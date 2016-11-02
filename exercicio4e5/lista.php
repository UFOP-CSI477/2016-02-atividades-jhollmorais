<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="myCSS.css">

    <title>CONTROLE DE MATRICULA</title>
  </head>
  <body>

    <div class="container">
      <h3>Sistema de controle de matrícula</h3>
      <ul class="nav nav-tabs">
        <li><a href="menu.html">Menu</a></li>
        <li><a href="cadastro.html">Cadastro</a></li>
      </ul><br>


    </div>



    <table class="table table-striped">
      <tr>
        <th>Nome</th>
        <th>Usuario</th>
        <th>e-mail</th>
        <th>CPF</th>
        <th>Rua</th>
        <th>Numero</th>
      </tr>

      <?php

        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $rua = $_POST["rua"];
        $numero = $_POST["numero"];

        echo "<tr>
          <td>$nome</td>
          <td>$usuario</td>
          <td>$email</td>
          <td>$cpf</td>
          <td>$rua</td>
          <td>$numero</td>
        </tr>";
      ?>

    </table>

    <div class="rodape">
      <p align="center">Jonathan Paulo de Morais<br>
        Desenvolvedor em Sistemas web I</p>
      </div>
  </body>
</html>
