<?php
   require_once'latihan.php';

    $robot1= new robot("ngik ngik",150);

    echo "Suara Robot :".$robot1->get_suara(). '<br>';
    echo "Berat Robot :".$robot1->get_berat(). "kg";

    
 ?>