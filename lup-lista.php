<?php

$notasList = [7 , 10 , 9 , 8 , 5 , 3];
echo count($notasList);

echo "<br>Notas<br>";

for($i = 0 ; $i < count($notasList) ; $i++){
    echo $notasList[$i] . "<br>";
}