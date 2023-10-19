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
  <link rel="stylesheet" href="assets/style/registerOne.css?id=<?php echo rand();?>">
  <title>Nell Bux</title>
</head>
<body class="containerBody">
  <section class="containerRegister">
    <div>
      <img class="imgLogo marginBotton" src="assets/images/logo.png" alt="">
       <?php 
       if(isset($_POST['nextPage'])) {
         
         ?>
    <h1 class="marginBotton titleRegister">Estamos quase lá</h1>
      <p>Passo 2 de 2</p>
      <div class="line marginBotton">
        <hr class="lineOne"><hr class="lineTwo lineTwoo">
      </div>
      <p class="marginBotton font">Assinatura - <span class="orang">Bronze</span></p>
      <form action="" method="POST">
        <fieldset class="textLeft marginBotton width">
          <legend>Telefone</legend>
          <input data-mask="(99) 99999-9999" id="registerPhone" name="telefone" class="input" type="text" placeholder="Digite seu telefone">
        </fieldset>

        <fieldset class="textLeft marginBotton width">
          <legend>Usuário</legend>
          <input id="registerUser" class="input" type="text"  placeholder="Escolha seu nome de usuario">
        </fieldset>

        <fieldset class="textLeft marginBotton width">
          <legend>Senha</legend>
          <input id="registerPassword" class="input" type="password"  placeholder="Escolha sua senha">
        </fieldset>

        <fieldset class="textLeft marginBotton width">
          <legend>Repetir Senha</legend>
          <input id="registerCheckPassword" class="input" type="password" placeholder="Digite sua senha novamente">
        </fieldset>

        <div class="displayFlex marginBotton">
        <button id="registerBtnFinishRequest" type="submit" class="btnNext">
         FINALIZAR REGISTRO
        </button>
        </div>
        
        
         <hr class="ihr">
     
      <div class="marginBotton font displayCheck">
          <input id="registerCheckBox" type="checkbox" checked>
          <div>
            <label for="checkbox" class="spn">
              Li e Aceito os <a href="#" class="ulink">Termos</a> e <a href="#" class="ulink">Condições</a>
            </label>
          </div>
        </div>
        
        
      </form>
      
      
      
      
      
      
         
         <?php
         
        }else{
        ?>
      <h1 class="marginBotton titleRegister">Fale um pouco sobre você</h1>
      <p>Passo 1 de 2</p>
      <div class="line marginBotton">
        <hr class="lineOne"><hr class="lineTwo">
      </div>
      <form action="signup.php" method="POST">
         
         <p class="marginBotton font">Assinatura <span class="orang">Bronze</span> - <a href="plans.php" class="slinks">Alterar?</a></p>
          
        <fieldset class="textLeft marginBotton width">
          <legend>Nome</legend>
          <input id="registerName" class="input" type="text" name="nome" placeholder="Digite seu nome">
        </fieldset>

        <fieldset class="textLeft marginBotton width">
          <legend>E-mail</legend>
          <input  id="registerEmail" class="input" type="email" name="email" placeholder="Digite seu email">
        </fieldset>

        <fieldset class="textLeft marginBotton width">
          <legend>CPF</legend>
          <input  id="registerCPF" data-mask="000.000.000-00" class="input" name="cpf" type="text" placeholder="Digite seu CPF">
        </fieldset>

        <fieldset class="textLeft marginBotton width">
          <legend> Nascimento</legend>
          <input  data-mask="00/00/0000" id="registerBirth" class="input" type="text" name="nascimento" placeholder="DD/MM/AAAA">
        </fieldset>

        <div class="displayFlex">
        <button id="registerBtnNextRequest" type="submit" class="btnNext" name="nextPage">
          PRÓXIMO
          <img class="marginImg" src="assets/images/arrow6.png" alt="">
        </button>
      </div>
      </form><br>
      <p class="marginBotton font">Já tem uma conta? <br> <a href="login.php" class="slinks">fazer o login.</a></p>
      
<?php
}
?>
    </div>
  </section>
<!-- Atente-se para a ordem: primeiro jquery, depois locastyle, depois o JS do Bootstrap. -->
<script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>