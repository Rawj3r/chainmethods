<?php

/**
 * Created by IntelliJ IDEA.
 * User: empirestate
 * Date: 3/12/16
 * Time: 11:13 PM
 */
class Cake
{

    public $cupcake = array();

    public function Frosting($str){
        $this->cupcake['Frosting'] = $str;
        return $this;
    }

    public function Nuts($int){
        $this->cupcake['Nuts'] = (int) $int;
        return $this;
    }

    public function Sprinkels($int){
        $this->cupcake['Sprinkels'] = (int) $int;
        return $this;
    }


}

$cupcake = new Cake();
echo  "<pre>";
$cupcake->Nuts('10')
    ->Frosting('chocolate')
    ->Sprinkels('200');

print_r($cupcake);