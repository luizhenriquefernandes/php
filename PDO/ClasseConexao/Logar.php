<?php
    
    function get_post_action($name)
    {
        $params = func_get_args();
    
        foreach ($params as $name) {
            if (isset($_POST[$name])) {
                return $name;
            }
        }
    }
    
?>

<?php
                
                switch (get_post_action('btnCadastrar', 'btnAcessar')) {
                    case 'btnCadastrar':
                        //save article and keep editing
                        print_r(" 
                        <!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <link rel='stylesheet' href='_css/style5.css'>
                            <title>Crud Conexao</title>
                        </head>
                        <body>
                        <form action='CrudCadastro.php' method='post'>
                        <div class='prin'>
                            <div class='card'>
                                <div class='card-top'>
                                    <img class='imglogin' src='imagens/login-g1f39ab68f_1920.png' alt=' srcset='>
                                    <h2 class='collor-red'>Cadastro</h2>
                                    <p class='collor-blue'>Cadastrando Usuário</p>
                                </div>
                                <div class='card-group'>
                                    <label for='txtEmail'>e-mail</label>
                                    <input type='email' name='txtEmail' id='txtEmail' placeholder='Digite seu e-mail' required>
                                </div>
                                <div class='card-group'>
                                    <label for='txtPass'>senha</label>
                                    <input type='password' name='txtPass' id='txtPass' min='8' placeholder='Senha' pattern='^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$])[a-zA-Z0-9@#$]{8,50}$' required>
                                </div>
                                <div class='card-group'>
                                    <label> <input type='checkbox'>lembre-me</label>
                                </div>
                                <div class='card-group btn'>
                                    
                                    <button type='submit' name='btnConfirmar' value='Confirmar'>Confirmar </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </body>
                </html>
                                        ");
                
                        break;
                
                    case 'btnAcessar':                         
                        print_r(" 
                        <!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='UTF-8'>
                            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                            <link rel='stylesheet' href='_css/style5.css'>
                            <title>Crud Conexao</title>
                        </head>
                        <body>
                        <form action='CrudConsulta.php' method='post'>
                        <div class='prin'>");                        
                        include "Conexao.php";
                        require_once "ClasseLogar.php";

                        $email = isset($_POST['email'])?$_POST['email']:null;
                        $senha = isset($_POST['pass'])?$_POST['pass']:null;
                        
                        try
            {
                
                $conexao = new Conexao("localhost","root","cadastro","");
                $conexao->_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $usuario = new ClasseLogar(null,$email, $senha);
                       
                $consulta = $conexao->_conn->query('SELECT email, pass FROM usuario WHERE email = ' . $conexao->_conn->quote($usuario->getIdLogin()));
                print_r($consulta);
                if($consulta->rowCount()==0){
                    print("Usuário não existe");
                    return false;
                }
                else{
                
                foreach($consulta as $row){
                   
                }

                
                foreach($row as $key => $c){
                    
                    //print("Chave = {$key} valor{$c}<br>");
                    if($key == 0 and $c==$email){
                        $emilP = $email;
                                             
                    } 
                    if($key == 1 and $c==$senha){
                        $emailP= $email;                      
                          
                    }
                    if($email == $emailP and $senha == $senhaP){
                        header("location: FormularioContas.php");
                        die();
                    }
                    if($key == 0 and $c!=$email){
                        print("email ou senha não confere");
                    }
                    if($key == 1 and $c!=$senha){
                        print("email ou senha não confere");
                    }
             
                                     
                    
                }
            }
                
                
                
                
                //utilizar o rowCount para verificar se o cadastro foi realizado        
                // if ($consulta->rowCount()>0)
                // {
                //     print("Usuário já Cadastrado");
                //     return false;
                    
                // }
                // else
                // {
                //     $sql = "insert into usuario (email,pass)
                //     values('$email','$senha')";
                //     $conexao->_conn->exec($sql);        
                
                //     print("Cadastro Realizado");
                // }
                
                

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

                                print("<script>alert('$email')</script>");
                                
                                print_r("<div class='card-group btn'>
                                        
                                            
                                            <button type='submit' name='btnConfirmar' value='Confirmar'>Confirmar </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </body>
                        </html>
                                                ");
            }
?>