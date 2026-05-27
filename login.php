<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario == "admin" && $senha == "1234") {
    header("Location: home.php");
} else {
    echo "Usuário ou senha incorretos!";
}
?>