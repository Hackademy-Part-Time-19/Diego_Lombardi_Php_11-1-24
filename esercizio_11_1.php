<?php

/*
  Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere,
  per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” 
  a seconda del genere, utilizzando if…elseif…else
  Implementa nuovamente l’esercizio utilizzando uno switch
*/


$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
    ['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];




foreach($users as $user){
    $saluto = 'Buongiorno ';

    if($user['gender'] === 'M'){

        $saluto .= 'Sig. ';

    }elseif($user['gender'] === 'F'){

        $saluto .= 'Sig.ra ';

     }
     
     echo $saluto . $user['name'] . " " .$user['surname'] . "\n"; 
}

foreach($users as $user){

    $saluto = 'Buongiorno ';

    switch ($user['gender']){
        case 'M':
            $saluto .= 'Sig. ';
            break;
        case 'F':
            $saluto .= 'Sig.ra ';
            break;
        default:
            break;    
    }


    echo $saluto . $user['name'] . ' ' . $user['surname'] . "\n";

}