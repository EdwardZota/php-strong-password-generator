<?php

function createPassword($arrayAllCharacter,$lunghezzaPassword){
    $password=[];

    for($i = 0 ; $i < $lunghezzaPassword; $i++){
        $randomNumber=rand(0,count($arrayAllCharacter));

        foreach($arrayAllCharacter as $key => $character){
            if($randomNumber==$key){
                $password[]=$character;
            }
        }
    }
    return $password;
}
