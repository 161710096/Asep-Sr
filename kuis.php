<?php

class identitas{
	public $nama;
	public $tempatlahir;
	public $kelas;
	public $status;

	public function __construct($nama,$tempatlahir,$kelas,$status){
	$this->nama = $nama;
	$this->tempatlahir = $tempatlahir;
	$this->kelas = $kelas;  		
	$this->status = $status;
}

public function get_nama(){
return $this->nama;
}
public function get_tempatlahir(){
return $this->tempatlahir;
}
public function get_kelas(){
return $this->kelas;
}
public function get_status(){
return $this->status;
}
}
?>