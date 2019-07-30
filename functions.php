<?php

function __e($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = __e($_POST["nome"]);
    $email = __e($_POST["email"]);
    $sexo = __e($_POST["sexo"]);
    $tipo_mensagem = __e($_POST["tipo-mensagem"]);
    $mensagem = __e($_POST["mensagem"]);

    $mostrarMensagem = true;
}


function exibirMensagem()
{
    echo "<h2>Sua mensagem:</h2>";
    echo $nome;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $tipo_mensagem;
    echo "<br>";
    echo $mensagem;
    echo "<br>";
    echo $sexo;
}
