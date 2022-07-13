<?php

// Conexão com o banco de dados

$conn = @mysql_connect("localhost", "esferate_root", "Fr79461279") or die ("Problemas na conexão.");
$db = @mysql_select_db("esferate_cadastro", $conn) or die ("Problemas na conexão");






$busca = $_POST['palavra'];// palavra que o usuario digitou
$categoria = $_POST['categoria']; //categoria que o usuario deseja

$busca_query = mysql_query("SELECT * FROM upfotos WHERE nome LIKE '%$busca%' AND categoria = '$categoria'")or die(mysql_error());//faz a busca com as palavras enviadas

if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}

// quando existir algo em '$busca_query' ele realizará o script abaixo.
while ($usuario = mysql_fetch_array($busca_query)) {
    echo "Id do Produto: $usuario[id]<br />"; 
    echo "Nome do Produto: $usuario[nome]<br />";
    echo "Preço do Produto: $usuario[preco] Reais<br />";
    echo "Categoria do Produto: $usuario[categoria]<br />";
    echo "<hr>";
}
?>
