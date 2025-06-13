<?php
// conectar ao banco
include "conecta.php";

// dados do formulário
$nome = $_POST['nome'];
$tel = $_POST['telefone'];

// inserir valores na tabela contatos
$sql = "INSERT INTO contatos (nome, telefone) 
VALUES ('$nome','$tel')";

if(mysqli_query($conexao,$sql)){
    echo "Contato inserido.";
} else {
    echo "Houve uma falha na inserção.";
}

echo '<hr><a href="formInserir.php"> Voltar </a>';
