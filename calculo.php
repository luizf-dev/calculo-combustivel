<?php
session_start();

$alcool = $_POST['alcool'];
$gasolina = $_POST['gasolina'];

if($alcool == "" || $gasolina == ""){
    $_SESSION['msg'] = "Preencha os campos corretamente!";
    header("Location: index.php");
    exit();
}

$alcool = str_replace(array('.', ','), array('', '.'), $_POST['alcool']);
$gasolina = str_replace(array('.', ','), array('', '.'), $_POST['gasolina']);
$resultado = ($alcool * 100) / $gasolina;

if($resultado < 70){
    $_SESSION['resultado'] = number_format($resultado, 2, ',', '.') . ' % - A melhor opção nesse caso é Álcool!';
    header("Location: index.php");
    exit();
}else if($resultado > 70){
    $_SESSION['resultado'] = number_format($resultado, 2, ',', '.') . ' % - A melhor opção nesse caso é Gasolina!';
     header("Location: index.php");
    exit();
}else{
    $_SESSION['resultado'] = number_format($resultado, 2, ',', '.') . ' % - Ambas opções são válidas!';
     header("Location: index.php");
    exit();
}



