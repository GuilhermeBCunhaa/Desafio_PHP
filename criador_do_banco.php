<?php

//configs do banco de dados
$servername = "localhost";
$user = "root";
$password = "";

//cria a conexão com o banco
$conn = new mysqli($servername, $user, $password);

//verifica se conectou corretamente
if ($conn->connect_error) {
    die("falha ao conectar no banco de dados". $conn->connect_error);
}

//Faz a execução do script

$sql = "CREATE DATABASE desafioPHP";

if ($conn->query($sql)===TRUE) {
    echo "banco criado\n";
}else {
    echo "Erro ao criar\n";
}

//ler o arquivo
$sqlScript = file_get_contents("./dump_desafio_php.sql");


$queries = explode(';', $sqlScript); // separa por ';'
foreach ($queries as $query) {
    if (trim($query)) {// retira espaços em branco 
        if ($conn->query($query) !==TRUE) {
            echo "erro ao executar". $conn->connect_error ."\n";
        }
    }
}
echo "script executado\n";

//fecha conexção
$conn->close();
?>