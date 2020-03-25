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
$mig = get_class_methods(Mig::class);
print_r($mig);
echo "<br>";
$tu = get_class_methods(Tu_154::class);
print_r($tu) ;
