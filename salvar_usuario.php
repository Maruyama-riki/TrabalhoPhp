<?php
if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo "Usuário cadastrado com sucesso!<br>";
    echo "Os dados foram enviados via POST, por isso não aparecem na URL do navegador.";
}
?>