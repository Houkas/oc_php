<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire SQL</title>
    <script src="https://kit.fontawesome.com/e391ce7786.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
       
    <!--<form action="jeux_video.php" method="post" enctype="multipart/form-data">
        <p> Quelle console recherchez-vous ?<br />
            <input type="text" name="console" /><br />
            <input type="submit" value="Envoyer le fichier" />
        </p>
    </form>-->

    <form action="jeux_video.php" method="POST">
        <p> Quel jeu souhaitez vous ajouter à la bibliothèque ?<br />
            Son nom :</br>
            <input type="text" name="nom" /><br />
            Son possesseur :</br>
            <input type="text" name="possesseur" /><br />
            Sur quelle console :</br>
            <input type="text" name="console" /><br />
            Quel prix :</br>
            <input type="text" name="prix" /><br />
            Combien de joueurs max :</br>
            <input type="text" name="nbre_joueurs_max" /><br />
            Commentaire :</br>
            <input type="textarea" name="commentaires" /><br />

            <input type="submit" value="Envoyer" />
            
        </p>
    </form>  
    
    </div>
</body>
</html>
<?php 

    /*LECTURE SQL*/

    /*$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    //le tableau array nous permet de mieux comprendre nos erreurs

    //$reponse = $bdd->query('SELECT * FROM jeux_video'); // on récupere tous les champs du tableau grace à *
    $reponse = $bdd->query('SELECT console, nom, prix FROM jeux_video WHERE console="Nintendo 64" OR console="PC" ORDER BY prix DESC LIMIT 5'); 
    // on recupere la console, le nom du jeu et le prix qui ont pour nom Nintendo 64 ou console et on classe par prix décroissant et on limite à 5 résultats

    while ($donnees = $reponse->fetch()){
        echo '<p>' . $donnees['nom'] . ' sur '.$donnees['console'] .' a ' .$donnees['prix'] . ' € ' .'</p>';
    }*/

    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    /*$requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console=?'); 

    if(isset($_POST['console'])){

        $requete->execute(array($_POST['console']));

        while ($donnees = $requete->fetch()){
            echo '<p>' . $donnees['nom'] . ' sur '.$donnees['console'] .' a ' .$donnees['prix'] . ' € ' .'</p>';
        }

    }*/

    //Ecriture SQL

    $requete_insert = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(?, ?, ?, ?, ?, ?)'); 

    if(isset($_POST['nom'],$_POST['possesseur'],$_POST['console'],$_POST['prix'],$_POST['nbre_joueurs_max'],$_POST['commentaires'])){

            $requete_insert->execute(array($_POST['nom'],$_POST['possesseur'], $_POST['console'],$_POST['prix'],$_POST['nbre_joueurs_max'],$_POST['commentaires']));
                
    }
    

?>