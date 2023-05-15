<?php
$n1 = isset($_POST['tomatinho'])?$_POST['tomatinho']:0;
print("$n1<br>");
$n2 = isset($_POST['abobrinha'])?$_POST['abobrinha']:0;
$r = $n1+$n2;
print("$r<br>");
$rDiv = $n1/$n2;
print("$rDiv<br>");
?>
