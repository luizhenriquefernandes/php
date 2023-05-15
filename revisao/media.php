<?php
echo"ola mundo";
$soma = 0;
$maior;
$menor;
for($i = 1; $i<=4; $i++)
{
    $n[$i]= $_POST["nmbNota{$i}"];
    
}
foreach ($n as $key => $c)
{
    $soma = $soma + $c;
    if($key == 1){
         $maior = $menor = $c;
         if($c<$menor){
            $menor = $c;
         }
         elseif($c>$maior){
            $maior=$c;
         }
    }
}
$soma = $soma/4;
 print("<br>a media e {$soma}<br>");
 print("<br>O maior número é {$maior}<br>");
 print("<br>O menor número é {$menor}<br>");
?>