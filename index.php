<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <?php
        if(isset($_GET['passLang'])){
            $lunghezzaPassword = $_GET['passLang'];
        }

        $letter='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $number='0123456789';
        $symbol='./?!£$%&';

        $allCharacter= $letter . $number . $symbol;
        $arrayAllCharacter=str_split($allCharacter);

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
        if (isset($lunghezzaPassword)) {
            $newPassword = createPassword($arrayAllCharacter,$lunghezzaPassword);
        }
    
    ?>
    <div>
        <?php
            if(isset($newPassword)){
                echo implode(" ",$newPassword);
            }
        ?>
    </div>

    <form action="index.php" method="GET">
        <label for="passLang">Lunghezza Password:</label>
        <input type="number" id="passLang" name="passLang">
        <button>Crea Password</button>
    </form>
    
</body>
</html>