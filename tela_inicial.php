<!DOCTYPE html> <!--Necessário mudar para um php para receber comandos de php-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
    <link rel="stylesheet" href="css/pg_inicial.css">
</head>
<body>
    <div class="container">
        <h1>Seja bem vindo ao sistema financeiro</h1>
        <p>Escolha uma opção de lançamento</p>
        <div class="btn">
            <a href="categoria.php">Categoria</a>
            <a href="lancamento.html">Lançamento</a>
        </div>
    </div>
    <div style="position: fixed; margin-left: 1600px; margin-top: 1350px;"> <!--É possível criar o php dentro de tags html, pois php é apenas texto-->
        <?php
        session_start();
            include 'php/conexao.php';
            if (isset($_SESSION['id'])){
                $id = $_SESSION['id'];
                $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
                $query = $conexao->query($sql);
                $resultado = $query->fetch_assoc();
                $nome = $_SESSION['nome'] = $resultado['nome'];
                echo "<h1>Olá $nome!</h1>";
            } else {
                echo "<script>alert('Usuario ou senha inválidos'); window.location.href = 'index.html'</script>";
            }
        ?>
    </div>
</body>
</html>