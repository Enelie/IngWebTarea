<?php
echo "Ingresa la cantidad de términos: ";
$n = (int) fgets(STDIN);

$a = 0;
$b = 1;

echo "Serie de Fibonacci:\n";

for ($i = 0; $i < $n; $i++) {
    echo $a . " ";
    
    $temp = $a + $b;
    $a = $b;
    $b = $temp;
}
?>