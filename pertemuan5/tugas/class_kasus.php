<?php

class Lagu{
    protected $JudulLagu;
    protected $Penyanyi;

    protected function __construct($JudulLagu, $Penyanyi){
        $this->JudulLagu = $JudulLagu;
        $this->Penyanyi = $Penyanyi;
    }

    protected function getInfo(){
        echo 'JudulLagu: '. $this->JudulLagu. '<br>';
        echo 'Penyanyi'. $this->Penyanyi. '<br>';
    }
}

class Kpop extends Lagu{
    public $Dirilis;

    public function __construct($JudulLagu, $Penyanyi,$Dirilis){
        parent::__construct($JudulLagu, $Penyanyi);
        $this->Dirilis = $Dirilis;
    }

    public function getInfoKpop(){
        parent::getInfo();
        echo 'Dirilis: '. $this->Dirilis . '<br>';
    }

}

class Pop extends Lagu{
    public $Dirilis;

    public function __construct($JudulLagu, $Penyanyi,$Dirilis){
        parent::__construct($JudulLagu, $Penyanyi);
        $this->Dirilis = $Dirilis;
    }

    public function getInfoPop(){
        parent::getInfo();
        echo 'Dirilis: '. $this->Dirilis . '<br>';
    }

}

class Rock extends Lagu{
    public $Dirilis;

    public function __construct($JudulLagu, $Penyanyi,$Dirilis){
        parent::__construct($JudulLagu, $Penyanyi);
        $this->Dirilis = $Dirilis;
    }

    public function getInfoRock(){
        parent::getInfo();
        echo 'Dirilis: '. $this->Dirilis . '<br>';
    }

}




?>