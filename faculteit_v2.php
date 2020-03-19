<?php
$getal = readline("Van welk getal wil je de faculteit weten?");
$br = 1;
$i = 1;
while($i <= $getal){
    $br = $br * $i;
    $i++;
}

echo $br;
?>