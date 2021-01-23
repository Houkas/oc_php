<?php
// Effectuer ici la requête qui insère le message


    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);

    $requete_insert = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(?, ?)'); 

    if(isset($_POST['pseudo'],$_POST['message'])){

        $requete_insert->execute(array($_POST['pseudo'],$_POST['message']));
            
        
    }

// Puis rediriger vers minichat.php comme ceci :
header('Location: minichat.php');





?>

