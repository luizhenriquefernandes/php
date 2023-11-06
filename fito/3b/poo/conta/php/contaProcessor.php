<?php 
    require_once "./ContaCliente.php";
    
    if (isset($_GET["txtNome"]) && isset($_GET["nmbSaldo"])) {
        $n = new ContaCliente($_GET["txtNome"], $_GET["nmbSaldo"]);
    } else {
        $n = null;
    }
    
    if ($n !== null) {
        print("O nome é: {$n->get_nome()}<br>O saldo é {$n->get_saldo()}<br>");
        print("<br>");
    }   
    $n->sacar10();
    print("<br>Saldo atual é {$n->get_saldo()}<br>");
    
?>