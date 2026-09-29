<?php 

function gerarSenha($quantidade){
if($quantidade < 5){
    return "Senha curtade mais, minimo de 5 casas";
} else {
$caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*';
$embaralhado = str_shuffle($caracteres);
$resultado = substr($embaralhado, 0, $quantidade);
return $resultado;
}
}
$resultado = null;

if (isset($_POST['quantidade'])) {
$quantidade = $_POST['quantidade'];
$resultado = gerarSenha($quantidade);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Gerador de senhas ultra seguras</h3>

<form method="POST">

    <label for="quantidade" name="quantidade" id="quantidade">Quantidade de caracteres da senha:</label>
    <input type="text" name="quantidade" id="quantidade" required>
    <br>
    <button type="submit">Gerar senha</button>
    <br>
    <label for="senha"> <?php echo $resultado; ?> </label>

</form>
    
</body>
</html>