<?php
    session_start();
    require_once(__DIR__."/../mdb/mdbTabata.php");
    $id=$_SESSION['ID_USUARIO'];
    $tabata= verTabataIdUsuario($id);
    echo json_encode($tabata);

    
