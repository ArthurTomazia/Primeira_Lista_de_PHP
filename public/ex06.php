<?php 

function converterTemperatura($valor, $unidade){

if($unidade=="C"){

    $Celsius = $valor;
    $Fahrenheit = (($valor * 1.8) + 32);
    $Kelvin = ($valor + 273.15);
     
}elseif($unidade==="F"){

    $Celsius = (($valor - 32) * (5/9));
    $Fahrenheit = $valor;
    $Kelvin = ((($valor - 32) / 1.8) + 273.15);

}else{

    $Celsius = ($valor - 273.15);
    $Fahrenheit = (($valor - 273.15) * 1.8 + 32);
    $Kelvin = $valor;
    }


    return[
        'Celsius'=>$Celsius,
        'Fahrenheit'=>$Fahrenheit,
        'Kelvin'=>$Kelvin
    ];
}

$Celsius = null;
$Fahrenheit = null;
$Kelvin = null;


if (isset($_POST['valor'],$_POST['unidade'])) {
$valor=$_POST['valor'];
$unidade=$_POST['unidade'];
$resultado = converterTemperatura($valor, $unidade);
$Celsius = $resultado['Celsius'];
$Fahrenheit = $resultado['Fahrenheit'];
$Kelvin = $resultado['Kelvin'];
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex06</title>
</head>
<body>
    
    <form method="POST">
        <label for="valor" name="valor" id="valor">Valor: </label>
        <input type="text" name="valor" id="valor">
        <br>
        <label for="unidade" name="unidade" id="unidade">Unidade de medida</label>
            <select name="unidade" id="unidade">
                <option value="">Selecione</option>
                <option value="C">Celsius</option>
                <option value="F">Fahrenheit</option>
                <option value="K">Kelvin</option>
            </select>
            <br>
            <button type="submit">Converter</button>
            <br>
        <br>
        <label for="Valor_Celsius">Valor em celsius: <?php echo $Celsius;?></label>
        <br>
        <label for="Valor_Fahrenheit">Valor em fahrenheit: <?php echo $Fahrenheit;?></label>
        <br>
        <label for="Valor_Kelvin">Valor kelvin: <?php echo $Kelvin;?></label>
       
       
       
       
     <br>
    <br><button><a href="../index.php">Home</a></button>
    </form>


</body>
</html>