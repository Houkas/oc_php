
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

        <?php 

            
            

            $bdd = new PDO('mysql:host=localhost;dbname=oc_php;charset=UTF8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

           

            $requete_billets = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, "%d/%m/%Y %H:%i:%s") AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 5');


        ?>

       <h1>Mon super Blog</h1>
    
       

        <div class="news">

            <?php 

            
                while($donnees = $requete_billets->fetch()){     
            
            ?>
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

                    <a href="<?php 
                    
                        echo 'commentaires.php?billet='. $donnees['id'];
                        
                    ?>">Commentaires</a>

                </p>

                

            <?php 
            
                }
            
            ?>


        </div>
    
    </div>
</body>
</html>
