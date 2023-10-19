<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/style/index.css?id=<?php echo rand();?>">
  <link rel="stylesheet" href="assets/style/login.css?id=<?php echo rand();?>">
  <title>Nell Bux</title>
</head>

<body class="container">
  <section class="containerHeroLogin">
    <div class="heroLogin">
      <div class="containerImg">
        <img class="heroImg" src="assets/images/icone-de-acesso.png" alt="">
      </div>
      <div class="titleHero">
        <div>
          <h1>Área de Membro</h1>
          <p>Só mais um passo para começar</p>
        </div>
      </div>
    </div>
  </section>

  <section class="containerLogin">
    <div class="containerContent">
      <div class="containerImgLogo">
        <a href="/index.php" target="_self"><img class="ImgLogo marginBotton" src="assets/images/logo.png" alt=""></a>
      </div>
      <h1 class="titleLogin marginBotton">Faça seu login</h1>
        <?php 
        // MENSAGENS DE ERROR
        if (isset($_SESSION['ddIn'])) {
          echo "<p class='errorText'>".$_SESSION['ddIn']."</p>";
          unset($_SESSION['ddIn']);
        }
        ?>
      <form action="auth.php" method="POST">
        <fieldset class="textLeft marginBotton <?php if(isset($_SESSION['emailVazio'])){ unset($_SESSION['emailVazio']);echo "fieldEmpty"; }?>">
          <legend>E-mail</legend>
          <input id="loginEmail" class="input" type="text" placeholder="Digite seu email" name="email">
          <img class="img" src="assets/images/icone-de-conta.png" alt="">
        </fieldset>
        <fieldset class="textLeft marginBotton <?php if(isset($_SESSION['senhaVazio'])){ unset($_SESSION['senhaVazio']);echo "fieldEmpty"; }?>">
          <legend>Senha</legend>
          <input id="loginPassword" class="input"  type="password" placeholder="Digite sua senha" name="senha">
          <img class="img" src="assets/images/icone-de-senha.png" alt="">
        </fieldset>
        <div class="textRight marginBotton" >
          <a id="rememberPassword" class="textDecoration font" href="lost.php">Esqueci minha senha</a>
        </div>
        <input type="image" src="../assets/images/login-btn.png" class="btnLogin marginBotton">
        <input type="hidden" name="login" value="sent">
        <p class="font">Não tem uma conta? <a id="createNow" class="textDecoration" href="what.php">Crie uma agora</a></p>
      </form>
    </div>
  </section>
</body>
</html>