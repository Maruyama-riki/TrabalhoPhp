<form method="GET" action="busca.php">
    Digite o ID: <input name="id">
    <button>Buscar</button>
</form>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($id == 1) {
        echo "Nome: Notebook <br>";
        echo "Valor: R$ 3500 <br>";
        echo "<img src='https://via.placeholder.com/200' width='200'>";
    } elseif ($id == 2) {
        echo "Nome: Smartphone <br>";
        echo "Valor: R$ 1500 <br>";
        echo "<img src='https://via.placeholder.com/200' width='200'>";
    } else {
        echo "Produto não encontrado";
    }
}
?>