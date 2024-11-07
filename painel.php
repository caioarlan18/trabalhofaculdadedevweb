<?php
    include_once('./config.php');
    $sql = "SELECT * FROM usuarios ORDER BY idusuarios DESC";
    $result = $conexao -> query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="index.css">
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

  <table class="tabela">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th> 
        </tr>
    </thead>
    <tbody>
        <?php
        while($user_data = mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<td>' . $user_data['nome'] . '</td>';
            echo '<td>' . $user_data['email'] . '</td>';
            echo '<td class="actions">
            <a onclick="email(\'' . $user_data['nome'] . '\', \'' . $user_data['email'] . '\')">📧</a>
                <a href="./remove.php?idusuarios='.$user_data['idusuarios'] . '">🗑️</a>
              </td>';
         echo '</tr>';
        }
    
        ?>
    </tbody>
</table>


  <script src="index.js"></script>
</body>
</html>