<?php 

function analisarNumero($numero){

$numero = (int)$numero;

if($numero<=1){
    echo "<script>alert('número precisa ser maior que 1')</script>";
    return[
    'parimpar'=> "nulo",
    'primo'=> "nulo",
    'perfeito'=> "nulo"  
    ];
   
    

}else{

    if($numero % 2===0){
        $parimpar = "seu número é par";
    }else{
        $parimpar = "seu número é impar";
    }

    $primo = "seu número é primo"; 
    for($i=2;$i<$numero;$i++){
    if($numero%$i===0){
        $primo = "seu número não é primo"; 
        break;
        }
    }
    
    $contador_perfeito = 0;
    for($i=1;$i<$numero;$i++){
        if($numero%$i===0){
            $contador_perfeito+=$i;
        }
        }
        if($numero===$contador_perfeito){
            $perfeito = "seu número é perfeito";
        }else{
            $perfeito = "seu número não é perfeito";
        }

    

}

return[
    'parimpar'=> $parimpar,
    'primo'=> $primo,
    'perfeito'=> $perfeito
];
}

$parimpar = null;
$primo = null;
$perfeito = null;

if (isset($_POST['numero'])) {
$numero=$_POST['numero'];
$resultado = analisarNumero($numero);
$parimpar=$resultado['parimpar'];
$primo=$resultado['primo'];
$perfeito=$resultado['perfeito'];


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
    
<form method="POST">

    <label for="numero" name="numero" id="nuemro">Informe seu número:</label>
    <input type="number" name="numero" id="nuemro" placeholder="número">
    <br>
    <button type="submit">Calcular</button>
    <br><br>
    <label for="parimpar">Par ou Impar? <?php echo $parimpar ?></label>
    <br>
    <label for="primo">Peimo ou não? <?php echo $primo ?></label>
    <br>
    <label for="perfeito">Perfeito ou não? <?php echo $perfeito ?></label>
    <br>




    <br><button><a href="../index.php">Home</a></button>

</form>
</body>
</html>