<?php

$servidor ='localhost';
$usuario = 'root';
$senha = 'root';
$bancodedados= 'notas';


$conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);

if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());

$query = "insert into aluno (nome, disciplina) values ('$_POST[nome]','$_POST[disciplina]')";

if (!mysqli_query($conexao,$query)) {
    
    die("Error: " . mysqli_error($conexao));
}else{
    
    echo "1 gravação adicionada com sucesso";
    
    mysqli_close($conexao);
}



?>