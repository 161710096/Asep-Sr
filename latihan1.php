<?php

class penjumlahan {
	public $bil1,$bil2;

	function set_nilai($bilangan1,$bilangan2){
		$this->bil1 =$bilangan1;
		$this->bil2 =$bilangan2;
	}
	function get_nilai(){
		return $this->bil1 * $this->bil2;
	}
}
$penjumlahan1 =new penjumlahan ;
$penjumlahan1->set_nilai(10,20);
echo "Hasil  :".$penjumlahan1->get_nilai();
?>