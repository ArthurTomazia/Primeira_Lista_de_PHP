<?php 

function calcularDesconto($preco){
 
if($preco>=1000){

    $desconto="30%";
    $valor_pago=($preco*0.70);

}elseif($preco>=500){

$desconto="20%";
    $valor_pago=($preco*0.80);

}elseif($preco>=100){

$desconto="10%";
    $valor_pago=($preco*0.90);

}else{

$desconto="0%";
    $valor_pago=$preco;

}
return[
    'desconto'=>$desconto,
    'valor_pago'=>$valor_pago
];
}

$desconto=null;
$valor_pago=null;

if (isset($_POST['preco'])) {
$preco = $_POST['preco'];
$resultado = calcularDesconto($preco);
$desconto = $resultado['desconto'];
$valor_pago = $resultado['valor_pago'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex07</title>
</head>
<body>
    
<form method="POST">

    <label for="preco" name="preco" id="preco">Valor pago:</label>
    <input type="number" name="preco" id="preco">
    <br>
    <button type="submit">Calcular</button>
    <br>
    <label for="desconto">Desconto ganho: <?php echo $desconto ?></label>
    <br>
    <label for="valor_pago">Valor pago: <?php echo $valor_pago ?></label>




    <br><button><a href="../index.php">Home</a></button>
</form>

</body>
</html>