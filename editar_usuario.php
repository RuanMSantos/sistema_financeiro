<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include 'conexao.php';
        $id = intval($_GET['id']);
        $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
        $result = $conexao->query($sql);
        $row = $result->fetch_assoc();
    ?>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="img1">
                    <img src="img/img1.png" alt="">
                </div>
            <form action="php/atualizar_usuario.php" method="post">
                <div id="bloco-login">
                        <div class="mb-3">
                            <label style="font-weight: 500;" for="nome" class="form-label">Nome</label>
                            <input style="border: 2px solid silver;" type="text" value="<?php echo $row["nome"] ?>" class="form-control" id="nome" name="nome">
                        </div>
                        <div class="mb-3">
                            <label style="font-weight: 500;" for="email" class="form-label">Email</label>
                            <input style="border: 2px solid silver;" type="email" value="<?php echo $row["email"] ?>" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label style="font-weight: 500;" for="cargo" class="form-label">Cargo</label>
                        <input style="border: 2px solid silver;" type="text" value="<?php echo $row["cargo"] ?>" class="form-control" id="cargo" name="cargo">
                    </div>
                <div class="mb-3 form-check">
                </div>
                <input style="background-color: black; border-color: black; font-size: 20px; font-weight: 700; width: 200px;" type="submit" class="btn btn-primary" value="Cadastrar">
                <a style="background-color: #FFD700; font-size: 20px; border-color: #FFD700; color: #26011C; font-weight: 700; width: 200px;" href="listar_usuario.php" type="submit" class="btn btn-primary">Voltar</a>
                <div style=" position: relative; text-align: right; margin-bottom: 8px;" class="icons" id="coin"><i style="font-size: 50px; color: #26011C;" class="fa-solid fa-coins"></i></div>
            </form>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>