<?php

function createPassword($arrayAllCharacter,$lunghezzaPassword){
    $password=[];
        $i = 0;
        while ($i <= $lunghezzaPassword) {
            $randomNumber=rand(0,count($arrayAllCharacter));
    
                if(!in_array($arrayAllCharacter[$randomNumber],$password) || $_GET['Repeate'] == 'Si'){
                    $password[]=$arrayAllCharacter[$randomNumber];
                    $i++;
                }
            

        }
    return $password;
}
