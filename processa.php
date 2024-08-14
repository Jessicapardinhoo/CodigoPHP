<?php
    $nome_usuario = filter_input(INPUT_GET, "nome_usuario", FILTER_SANITIZE_SPECIAL_CHARS);

    $email_usuario = filter_input(INPUT_GET, "email_usuario", FILTER_SANITIZE_EMAIL);

    $senha_usuario = filter_input(INPUT_GET, "senha_usuario", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "Nome  do usuário: $nome_usuario<br>";
    echo "Email do usuário: $email_usuario<br>";
    echo "Senha do usuário: $senha_usuario<br>";

    echo "<br>";
    
?>