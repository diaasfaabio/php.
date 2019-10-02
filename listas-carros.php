<?php
//foreach.php
$carros = [
    'LMS-2312' => [
        'MODELO' => 'CORSA',
        'MARCA' => 'CHEVROLET',
    ],
    'PKS-2352' => [
        'MODELO' => 'RANGER',
        'MARCA' => 'FORD',
    ],
    'ATP-1285' => [
        'MODELO' => 'UNO',
        'MARCA' => 'FIAT',
    ]
    ];

    foreach($carros as $placa => $veiculo){
    echo $veiculo['MODELO'] . " - " . $veiculo ['MARCA'] .
    "<br>";
}