<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Minichat</title>
    <script src="https://kit.fontawesome.com/e391ce7786.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

    <form action="minichat_post.php" method="POST">
        <p>
            Votre pseudo :</br>
            <input type="text" name="pseudo" placeholder="<?php echo $_COOKIE['pseudo'];?>" /><br />
            Votre message :</br>
            <input type="textarea" name="message">

            <input type="submit" value="Envoyer" />

            


            <?php

            $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            
            $dixDerniersMessages = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY id DESC LIMIT 10'); 
            // on recupere la console, le nom du jeu et le prix qui ont pour nom Nintendo 64 ou console et on classe par prix décroissant et on limite à 5 résultats
        
            while ($donnees = $dixDerniersMessages->fetch()){
                echo '<p>' . htmlspecialchars($donnees['pseudo']) . ' : '.htmlspecialchars($donnees['message'])  .' </p>';
            }

            
            
            ?>
            
        </p>

        <button onClick="history.go(0);">Refresh Page</button>

    </form>
    
    </div>

</body>
</html>
