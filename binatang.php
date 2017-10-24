<?php
class binatang{
public $nama;
public $jumlahkaki;
public $makanan;

public function __construct($nama,$jumlahkaki,$makanan){
	$this->nama=$nama;
	$this->jumlahkaki=$jumlahkaki;
	$this->makanan=$makanan;
}
public function get_nama(){
return $this->nama;
}
public function get_jumlahkaki(){
return $this->jumlahkaki;
}
public function get_makanan(){
return $this->makanan;	
}

}
?>