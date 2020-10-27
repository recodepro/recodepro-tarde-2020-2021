<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <title>Entre ou cadastre-se</title>

    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <main>
        <section class="login">
            <div class="card">
                <form action="login_usuario.php" method="post">
                    <h1>Entre ou cadastre-se</h1>
                    <input type="email" name="email" placeholder="Digite o seu e-mail">
                    <input type="password" name="senha" placeholder="Digite a sua senha">
                    <button type="submit"><b>Entrar</b></button>
                    <a href="./cadastro.php">Ainda não possui cadastro? Clique aqui.</a>
                </form>
            </div>
        </section>
        <section class="cadastro">
            <div class="image"></div>
        </section>
    </main>
</body>
</html>