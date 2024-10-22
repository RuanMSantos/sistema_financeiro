<?php

include 'conexao.php';

$nome = $_POST['categoria'];
$tipo = $_POST['flexRadioDefault'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO tb_categoria VALUES (null, '$nome', $tipo, '$descricao')";

if ($conexao->query($sql)){
    echo "<script>alert('Enviado com sucesso'); window.location.href = '../categoria.html';</script>";
} else {
    echo "Falha na conexão com o banco de dados";
}

?>