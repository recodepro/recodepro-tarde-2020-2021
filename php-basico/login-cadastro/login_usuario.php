<?php

session_start();

$email = $_POST['email']; 
$senha = md5($_POST['senha']);

if (strlen($email) > 3 && strlen($senha) > 3) {
    $conn = mysqli_connect("localhost", "root", "", "sistema");

    // Execução da instrução SQL
    $resultado_consulta = $conn->query("SELECT * from usuarios where email = '$email' AND senha = '$senha'");

    // $usuarios recebe a lista de usuários
    $usuarios = mysqli_fetch_all($resultado_consulta);

    $_SESSION['nome'] = $usuarios[0][1];
    $_SESSION['email'] = $usuarios[0][2];
    $_SESSION['senha'] = $usuarios[0][3];
    
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
