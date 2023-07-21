<?php

//configs do banco
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "desafioPHP";

//cria conexção
$conn = new mysqli($servername, $user, $password, $dbname);

//verifica conexão
if ($conn->connect_error) {
    die("falha ao conectar no banco". $conn->connect_error);
}

//faz a consulta SQL

$sql = "SELECT * FROM textos";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data[] = array(); // array para armazenar os dados

    while ($row = $result->fetch_assoc()) { // percorre a tabela armazenando os dados no vetor
        $data[] = $row;
    }

    //fecha conexão
    $conn->close();

    //armazena os dados do vetor num JSON
    $content = json_encode($data, JSON_UNESCAPED_UNICODE);

    //arquivo onde os dados serão salvos
    $filepath = "./textos.txt";
    //armazena os dados JSON no arquivo txt
    if (file_put_contents($filepath, $content)) {
        echo "dados salvos com sucesso\n";
    }else {
        echo "erro ao salvar os dados\n";
    }
}else {
    echo "nenhum dado encontrado\n";
}
?>