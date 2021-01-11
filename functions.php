<?php 

    $phrase = 'Hello world';

    $nbdecaracteres = strlen($phrase); // 'strlen' est une fonction qui calcule le nb de carac dans la phrase.

    echo 'il y a ' . $nbdecaracteres . ' caractères dans cette phrase.<br>';

    $shuffle = str_shuffle($phrase); // 'str_shuffle melange à chaque requete la phrase demandée.

    echo $shuffle . '<br>';

    echo date('d/m/y') . '<br>'; // la fonction 'date' permet d'afficher une date

    //Voir toutes les fonctions intégrées dans PHP : https://www.php.net/manual/fr/indexes.functions.php




    function direBonjour($nom){ // On créé une fonction qui va nous dire Bonjour.
        echo 'Bonjour ' . $nom . '<br>';
    }

    direBonjour('Hugo'); // On exécute la fonction en lui mettant un prénom en parametre.

?>