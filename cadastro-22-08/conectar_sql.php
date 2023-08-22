<?php

$conexao = mysqli_connect('localhost', 'root', '', 'banco_cadastro');

mysqli_set_charset($conexao, 'utf8');

if ($conexao->connect_error) die("Não deu bom." . $conexao->connect_error);

?>