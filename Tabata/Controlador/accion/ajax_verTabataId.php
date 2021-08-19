<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbTabata.php');
    $idTabata = $_POST['idTabata'];
    $tabata = verTabataId($idTabata);
    echo json_encode($tabata); 
     
    