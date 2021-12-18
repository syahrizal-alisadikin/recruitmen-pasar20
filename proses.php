<?php

require 'Pasar20.php';

$loop = $_POST['loop'] ?? 1;
$data = [];
$pasar20 = new Pasar20();

for ($i = 1; $i <= $loop; $i++) {
    $data[] = $pasar20->getResult($i);
    if ($pasar20->getCount() === 5) {
        break;
    }
}