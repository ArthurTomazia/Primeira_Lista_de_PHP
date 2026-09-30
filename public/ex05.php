
<?php 

function analisarTexto($texto){

$palavras_quantidade = str_word_count($texto);

    $text_sem_espaco = str_replace(' ','', $texto);
$caracteres_quantidade = mb_strlen($text_sem_espaco,'UTF-8');

    preg_match_all('/[aáàâãeéêiíìoóôõuúü]/ui', $texto, $numero_vogais);
$vogais_quantidade = count($numero_vogais[0]);
    
    preg_match_all('/[bcdfghjklmnpqrstvwxyz]/ui', $texto, $numero_consoantes);
$consoantes_quantidade = count($numero_consoantes[0]);

return [
'palavras_quantidade' => $palavras_quantidade,
'caracteres_quantidade' => $caracteres_quantidade,
'vogais_quantidade' => $vogais_quantidade,
'consoantes_quantidade' => $consoantes_quantidade
];
}

$palavras_quantidade = null;
$caracteres_quantidade = null;
$vogais_quantidade = null;
$consoantes_quantidade = null;



if (isset($_POST['texto'])) {
$texto = $_POST['texto'];
$resultado = analisarTexto($texto);
$palavras_quantidade = $resultado['palavras_quantidade'];
$caracteres_quantidade = $resultado['caracteres_quantidade'];
$vogais_quantidade = $resultado['vogais_quantidade'];
$consoantes_quantidade = $resultado['consoantes_quantidade'];
}
    


?>

<br>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex05</title>
</head>
<body>
    

    <form method=POST>

    <label for="texto" name="texto" id="texto">Texto:</label>
    <input type="text" name="texto" id="texto" placeholder="insira seu texto">
    <br>
    <button type="submit">Avaliar</button>
    <br>
    <br>
    <label for="texto">Quantidade de palavras: <?php echo $palavras_quantidade ?></label>
    <br>
    <label for="texto">Quantidade de caracteres: <?php echo $caracteres_quantidade ?></label>
    <br>
    <label for="texto">Quantidade de vogais: <?php echo $vogais_quantidade ?></label>
    <br>
    <label for="texto">Quantidade de consoantes: <?php echo $consoantes_quantidade ?></label>
        
    
    
    
        <br>
        <br><button><a href="../index.php">Home</a></button>
    </form>


</body>
</html>