

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Cours sur les transmissions de données avec l'url en PHP</title>
    </head>
    <body>
        <header>
        
        </header>
        <div>
            <p>

                <?php 

                    if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['repeter'])){ //est ce que les variables nom et prénom existent ?

                        $nbDeRepetition = (int) $_GET['repeter'];//est ce que $repeter est un nombre

                        if($nbDeRepetition < 100 && $nbDeRepetition >= 1){

                            for($repetition = 0; $repetition < $nbDeRepetition; $repetition++){// boucle qui indique combien de fois le message va être répéter
                                echo 'Bonjour ' . $_GET['nom'] .' ' . $_GET['prenom'] . '</br>';
                            }

                        }else{
                            echo 'Le nombre de répétition est trop grand';
                        }
                                             
                    }else{
                        echo 'Pas de nom ou de prénom défini !';
                    }
                  
                ?>

            </p>
        </div>
        <footer>
        
        </footer>
    </body>
</html>