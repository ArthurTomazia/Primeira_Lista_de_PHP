<?php 

function inverterTexto($texto){
    $inverso = strrev($texto);
    $quantidade = strlen($texto);
    return [
        'inverso' => $inverso,
        'quantidade' => $quantidade
    ];
}

$inverso = null;
$quantidade = null;

if (isset($_POST['texto'])) {
$texto = $_POST['texto'];
$resultado = inverterTexto($texto);
$inverso = $resultado['inverso'];
$quantidade = $resultado['quantidade'];
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02</title>
</head>
<body>

<h3>Inverter Texto</h3>

<form method="POST">
    <label for="texto" id="texto">Texto:</label>
    <input type="text" name="texto" id="texto" required>
    <br>
    <button type="submit">inverter texto</button>
    <br>
    <label for="text" id="textoinvertido">Texto invertido: <?php echo $inverso ?></label>
    <br>
    <label for="text" id="quantidade">Quantidade de caracteres: <?php echo $quantidade ?></label>
    

</form>

</body>
</html>