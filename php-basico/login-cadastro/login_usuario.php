<?php

session_start();

$email = $_POST['email']; 
$senha = $_POST['senha'];

if (strlen($email) > 3 && strlen($senha) > 3) {
    $senha_cripto = md5($senha);

    $conn = mysqli_connect("localhost", "root", "", "sistema");

    // Execução da instrução SQL
    $resultado_consulta = $conn->query("SELECT * from usuarios where email = '$email' AND senha = '$senha_cripto'");

    // $usuarios = Retorno da consulta no banco de dados
    $usuarios = mysqli_fetch_all($resultado_consulta);

    $_SESSION['nome'] = $usuarios[0][1];
    $_SESSION['imagem'] = $usuarios[0][2];
    $_SESSION['email'] = $usuarios[0][3];
    $_SESSION['senha'] = $usuarios[0][4];
    
    header('Location: home.php');
}
else {
    echo "
        <script>
            alert('E-mail ou senha inválidos!')
            location.href = 'index.php'
        </script>
    ";
}
