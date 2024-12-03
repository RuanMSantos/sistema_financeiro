<?php
//Informações para conectar no banco

$server = 'localhost';
$username = 'root';
$password = 'root';
$db = 'db_contabilidade';

$conexao = new mysqli($server, $username, $password, $db);

if ($conexao->connect_error) {
    die('Falha na conexão' .$conexao->connect_error);
 } 
//else {
//     echo "Conectado com sucesso";
// }

?>