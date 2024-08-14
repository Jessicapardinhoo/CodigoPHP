<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário GET</title>
</head>
<body>
    <h2>Cadastrar usuário</h2>

    <form method="get" action="processa.php">
        <label>Nome: </label>
        <input type="text" name="nome_usuario" placeholder="Digite o nome" required><br><br>
    
        <label>E-mail: </label>
        <input type="email" name="email_usuario" placeholder="Digite o email" required><br><br>

        <label>Senha: </label>
        <input type="password", name="senha_usuario", placeholder="Digite a senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>