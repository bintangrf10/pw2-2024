<?php

    require_once 'class_lingkaran.php';

    echo 'Nilai PHI = ' . Lingkaran::PHI;

    $lingkar1 = new Lingkaran(8);
    $lingkar2 = new Lingkaran(27);

    echo '<br><br>';
    echo '<br>Luas lingkaran1 adalah ' . $lingkar1->getLuas() . 'cm';
    echo '<br>Luas lingkaran2 adalah ' . $lingkar2->getluas() . 'cm';

    // keliling
?>