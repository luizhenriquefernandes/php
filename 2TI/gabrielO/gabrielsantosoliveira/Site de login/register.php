<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="webstyle.css">
    <link rel="shortcut icon" href="icons/ICON 32X².png" type="image/x-icon">
</head>
<body>
    <div class="register_container">
    <!-- #Username -->
        <form action="" method="post">
        <label for="">Nome do Usuário</label>
        <input type="text" name="username_register" placeholder="Digite um nome de usuário">
    <!-- #Password -->
        <label for="">Senha</label>
        <input type="password" name="password_register" placeholder="Digite uma senha">
    <!-- #Submit --> 
        <input type="submit" value="Registrar" name="registro">
    <!-- #Back_End -->    
            <?php
                $tentativas= 3;
                $username_check= array(
                    "0" => "henrique",
                    "1" => "keijjinn",
                    "2" => "thamires",
                    "3" =>"bacagine"
                );
                
                $password_check=array(
                    "0" => "12345",
                    "1" => "ti1991",
                    "2" => "cao65lab"
                );
                $username= isset($_POST["username_register"]);
                $password=isset($_POST["password_register"]);
                $i=0;
                //Check_Login
                while($i<=3){
                    foreach ($username_check as $c){
                        print($c);
                        if($c != $username and $c != $password){
                            echo "Os dados inseridos estão incorretos";
                            $tentativas++;
                         }
                         else{
                             echo"Logado com sucesso";
                             include("index.php");
                             header('location: index.php');
                         }
                    }
                    
                    
                    if($tentativas>=3){
                        break;
                    }
                    $i++;
                }
                //Chek_Login
            ?>
        </form>
    </div>
</body>
</html>