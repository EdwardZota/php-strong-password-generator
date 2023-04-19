<?php

function createPassword($arrayAllCharacter,$lunghezzaPassword){
    $password=[];
    if($_GET['Repeate'] == 'Si'){
        for($i = 0 ; $i < $lunghezzaPassword; $i++){
            $randomNumber=rand(0,count($arrayAllCharacter));
    
            foreach($arrayAllCharacter as $key => $character){
                if($randomNumber==$key){
                    $password[]=$character;
                }
            }
        }
    }elseif($_GET['Repeate'] == 'No'){
        $i = 0;
        while ($i <= $lunghezzaPassword) {
            $randomNumber=rand(0,count($arrayAllCharacter));
    
            foreach($arrayAllCharacter as $key => $character){
                if($randomNumber==$key && !in_array($randomNumber,$arrayAllCharacter)){
                    $password[]=$character;
                    $i++;
                }
            }

        }
    }
    return $password;
}
