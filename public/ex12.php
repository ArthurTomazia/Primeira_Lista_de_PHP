

<?php 

$vetor = array(
        "Celular" => 1000,
        "Sabonete" => 5,
        "Prato" => 20,
        "Fone" => 30
    );


$precoPesquisado = null;
function analisarProdutos($vetor){


    $produtoCaro = reset($vetor);
    $produtoBarato = reset($vetor);
    $somaPreco = 0;

foreach ($vetor as $nome => $preco){

if($preco > $produtoCaro){
    $produtoCaro = $preco;
}

if($preco < $produtoBarato){
    $produtoBarato = $preco;
}

$somaPreco += $preco;

}

$mediaPreco = ($somaPreco / count($vetor));

return[
    'produtoCaro'=> $produtoCaro,
    'produtoBarato'=> $produtoBarato,
    'mediaPreco'=> $mediaPreco
];

}

$resultado = analisarProdutos($vetor);
$produtoCaro = $resultado['produtoCaro'];
$produtoBarato = $resultado['produtoBarato'];
$mediaPreco = $resultado['mediaPreco'];

if (isset($_POST['produtoPesquisado'])) {
    $produtoPesquisado = $_POST['produtoPesquisado'];


    if (array_key_exists($produtoPesquisado, $vetor)) {
        $precoPesquisado = $vetor[$produtoPesquisado];
    }

}

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ex12</title>

</head>
<body>

<table>

<tr>
    <td>Produto</td>
    <td>Preço</td>
</tr>
<?php foreach ($vetor as $nome => $preco){ ?>
<tr>
<td><?php echo $nome; ?> </td>
<td><?php echo $preco; ?> </td>
</tr>
<?php } ?>

</table>
<br>


<form method=POST>
    <label> Produto mais caro: <?php echo $produtoCaro; ?> </label>
    <br>
    <label> Produto mais barato: <?php echo $produtoBarato; ?> </label>
    <br>
    <label> Média dos preços: <?php echo $mediaPreco; ?> </label>
    <br>

    <label for="produtoPesquisado">Insira o produto que deseja ver:</label>
        <select name="produtoPesquisado" id="produtoPesquisado">
            <option value="">Selecione</option>
            <?php foreach ($vetor as $nome => $preco){ ?>
            <option value="<?php echo $nome;?>"><?php echo $nome; ?></option> 
            <?php } ?>
                
        </select>
    <br>
    <label for="preco">Preço do produto: <?php echo $precoPesquisado; ?></label>
    <br><br>
    <button type="submit">Verificar</button>





    <br>
    <br><button><a href="../index.php">Home</a></button>
</form>
    
</body>
</html>