<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuovaPassword</title>
</head>
<body>
    <main>
        <?php
        session_start();
            if(isset($_SESSION['newPassword'])){
                ?><h1>La tua nuova password è:</h1>
                <h3><?php
                echo implode(" ",$_SESSION['newPassword']);
            }
        ?></h3>
    </main>
</body>
</html>