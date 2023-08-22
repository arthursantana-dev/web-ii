<?php

include "conectar_sql.inc";

$nome = $_POST['i-nome'];
$email = $_POST['i-email'];
$cidade = $_POST['i-cidade'];
$estado = $_POST['i-estado'];
$comentario = $_POST['i-opiniao'];

$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$nome', '$email', '$cidade', '$estado', '$comentario')";

if ($conexao->query($sql) === TRUE){
    echo "Usuario incluído com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>