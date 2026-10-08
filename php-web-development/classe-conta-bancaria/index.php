<?php
require_once "ContaBancaria.php";


$resultado = "";


if (isset($_POST['acao'])) {

    $titular = ($_POST['titular'] ?? "");
    $saldo = (floatval($_POST['saldo'] ?? 0));
    $valor= (floatval($_POST['valor']));
    
    $conta = new ContaBancaria($titular, $saldo);



    if (isset($_POST['acao']) && ($_POST['acao'] == "saque")) {
        $resultado = $conta->getSaldo(); 
        $resultado = $conta->sacar($valor);
    }

    elseif  (isset($_POST['acao']) && $_POST['acao'] == "deposito") {
        $resultado = $conta->getSaldo(); 
        $resultado = $conta->depositar($valor);
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="titular" id="titular"> Qual o nome do titular?
        <input type="text" name="saldo" id="saldo"> Qual o valor do seu saldo atual?

        <input type="valor" name="valor"> Qual o valor desejado?

        <input type="submit" value="saque" name="acao"> 
        <input type="submit" value="deposito" name="acao"> 

    </form>
    

    <div class="resultado">
        <?php if ($resultado !== ""):?>
         <h3> <?php echo $resultado; ?></h3>
        <?php endif; ?>
    </div>


</body>
</html>