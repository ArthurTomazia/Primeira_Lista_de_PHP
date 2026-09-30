<?php 

function calcularMedia($nota1, $nota2){

// Maior e Menor nota
    if($nota1>$nota2){
        $maiorNota = $nota1;
        $menorNota = $nota2;
    }else{
        $maiorNota = $nota2;
        $menorNota = $nota1;
    }


    $media = (($nota1 + $nota2)/2);

if($media >= 7){

    $final = "Aprovado";

}elseif($media >= 6 && $media < 7){

    $final = "Recuperação";

}else{

    $final = "Reprovado";

}

return[
    'maiorNota'=>$maiorNota,
    'menorNota'=>$menorNota,
    'media'=>$media,
    'final'=>$final
];

}

$maiorNota = null;
$menorNota = null;
$media = null;
$final = null;

if (isset($_POST['nota1'],$_POST['nota2'])) {
$nota1=$_POST['nota1'];
$nota2=$_POST['nota2'];
$resultado = calcularMedia($nota1, $nota2);
$maiorNota=$resultado['maiorNota'];
$menorNota=$resultado['menorNota'];
$media=$resultado['media'];
$final=$resultado['final'];
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex10</title>
</head>
<body>


<form method="POST">
    <label for="nota1" name="nota1" id="nota1">Insria sua primeira nota: </label>
    <input type="number" name="nota1" id="nota1" placeholder="Nota1">
    <br>
    <label for="nota2" name="nota2" id="nota2">Insria sua segunda nota: </label>
    <input type="number" name="nota2" id="nota2" placeholder="Nota2">
    <br>
    <button type="submit">Calcular</button>
    <br><br>
    <Label>Maior nota: <?php echo $maiorNota ?></Label>
    <br>
    <Label>Menor nota: <?php echo $menorNota ?></Label>
    <br>
    <Label>Média: <?php echo $media ?></Label>
    <br>
    <Label>Situação final: <?php echo $final ?></Label>


   



    <br>
    <br><button><a href="../index.php">Home</a></button>
</form>
    
</body>
</html>