<?php
        require_once __DIR__ . './functions.php';

        if(isset($_GET['passLang'])){
            $lunghezzaPassword = $_GET['passLang'];
        }

        $letter='abcdefghijklmnopqrstuvwxyz';
        $capitalLetter='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $number='0123456789';
        $symbol='._/?!£$&';

        if(!isset($_GET['Lettere'])){
            $letter = '';
            $capitalLetter = '';
        }

        if(!isset($_GET['Numeri'])){
            $number = '';
        }

        if(!isset($_GET['Simboli'])){
            $symbol = '';
        }

        $allCharacter= $letter . $number . $symbol . $capitalLetter;
        $arrayAllCharacter=str_split($allCharacter);


        session_start();
        if (isset($lunghezzaPassword) && $lunghezzaPassword>5) {
            $_SESSION['newPassword'] = $newPassword = createPassword($arrayAllCharacter,$lunghezzaPassword);
        }
        if(isset($newPassword)){
            header('Location: ./response.php');
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h3 id="title">Generatore password random</h3>
        <div id="control">
            <?php
                if($lunghezzaPassword<=5 && $lunghezzaPassword>0){
                    ?><h3 id="alert">Richiesta una password maggiore di 5</h3><?php
                }
            ?>
        </div>
        <form action="index.php" method="GET">
            <div class="box">
                <label for="passLang">Lunghezza Password:</label>
                <input type="number" id="passLang" name="passLang">
            </div>
            <div class="box">
                <p>Accetti la ripetizione dei caratteri?</p>
                    <input type="radio" id="Si" name="Repeate" value="Si" checked>
                    <label for="Si" >Si</label><br>
                    <input type="radio" id="No" name="Repeate" value="No">
                    <label for="No">No</label><br>  
            </div>
            <div class="box">
                <p>Che tipo di caratteri desideri includere:</p>
                    <input type="checkbox" id="Lettere" name="Lettere" value="Lettere" checked>
                    <label for="Lettere"> Lettere</label><br>
                    <input type="checkbox" id="Numeri" name="Numeri" value="Numeri" checked>
                    <label for="Numeri"> Numeri</label><br>
                    <input type="checkbox" id="Simboli" name="Simboli" value="Simboli" checked>
                    <label for="Simboli"> Simboli</label><br>
            </div>
            <button>Crea Password</button>
        </form>
    </main>
</body>
</html>
