<?php 

function criptografarMensagem($texto, $deslocamento){

return cifraDeCesar($texto, $deslocamento);
}

function descriptografarMensagem($textoCriptografado, $deslocamento){

return cifraDeCesar($textoCriptografado, -$deslocamento);
}

function cifraDeCesar($texto, $deslocamento){

$resultado = "";

for($i = 0; $i < strlen($texto); $i++){

$caracteres = $texto[$i];

if(ctype_upper($caracteres)){
    $posicao = (ord($caracteres) - ord('A') + $deslocamento) % 26;
    $posicao = ($posicao + 26) % 26;
    $resultado .= chr($posicao + ord('A'));

} elseif (ctype_lower($caracteres)){
    $posicao = (ord($caracteres) - ord('a') + $deslocamento) % 26;
    $posicao = ($posicao + 26) % 26;
    $resultado .= chr($posicao + ord('a'));
    
} else {
    $resultado .= $caracteres;
}
}

return $resultado;

}

$mensagem_usuario = "Fala ae Bixo";
$deslocamento_usuario = 3;

echo "Mensagem antes de crptografar: $mensagem_usuario <br>";

$mensagemCriptografada = criptografarMensagem($mensagem_usuario, $deslocamento_usuario);
echo "Mensage depois da criptografia: $mensagemCriptografada <br>";

$mensagemOriginal = descriptografarMensagem($mensagemCriptografada, $deslocamento_usuario);
echo "mensage depois da descriptografia: $mensagemOriginal <br>";






?>

