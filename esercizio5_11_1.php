<?php


/*
 Integra il seguente array con la traccia precedente,
 stampando per ogni riga la stringa “A <nome città> fa <freddo/caldo/molto caldo> con <temperatura>°C”
 
 */

 $temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14,
  "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];


  foreach($temperature as $citta => $temperatura){

     echo "A $citta fa ";
     
     if($temperatura < 15){
        echo "freddo";
     }
      elseif($temperatura >= 15 && $temperatura <= 25){
        echo "caldo";
      }
      else {
        echo "molto caldo";
      }

      echo " con $temperatura °C" . "\n";

  }