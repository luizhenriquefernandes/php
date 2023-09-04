<?php
// Configurações do banco de dados
$host = 'localhost:3307';  // Endereço do servidor MySQL
$usuario = 'root';  // Nome de usuário do MySQL
$senha = '';  // Senha do MySQL
$banco = '3b';  // Nome do banco de dados


// Conexão com o banco de dados
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica se ocorreu um erro na conexão
if (mysqli_connect_errno()) {
    die('Falha na conexão com o MySQL: ' . mysqli_connect_error());
}

// Variáveis para o usuário e senha digitados
$usuarioDigitado = $_GET['txtEmail'];  // Substitua pelo valor digitado pelo usuário
$senhaDigitada = $_GET['txtPass'];  // Substitua pelo valor digitado pelo usuário


// Consulta na tabela de login e senha
$sql = "SELECT usuario, senha FROM login";
$resultado = mysqli_query($conexao, $sql);

// Verificação do resultado da consulta
if (!$resultado) {
    die('Erro na consulta: ' . mysqli_error($conexao));
}

// Flag para verificar se o usuário e senha correspondem
$usuarioCorreto = false;


// Verifica se o usuário e senha correspondem
while ($linha = mysqli_fetch_assoc($resultado)) {
    if ($linha['usuario'] == $usuarioDigitado && $linha['senha'] == $senhaDigitada) {
        $usuarioCorreto = true;
        
        break;
    }
}

// Exibe a mensagem de boas-vindas se o usuário e senha estiverem corretos
if ($usuarioCorreto) {
    echo 'Olá, seja bem-vindo!';
} else {
    echo 'Usuário ou senha inválidos.';
}

mysqli_close($conexao);
?>
