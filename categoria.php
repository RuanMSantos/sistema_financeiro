<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container text-center">
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

        <a href="php/logout.php">Sair</a>

        <div class="row">
          <div class="col">
            <form action="php/insert_categoria.php" method="post">
                <div id="bloco-login">
                  <div class="mb-3">
                    <label style="font-weight: 500;" for="categoria" class="form-label">Nome</label>
                    <input style="border: 2px solid silver;" type="text" class="form-control" id="categoria" name="categoria">
                    </div>
                    <div style="text-align: left; margin-top: 55px; font-size: 30px; font-weight: 500;" class="mb-3 radio">
                      <div class="form-check danger-radio">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="0">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Receita
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="1" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Despeza
                        </label>
                    </div>
                    <div class="mb-3">
                      <label style="font-weight: 500;" for="descricao" class="form-label">Descrição</label>
                      <input style="border: 2px solid silver;" type="text" class="form-control" id="descricao" name="descricao">
                    </div>
                </div>
                <div class="mb-3 form-check">
                </div>
                <div class="btn">
                  <button type="submit" class="btn btn-primary">Adicionar</button>
                  <a style="color: #26011C; text-decoration: none; background-color: #FFD700;" href="tela_inicial.html">Voltar</a>
                </div>
                <div style=" position: relative; text-align: right; margin-bottom: 8px;" class="icons" id="coin"><i style="font-size: 50px; color: #26011C;" class="fa-solid fa-coins"></i></div>
            </form>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>