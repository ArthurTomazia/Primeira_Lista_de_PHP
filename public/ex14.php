<?php 

$vetor=[2,4,6,8,7];



function estatisticasNumericas($vetor){
  
    $maiorValor = $vetor[0];
    $menorValor = $vetor[0];
    $soma = 0;
    $media = 0;
    $quantidadePares = 0;
    $quantidadeImpares = 0;


foreach($vetor as $numero){
$soma += $numero;

}

$media = ($soma/count($vetor));

foreach($vetor as $numero){
    if($numero > $maiorValor){
    $maiorValor = $numero;
    }

    if($numero < $menorValor){
    $menorValor = $numero;
    }
}

foreach($vetor as $numero){
    if($numero%2===0){
    $quantidadePares += 1;
    }else{
    $quantidadeImpares += 1;
    }

}

$organizado = $vetor;
    sort($organizado);
    $quantidade = count($organizado);

    if ($quantidade % 2 === 0) {

        $meio2 = $quantidade / 2;
        $meio1 = $meio2 - 1;
        $mediana = ($organizado[$meio1] + $organizado[$meio2]) / 2;
    } else {

        $meio = floor($quantidade / 2);
        $mediana = $organizado[$meio];
    }


return[
'maiorValor'=>$maiorValor,
'menorValor'=>$menorValor,
'soma'=>$soma,
'media'=>$media,
'mediana'=>$mediana,
'organizado'=>$organizado,
'quantidadePares'=>$quantidadePares,
'quantidadeImpares'=>$quantidadeImpares
];
}
$resultado = estatisticasNumericas($vetor);
$maiorValor=$resultado['maiorValor'];
$menorValor=$resultado['menorValor'];
$soma=$resultado['soma'];
$media=$resultado['media'];
$mediana=$resultado['mediana'];
$organizado=$resultado['organizado'];
$quantidadePares=$resultado['quantidadePares'];
$quantidadeImpares=$resultado['quantidadeImpares'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ex14</title>
</head>
<body>


<table>
    <tr><td>Números</td></tr>

    <?php foreach($vetor as $numero){ ?>
    <tr>
        <td><?php echo $numero; ?></td>
    </tr>
    <?php } ?>
</table>
<br>

<p>Soma: <?php echo $soma; ?></p>
<p>Média: <?php echo $media; ?></p>
<p>Maior valor: <?php echo $maiorValor; ?></p>
<p>Menor valor: <?php echo $menorValor; ?></p>
<p>Vetor organizado: <?php foreach($organizado as $unidade){ echo $unidade;?>, <?php } ?>   </p>
<p>Mediana: <?php echo $mediana; ?></p>
<p>Quantidade de números pares: <?php echo $quantidadePares; ?></p>
<p>Quantidade de números ímpares: <?php echo $quantidadeImpares; ?></p>







<br>
<br><button><a href="../index.php">Home</a></button>

    
</body>
</html>