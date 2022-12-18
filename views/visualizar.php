<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
    <link rel="stylesheet" href="../css/visualizar.css">
</head>
<body>
    <section class="left">
        <header>
            <section>
                <a href="../index.php">
                    <img src="../img/user.png" class="logo">
                    <span class="caption">
                        Visualizar&nbsp;
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
        <a href="../index.php" class="voltar">Voltar</a>
        <h1>VISUALIZAR</h1>

        <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>TÍTULO</th>
                <th>DESCRIÇÃO</th>
                <th>INGREDIENTES</th>
                <th>TEMPO</th>
              </tr>
            </thead>
            <tbody>    
                <?php
                require_once("../models/Crud.php");
                $obj = new Crud();
                $rows = $obj->visualizarDb();

                foreach ($rows as $value) {
                    
                ?>         
              <tr>
                <th><?php echo $value['id']; ?></th>
                <td><?php echo $value['titulo']; ?></td>
                <td><?php echo $value['descricao']; ?></td>
                <td><?php echo $value['ingredientes']; ?></td>
                <td><?php echo $value['tempo']; ?></td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script defer src="../script.js"></script>
</body>
</html>