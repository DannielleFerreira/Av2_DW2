<?php
/*
print_r($_GET);
print_r($_POST);
*/
$id = $_POST['ID'];
$nome = $_POST['NOME'];
$tipo = $_POST['TIPO DE ANIMAL'];
$raca = $_POST['RAÇA'];
$tamanho = $_POST['TAMANHO'];
// echo $nome;

// Parâmetros da conexão com o banco de dados
$servername = '127.0.0.1';
$username = 'root';
$password = '2014';
$dbname = 'cadastro';
// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Preparando o comando SQL
$sql = "INSERT INTO ANIMAL ( `ID`, `NOME`, `TIPO`, `RACA`, `TAMANHO`) ";
$sql = $sql."VALUES ('".$id."', '".$nome."', ".$tipo.", '".$raca ."', '".$tamanho."')";
// echo $sql;
// Executar o comando SQL
if (mysqli_query($conn, $sql)) {
    echo "Cadastro feito com sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// Fechar a conexão
mysqli_close($conn);
?>