<?php

$nome = $_POST["nome_solicitante"];  
$telefone = $_POST["telefone"];    //parte 1 
$responsavel = $_POST["nome_responsavel"];
$emailResp = $POST["email_responsavel"]



//conexao
$servidor ='localhost';
$usuario = 'root';
$senha = 'root';
$bancodedados= 'formulario';



$conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);

if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());

$query = "insert into solicitante (nome, telefone, responsavel_setor, email) values 
		  ('$_POST[nome]','$_POST[telefone]', '$_POST[responsavel]', '$_POST[emailResp]'";


if (!mysqli_query($conexao,$query)) {
    echo 'erro';
    die("Error: " . mysqli_error($conexao));
}else{
    
    echo "1 gravação adicionada com sucesso";
    
    mysqli_close($conexao);
}



?>



