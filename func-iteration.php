<?php 
class Data
{
    public $nama;
    public $kota;
    // public $laptop = "HP";
    // public $kampung = "karnaganyar";
}
$julia = new Data();
$julia->nama = "julia";
$julia->kota = "cirebon";

$jeje = clone $julia;

var_dump($julia);
var_dump($jeje);

// echo $julia->nama;
// foreach ($julia as $key => $value) {
//     echo "$key : $value";
// }

?>