<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cálculo Combustível</title>
        <link rel="shortcut icon" href="assets/img/gas-pump-solid.svg" type="image/x-icon">
        <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1 class="header-title">Calculadora Álcool X Gasolina</h1>
            </div>            
            <div class="info">
                <h3 class="info-title">Como é feito o cálculo?</h3><hr>
                <p class="info-text">
                    A principal diferença entre os dois combustíveis
                    está na proporção entre o preço e o desempenho de cada um.
                    O etanol vai valer a pena quando custar até 70% do valor da gasolina.
                    Aqui vamos comparar o preço do litro
                    do álcool e da gasolina e mostrar qual é o combustível mais vantajoso.                    
                </p>
            </div>
            <div class="logo">
                <i class="fas fa-gas-pump fa-4x"></i>
            </div>
            <h1 class="title">Qual a melhor opção?</h1>
            <!--Sessão para msg de error =========================-->
                <?php include 'msg_user.php';?>
            <!--==================================================-->             
            <form action="calculo.php" method="POST">            
                <label for="alcool">Álcool (Preço por litro)</label>
                <input name="alcool" class="money" type="text" placeholder="R$ 0,00">
                <label for="gasolina">Gasolina (Preço por litro)</label>
                <input name="gasolina" class="money" type="text" placeholder="R$ 0,00">
                <button type="submit" class="btn">Calcular</button>         
            </form>
        </div>

        <!-- Meu javascript-->
        <script src="assets/js/main.js"></script>
        <!--Jquery Mask Plugin-->
        <script src="assets/Mask-Plugin/dist/jquery.mask.js"></script>
        <script src="assets/Mask-Plugin/dist/jquery.mask.min.js"></script>      
    </body>
</html>