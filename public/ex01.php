<?php 

function calcularFormula($x, $y){
    if (($y) == 0){
        return "Erro: numero 2 não pode ser zero";
    } elseif (($x) == 0){
        return "Erro: numero 1 não pode ser zero";

    } else {
        $resultado = (pow($x, 2) + pow($y, 2)) / ($x + $y);
        return $resultado;
    }
}
$resultado = null;


$x = $_POST['x'];
$y = $_POST['y'];

$resultado = calcularFormula($x, $y);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex01</title>
</head>
<body>
    
<h3>Calcular usando formula</h3>

<form method="POST">
<label for="x" id="x">Primero Numero:</label>
<input type="number" name="x" id="x" required>
<br>
<label for="y" id="y">Segundo Numero:</label>
<input type="number" name="y" id="y" required>
<br>
<button type="submit">Calcular</button>
<br>
<label for="Resultado">Resultado: <?php echo $resultado ?></label>




</form>

</body>
</html>