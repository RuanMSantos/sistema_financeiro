<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
    <link rel="stylesheet" href="css/listagem.css">
    <style>
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #F5F5F5;
            margin: 0;
        }

        nav {
            background-color: darkkhaki;
            padding: 10px;
        }

        nav > h1 {
            font-size: 50px;
            display: inline;
        }

        nav > a {
            background-color: darkolivegreen;
            text-decoration: none;
            transition: all 0.7s;
            border-radius: 6px;
            margin-right: 1.2%;
            padding: 5px 20px;
            text-align: right;
            margin-left:3.7%;
            margin-top: 10px;
            font-size: 30px;
            color: white;
            float: right;
            height: 30px;
        }

        nav > a:hover {
            border: 1px dashed black;
        }

        table {
            border: 1px solid black;
            width: 100%;
        }
        
        td > a {
            background-color: purple;
            text-decoration: none;
            text-align: center;
            color: pink;
            padding-left: 10px;
            padding-right:10px;
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
            <?php
                include 'php/conexao.php';
                $sql = "SELECT * FROM tb_user";
                $query = $conexao->query($sql);

                if ($query->num_rows > 0){
                    while ($row = $query->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" .$row["id_usuario"] ."</td>";
                        echo "<td>" .$row["nome"] ."</td>";
                        echo "<td>" .$row["email"] ."</td>";
                        echo "<td>" .$row["cargo"] ."</td>";
                        echo "<td><a href='editar_usuario.php?id=" .$row["id_usuario"] ."'>Editar</a></td>";
                        echo "<td><a href='excluir_usuario.php?id=" .$row["id_usuario"] ."'onclick=\"return confirm('Você tem certeza que deseja excluir este usuario?')\">Excluir</a></td>";
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>