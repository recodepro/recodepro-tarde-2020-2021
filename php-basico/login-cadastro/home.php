<?php
    session_start();

    // Se não existir um valor no indice nome, então encerre a aplicação
    if (!isset($_SESSION['nome'])) {
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    
    <h1>Olá, <?php echo $_SESSION['nome'] ?></h1>

    <a href="<?php session_destroy()?>">Sair</a>

</body>
</html>