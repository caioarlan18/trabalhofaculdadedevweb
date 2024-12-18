<?php
if(isset($_POST['submit'])){
  include_once("./config.php");
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email) VALUES ('$nome', '$email')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>trabalho-sena</title>
  <link rel="stylesheet" href="index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
</head>

<body>

  <!-- header mobile -->
  <header class="header">
    <div class="header1" onclick="openmenuhamburguer()">
      <img src="./img/icone-menu-hamburguer.svg" alt="" />
    </div>
    <div class="header2">
      <img src="./img/logosite.jpeg" alt="logo-do-site" />
    </div>
    <div class="header1">
      <img src="./img/fitabook.svg" alt="" onclick="search()" />
    </div>
  </header>
  <!-- menu hamburguer -->
  <header class="menuhamburguer">
    <div class="mn1" onclick="closemenuhamburguer()">
      <span>fechar</span>
    </div>
    <div class="mn2">
      <ul>
        <a href="./index.php">Início</a>
        <a href="./sobre.html">Sobre</a>
        <a
          href="https://www.instagram.com/elizangela_schinaider_studio/profilecard/?igsh=Nm9obzFvYmc5eXps">Instagram</a>
        <a href="https://www.facebook.com/elizangela.schinaider?mibextid=ZbWKwL">Facebook</a>
      </ul>
    </div>
  </header>



  <!-- header desktop -->
  <header class="headerDesktop">
    <div class="headerd1">
      <img src="./img/logosite.jpeg" alt="logo-do-site" class="logod" />
      <img src="./img/fitabook.svg" alt="" class="lupad" onclick="search()" />
    </div>

    <div class="mn2">
      <ul>
        <a href="./index.php">Início</a>
        <a href="./sobre.html">Sobre</a>
        <a
          href="https://www.instagram.com/elizangela_schinaider_studio/profilecard/?igsh=Nm9obzFvYmc5eXps">Instagram</a>
        <a href="https://www.facebook.com/elizangela.schinaider?mibextid=ZbWKwL">Facebook</a>
      </ul>
    </div>
  </header>

  <!-- banner principal mobile -->
  <div class="mainbanner">
    <img src="./img/servicos.jpeg" alt="mainbanner" />
  </div>
  <!-- banner principal deskotop -->
  <div class="mainbannerDesktop">
    <img src="./img/servicosDesktop.png" alt="mainbanner" />
  </div>

  <!-- formulario -->
  <div class="cadastro">
    <div class="cadastrot">
      <h1>Cadastre-se</h1>
      <p>Para receber nossas promoções e novidades</p>
    </div>

    <form class="hd-15" action="./index.php" method="post">
      <div class="hdd-2">
        <input type="text" name="nome" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
      </div>

      <div class="hd-3">
        <input type="submit" name="submit" value="Cadastrar" class="entrar">

      </div>
    </form>

  </div>

  <!-- rodapé -->
  <footer class="ft">

    <p>&copy; 2024 Elizangela Schinaider Studio - Todos os direitos reservados.</p>

  </footer>
  <script src="index.js"></script>
</body>

</html>