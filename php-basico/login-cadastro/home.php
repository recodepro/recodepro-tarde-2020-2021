<?php
    session_start();

    // Se não existir um valor no índice 'nome', então encerre a aplicação
    if (!isset($_SESSION['nome'])) {
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header class="container-fluid border shadow">
        <nav class="row container m-auto">
            <div class="col-10 d-flex align-items-center">
                <img class="rounded-circle" src="<?php echo $_SESSION['imagem']?>" alt="<?php echo $_SESSION['nome'] ?>">
                <h5 class="ml-3 mb-0"><?php echo $_SESSION['nome'] ?></h5>
            </div>

            <div class="col-2 d-flex align-items-center justify-content-end">
                <div class="dropdown">
                    <button class="btn text-white rounded-circle dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">    
                    </button>
                    <div class="dropdown-menu py-0" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item py-2" href="#">Meu perfil</a>
                        <a class="dropdown-item py-2" href="./sair.php">Sair</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Conteúdo -->
    <main class="container">
        <form class="form-row mt-5">
            <input class="col-9 form-control pl-3" type="text" placeholder="No que você está pensando, <?php echo $_SESSION['nome']?>?">
            <button class="col-3 btn">Publicar</button>
        </form>

        <div class="card mt-5">
            <div class="card-header">
                <img class="rounded-circle" src="<?php echo $_SESSION['imagem']?>" alt="<?php echo $_SESSION['nome'] ?>">
                <h5 class="ml-3 mb-0"><?php echo $_SESSION['nome'] ?></h5>
            </div>
            <div class="card-body">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus delectus magni modi officia atque consectetur
                labore. Laborum itaque temporibus magni quos, optio repudiandae fuga qui, quisquam quas, voluptatem quaerat 
                aspernatur.
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-header">
                <img class="rounded-circle" src="<?php echo $_SESSION['imagem']?>" alt="<?php echo $_SESSION['nome'] ?>">
                <h5 class="ml-3 mb-0"><?php echo $_SESSION['nome'] ?></h5>
            </div>
            <div class="card-body">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus delectus magni modi officia atque consectetur
                labore. Laborum itaque temporibus magni quos, optio repudiandae fuga qui, quisquam quas, voluptatem quaerat 
                aspernatur.
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>