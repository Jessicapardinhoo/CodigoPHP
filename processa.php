<?php
    $nome_usuario = filter_input(INPUT_GET, "nome_usuario", FILTER_SANITIZE_SPECIAL_CHARS);

    $email_usuario = filter_input(INPUT_GET, "email_usuario", FILTER_SANITIZE_EMAIL);

    $senha_usuario = filter_input(INPUT_GET, "senha_usuario", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "Nome  do usuário: $nome_usuario<br>";
    echo "Email do usuário: $email_usuario<br>";
    echo "Senha do usuário: $senha_usuario<br>";

    echo "<br>";
    $dados - filter_input_array(INPUT_POST, FILTER_DEFAULT);
    var_dump($dados);

    echo "Nome do usuário: ".$dados['nome_usuario']. "<br><br>";
    echo "Email do usuário: "  .$dados['email_usuario']. "<br><br>";
    echo "Senha do usuário:" .$dados['senha_usuario']. "<br><br>";
?>