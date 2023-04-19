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

        $letter='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $number='0123456789';
        $symbol='._/?!£$&';

        $allCharacter= $letter . $number . $symbol;
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
        <label for="passLang">Lunghezza Password:</label>
        <input type="number" id="passLang" name="passLang">
        <button>Crea Password</button>
    </form>
    
</body>
</html>
