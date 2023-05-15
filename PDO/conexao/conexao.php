<?php
$dsn = 'mysql:host=localhost;dbname = cadastro';
$usuario = 'root';
$senha = '';
//tratando erros
try
{
    $conexao = new PDO($dsn,$usuario,$senha);
    
    $query = '
    create table tb_usuarios(
        id int not null primary key auto_incrment,
        nome varchar(50) noit null,
        email varchar(100) not null,
        senha varchar(32) not null
    )';
    $retorno = $conexao->exec($query);
    echo $retorno;
    //$conexao->exec($query);
    //o pdo processa o campo que a conexao é estabelecida
    // o método exec volta apenas as linhas modificadas eu reduzidas
    // o retorno sempre será 0 porque está modificando ou removendo dados
    // no dml também retornariam 0 o esperado é que se retorne 0
    // crud creat, read, update e delete não se usa exec
    $query = 'insert into tb_usuarios(nome, email, senha)
    values
    ("Luiz Henrique", "abobrinha@gmail.com", "123456"),
    ("Gabriela Gonçalves", "gabi@gmail.cm","12344")';
    $retorno = $conexao->exec($query);
    
}
catch (PDOException $e)
{
    echo 'Erro: '.$e->getCode().'Mensagem: '. $e->getMessage();
    //registrar erro
}
?>
