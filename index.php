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
        if (isset($lunghezzaPassword)) {
            $_SESSION['newPassword'] = $newPassword = createPassword($arrayAllCharacter,$lunghezzaPassword);
            
        }
    
    ?>
    <div>
        <?php
            if(isset($newPassword)){
                header('Location: ./response.php');
            }
        ?>
    </div>
    <form action="index.php" method="GET">
        <div class="box">
            <label for="passLang">Lunghezza Password:</label>
            <input type="number" id="passLang" name="passLang">
        </div>
        <div class="box">
            <p>Che tipo di caratteri desideri includere:</p>
                <input type="checkbox" id="Lettere" name="Lettere" value="Lettere">
                <label for="Lettere"> Lettere</label><br>
                <input type="checkbox" id="Numeri" name="Numeri" value="Numeri">
                <label for="Numeri"> Numeri</label><br>
                <input type="checkbox" id="Simboli" name="Simboli" value="Simboli">
                <label for="Simboli"> Simboli</label><br>
        </div>
        <button>Crea Password</button>
    </form>
    
</body>
</html>
