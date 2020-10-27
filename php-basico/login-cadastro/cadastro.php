<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <title>Cadastre-se</title>

    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/cadastro.css">
</head>
<body>
    <main>
        <div class="card">
            <form action="cadastro_usuario.php" method="post">
                <h1>Cadastre-se</h1>
                <input type="text" name="nome" placeholder="Digite o seu nome">
                <input type="email" name="email" placeholder="Digite o seu e-mail">
                <input type="password" name="senha" placeholder="Digite uma senha">
                <input type="password" name="conf_senha" placeholder="Confirme a sua senha">
                <button type="submit"><b>Cadastre-se</b></button>
                <a href="./index.php">Já possui cadastro? Realize o login.</a>            
            </form>
        </div>
    </main>
</body>
</html>