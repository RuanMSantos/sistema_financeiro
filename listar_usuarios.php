<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
    <link rel="stylesheet" href="css/listagem.css">
    <style>
        
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        nav {
            padding: 10px;
            background-color: darkkhaki;
        }

        nav > h1 {
            font-size: 50px;
            display: inline;
        }

        nav > a {
            text-decoration: none;
            background-color: darkolivegreen;
            padding: 5px 20px;
            font-size: 30px;
            color: white;
            border-radius: 6px;
            margin-bottom: 10px;
            height: 20px;
            margin-left: 1100px;
            transition: all 0.7s;
        }

        nav > a:hover {
            border: 1px dashed black;
        }

        table {
            border: 1px solid black;
            width: 100%;
        }
        
        td > a {
            text-decoration: none;
            color: pink;
            background-color: purple;
            text-align: center;
        }

    </style>
</head>
<body>    
    <nav>
        <h1>
            <?php
                session_start();
                include 'php/conexao.php';
                if (isset($_SESSION['id'])){
                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
                    $query = $conexao->query($sql);
                    $resultado = $query->fetch_assoc();
                    $nome = $_SESSION['nome'] = $resultado['nome'];
                    echo "$nome";
                } else {
                    echo "<script>alert('Usuario ou senha inválidos'); window.location.href = 'index.html'</script>";
                }
            ?>
        </h1>

        <a href="php/logout.php">Sair</a>
    </nav>
    
    <table border>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Cargo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>Sem informações</td>
                <td>Sem informações</td>
                <td>Sem informações</td>
                <td><a href="">Editar</a></td>
                <td><a href="">Excluir</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>