<?php

require_once 'Billetera.php';           
require_once 'BilleteraEnPesos.php';           
require_once 'EstadisticasBilleteras.php';           
require_once 'programa_secreto.php';

$miBilletera = new BilleteraEnPesos();
$estadisticas = new EstadisticasBilleteras($miBilletera);

$miBilletera = programa_secreto($estadisticas);

echo $miBilletera->mostrarEstadisticas();

// print_r($estadisticas);