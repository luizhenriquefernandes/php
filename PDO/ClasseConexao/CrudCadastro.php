<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="_css/style5.css">
    <title>Crud Conexao</title>
</head>
<body>
    <h1>Crud Conexão</h1>
    <div class = 'prin'>
    <?php
    include "Conexao.php";
    include "Logar.php";
    require_once "ClasseLogar.php";
    
    try
    {
        
        $conexao = new Conexao("localhost","root","cadastro","");
        $conexao->_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $email = isset($_POST['txtEmail'])?$_POST['txtEmail']:null;
        $senha = isset($_POST['txtPass'])?$_POST['txtPass']:null;
        $usuario = new ClasseLogar(null,$email, $senha);
                
        $consulta = $conexao->_conn->query('SELECT * FROM usuario WHERE email = ' . $conexao->_conn->quote($usuario->getIdLogin()));
        //utilizar o rowCount para verificar se o cadastro foi realizado        
        if ($consulta->rowCount()>0)
        {
            print("Usuário já Cadastrado");
            return false;
            
        }
        else
        {
            $sql = "insert into usuario (email,pass)
            values('$email','$senha')";
            $conexao->_conn->exec($sql);        
        
            print("Cadastro Realizado");
        }
        
        

    // foreach($consulta as $row) { 
                    
              
    // }
   
    
    // foreach($row as $key => $c)
    // {
    //     print($c);
        
    //     if ($key == 'email' and $c == $usuario->getIdLogin())
    //     {
    //         print("<br> Usuário Já Cadastrado {$c}<br>");
    //     }
    //     else if($key == 'email' and $c != $usuario->getIdLogin())
    //     {
            
    //         $sql = "insert into usuario (email,pass)
    //         values('$email','$senha')";
    //         $conexao->_conn->exec($sql);
    //         print("Cadastro Realizado");
    //     }
        
    // }
    
    
    
        
        
    }
    catch (PDOException $e)
    {
        print("<br>Problemas {$e->getMessage()}<br>"); 
        $conexao->close_conexao();
    }
    catch(Exception $e)
        {
            print("Erro Genérico {$e->getMessage()}<br>");
        }
    ?>
    </div>
    
</body>
</html>