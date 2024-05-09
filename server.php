<?php



//Prendo contenuto file json
$data_string = file_get_contents('dischi.json');

// formatto stringa
$discs = json_decode($data_string, true);

// Specifico che mi deve ritornare un json
header('Content-type: application/json');


// invio dati
echo json_encode($discs);

?>