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
            echo "<h1>SuperGlobal Get</h1>";
            var_dump($_GET);
            
            echo "<h1>SuperGlobal POST</h1>";
            var_dump($_POST);

            echo "<h1>SuperGlobal REQUEST</h1>";
            var_dump($_REQUEST);
            ?>

        </pre>
    </main>
</body>
</html>