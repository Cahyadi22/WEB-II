<?php
$A = 123 ; // variable global
function Test() {
global $A ; // variable local
echo"Nilai A dalam fungsi = $A \n";
}
Test();
echo"Nilai A luar fungsi = $A \n";
?>
Jika dijalankan maka akan tercetak :
Nilai A dalam fungsi = 123
Nilai A luar fungsi = 123 
