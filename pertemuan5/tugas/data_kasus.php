<?php

    require_once 'class_kasus.php';

    //object
    $Kpop = new Kpop('Smart', 'Le sserafim', '2004');
    $Pop = new Pop('Ruang Rindu', 'Letto', '2005');
    $Rock = new Rock('Hampa', 'Ari Lasso', '2003');
    

    //echo
    echo "Info Lagu:<br>";
    $Kpop->getInfoKpop();
    echo"<br>";

    echo "Info Lagu:<br>";
    $Pop->getInfoPop();
    echo"<br>";

    echo "Info Lagu:<br>";
    $Rock->getInfoRock();
    echo"<br>";
    
    
?>