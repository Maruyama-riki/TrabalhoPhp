<?php
if (isset($_GET['nome'])) {
    echo "Nome: " . $_GET['nome'] . "<br>";
    echo "Código: " . $_GET['codigo'] . "<br>";
    echo "Valor: " . $_GET['valor'] . "<br>";
    echo "Setor: " . $_GET['setor'] . "<br>";
    echo "Quantidade: " . $_GET['quantidade'] . "<br>";
    echo "<img src='" . $_GET['imagem'] . "' width='200'>";
}
?>