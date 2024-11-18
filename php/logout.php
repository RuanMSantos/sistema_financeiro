<?php
    session_start(); // inicia sessão
    session_destroy(); // destroi sessão
    session_unset(); // limpa variaveis

    header('location: ../index.html');
?>