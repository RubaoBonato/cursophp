<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php
            setcookie("dia-da-semana", "segunda", time()+3600);

            session_start();
            $_SESSION["teste"] = "funcionou";

            echo "<h1>SuperGlobal Get</h1>";
            var_dump($_GET);
            
            echo "<h1>SuperGlobal POST</h1>";
            var_dump($_POST);

            echo "<h1>SuperGlobal REQUEST</h1>";
            var_dump($_REQUEST);

            echo "<h1>SuperGlobal COOKIE</h1>";
            var_dump($_COOKIE);

            echo "<h1>SuperGlobal SESSION</h1>";
            var_dump($_SESSION);
            
            echo "<h1>SuperGlobal SERVER</h1>";
            var_dump($_SERVER);

            echo "<h1>SuperGlobal Globals</h1>";
            var_dump($GLOBALS);

            echo "<h1>SuperGlobal ENV</h1>";
            var_dump($_ENV);
            foreach (getenv() as $c => $v) {
                echo "<br> $c -> $v";
            }
        ?>
        </pre>
    </main>
</body>
</html>