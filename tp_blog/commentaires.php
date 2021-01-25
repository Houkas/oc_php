<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon super Blog</title>
    <script src="https://kit.fontawesome.com/e391ce7786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

        <a href="index.php">Retour à l'accueil</a>

        <?php 
            
            $bdd = new PDO('mysql:host=localhost;dbname=oc_php;charset=UTF8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            // Récupération du billet
            $requete_billet = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
            
            $requete_billet->execute(array($_GET['billet']));
            
            $donnees = $requete_billet->fetch();


        ?>

       <h1>Mon super Blog</h1>
    
       

        <div class="news">

            <h3>
            
                <?php
                    
                    
                    echo htmlspecialchars($donnees['titre']) .' le ' . $donnees['date_creation_fr'];
                    

                ?>

            </h3>

            <p>

                <?php 
        
        
                    echo htmlspecialchars($donnees['contenu']);
                    
                
                ?>

                <br>


            </p>


        </div>

        <h4>Commentaires</h4>

        <?php
            $requete_billet->closeCursor();//fin de la recherche dans la table billet    
        ?>

        <p>
                
            <?php 

                // Récupération des commentaires
                
                $req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');

                $req->execute(array($_GET['billet']));

                while ($donnees = $req->fetch()){

            ?>

                <p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>

                <p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
                
            <?php

                } // Fin de la boucle des commentaires

                $req->closeCursor();

            ?>
                    
            

        </p>
    
    </div>
</body>
</html>
