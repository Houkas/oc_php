<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e391ce7786.js" crossorigin="anonymous"></script>
    <script src="app.js" defer></script>
</head>
<body>
    <div class="container">
        <p>Voici les codes de la Naza : 

            <?php 
            
            function generateRandomString($length = 10) {

                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+"é&è_à)$*ù:;,';

                $charactersLength = strlen($characters);

                $randomString = '';

                for ($i = 0; $i < $length; $i++) {

                    $randomString .= $characters[rand(0, $charactersLength - 1)];

                }

                return $randomString;
            }

            echo generateRandomString();
            
            ?>
        
        </p>
        <p>Si tu veux retourner à la page d'identification <a href="formulaire.php">clique ici</a></p>
    </div>
</body>
</html>