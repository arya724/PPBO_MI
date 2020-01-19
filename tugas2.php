<?php

class arya{
var $nama="arya";
function arya($n){
$this->nama=$n;
}
function Hallo(){
echo "Saya, Moch Syaepfullah Arya $this->nama<br>";
}
function Hallo2(){
echo "UNWIDHA,	Klaten $this->nama<br>";
}
function Hallo3(){
echo "Alamat,	ngupit $this->nama<br>";
}
}
class anak extends arya{
}
$test = new Anak("Kelas Manajemen Informatika");
$test->Hallo();
$test = new Anak("Semester 5");
$test->Hallo2();
$test = new Anak("Klaten Utara");
$test->Hallo3();
?>