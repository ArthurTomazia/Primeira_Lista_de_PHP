<?php

function ordenarNomes($nomesTexto){

    $vetorNomes = explode(",", $nomesTexto);


    $vetorNomes = array_map("trim", $vetorNomes);

    sort($vetorNomes);

    return $vetorNomes;

}

$nomes_usuario = "Carlos,  Ana,  Bruno, Fernanda , Daniela";
 
echo "Lista original: $nomes_usuario";
?>. <br><?php 
$listaOrganizada = ordenarNomes($nomes_usuario);

echo "Lista organizada: <br>";


foreach ($listaOrganizada as $nome){
    echo "- $nome";  ?>
    . <br>
    <?php } ?>


   
