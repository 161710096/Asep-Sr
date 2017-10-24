<?php

class robot {
   	public $suara;
   	public $berat;
    public function __construct($suara,$berat){
    $this->suara = $suara;        
    $this->berat = $berat;        
   }
   	public function set_suara($suara){
   	$this->suara = $suara;				
   }
    public function get_suara(){
    return $this->suara;
   }
   public function set_berat($berat){
   	 $this ->berat =$berat;
   	} 
   	public function get_berat(){
    return $this->berat;
   	}
}
    
 ?>