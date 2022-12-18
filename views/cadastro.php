<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>
    <section class="left">
        <header>
            <section>
                <a href="../index.php">
                    <img src="../img/user.png" class="logo">
                    <span class="caption">
                        Cadastrar&nbsp;
                    </span>
                </a>
            </section>
            <nav>
                <li><a href="../index.php"><img src="../img/home.png"><span class="link-text">Home</span></a></li>
                <li><a href="cadastro.php"><img src="../img/lapis1.png"><span class="link-text">Cadastrar</span></a></li>
                <li><a href="visualizar.php"><img src="../img/visualizar.png"><span class="link-text">Tabela</span></a></li>
                <li><a href="#"><img src="../img/config.png"><span class="link-text">Config</span></a></li>
            </nav>
            <div class="side_menu_icon">
                <span class="top_angle"></span>
                <span class="bottom_angle"></span>
            </div>
        </header>
    </section>

    <section class="right">
        <a href="../index.html" class="voltar">Voltar</a>
        <h1 class="h1-cad">CADASTRAR</h1>
        

        <form class="form-cad" action="../controllers/InsertController.php" method="POST">

            <div class="div-form">
              <label for="titulo" class="form-label">Título</label>
              <input type="text" class="form-control" name="titulo" placeholder="Digite seu título">
            </div>

            <div class="div-form">
                <label for="descricao" class="form-label">Descricao</label>
                <input type="text" class="form-control" name="descricao" placeholder="Digite sua descricao">
              </div>

              <div class="div-form">
                <label for="ingredientes" class="form-label">Ingredientes</label>
                <input type="text" class="form-control" name="ingredientes" placeholder="Digite seus ingredientes">
              </div>

              <div class="div-form">
                <label for="tempo" class="form-label">Tempo</label>
                <input type="text" class="form-control" name="tempo" placeholder="Digite o tempo">
              </div>
            
            <button type="submit" name="submit" class="submit">Cadastrar</button>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script defer src="../script.js"></script>
</body>
</html>