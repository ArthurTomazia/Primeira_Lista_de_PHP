<?php 

function formatarTexto($texto){

$textoMaiusculo = mb_strtoupper($texto, 'UTF-8');


$textoMinusculo = mb_strtolower($texto, 'UTF-8');


$primeiraLetrMaiuscula = mb_convert_case($texto, MB_CASE_TITLE, 'UTF-8');

$text_sem_espaco = str_replace(' ','', $texto);
$letras = mb_strlen($text_sem_espaco);


return[
    'textoMaiusculo'=>$textoMaiusculo,
    'textoMinusculo'=>$textoMinusculo,
    'primeiraLetrMaiuscula'=>$primeiraLetrMaiuscula,
    'letras'=>$letras
];
} 

$textoMaiusculo = null;
$textoMinusculo = null;
$primeiraLetrMaiuscula = null;
$letras = null;


if (isset($_POST['texto'])) {
    $texto=$_POST['texto'];
    $resultado = formatarTexto($texto);
    $textoMaiusculo=$resultado['textoMaiusculo'];
    $textoMinusculo=$resultado['textoMinusculo'];
    $primeiraLetrMaiuscula=$resultado['primeiraLetrMaiuscula'];
    $letras=$resultado['letras'];
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex11</title>
</head>
<body>

<form method=POST>
    <label for="texto" name="texto" id="texto">insira seu texto:</label>
    <input type="text" name="texto" id="texto">
    <br>
    <button type="submit">Enviar</button>
    <br><br>
    <label for="textoMaiusculo">Seu texto inteiro maiusculo: <?php echo $textoMaiusculo ?></label>
    <br>
    <label for="textoMinusculo">Seu texto inteiro minusculo: <?php echo $textoMinusculo ?></label>
    <br>
    <label for="primeiraLetrMaiuscula">Só a primeira letra maiuscula: <?php echo $primeiraLetrMaiuscula ?></label>
    <br>
    <label for="letras">Quantidade total de letras: <?php echo $letras ?></label>





    <br>
    <br><button><a href="../index.php">Home</a></button>
</form>
    
</body>
</html>