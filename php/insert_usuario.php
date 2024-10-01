<?php

include 'conexao.php';

$name = $_POST['nome'];
$email = $_POST['email'];
$position = $_POST['cargo'];
$password = $_POST['senha'];

$sql = "INSERT INTO tb_user VALUES(null, '$name', '$email', '$position', '$password')";

if ($conexao->query($sql)){
    
    echo "<script>alert('Inserido com sucesso!'); history.back();</script>";
} else {

    echo "Falha na conexão com o banco de dados";
}

?>