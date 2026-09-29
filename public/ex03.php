<?php 

function mascararCpf($CPF){
    

$quatroultimos = substr($CPF, -4);
$quantidadecaracteres = strlen($CPF);

if($quantidadecaracteres<5){
    return "Quantidade de caracteres inválido";
}else{
    

$resultado = str_repeat("*", ($quantidadecaracteres-4)).$quatroultimos;


return $resultado;
}
}

$resultado = null;

$CPF = $_POST['CPF'];

$resultado = mascararCpf($CPF);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex03</title>
</head>
<body>
    
    <form method="POST">
        <label for="CFP" name="CPF" id="CPF">Digite seu CPF:</label>
        <input type="text" name="CPF" id="CPF" placeholder="CPF">
        <br>
        <button type="submit">Proteger</button>
        <br>
        <?php echo $resultado; ?>
       
        



    </form>



</body>
</html>