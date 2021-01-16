
<?php

    $mdp_correct = "kangourou";
    $mdp_recu = $_POST['password'];

    if(isset($mdp_recu) && $mdp_recu == $mdp_correct){
        include("contenu.php"); //inclusion du contenu
        }
    else{
        echo "le mot de passe est incorrect.";
    }


?>

