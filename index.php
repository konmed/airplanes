
<?php

class Airplanes{
    public function Takeoff(){

    }
    public function Landing(){

    }

}

class Mig extends Airplanes {
    public function Attack(){

    }
}

class Tu_154 extends Airplanes {

}

$mig1 = new Mig();
$mig1->Takeoff();
$mig1->Landing();
$mig1->Attack();

$tu1 = new Tu_154();
$tu1->Takeoff();
$tu1->Landing();

$airplane1 = new Airplanes();
$airplane1->Landing();
$airplane1->Takeoff();


$mig = get_class_methods(Mig::class);
print_r($mig);
echo "<br>";
$tu = get_class_methods(Tu_154::class);
print_r($tu) ;

?>

