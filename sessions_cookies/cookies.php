<?php

/*setcookie … Comme pour  session_start ,
 cette fonction ne marche QUE si vous l'appelez avant tout code HTML (donc avant la balise <!DOCTYPE>  ).*/

setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true); // On écrit un cookie

////creation d'un cookie : 3 parametres, son nom, sa valeur et son expiration (ici dans 1 ans)
//creation d'un cookie sécurisé par httpOnly qui est activé par le dernier true.
//le httpOnly permet d'éviter les failles XSS et donc qu'un visiteur se fasse voler le contenu de son cookie

setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...

// Et SEULEMENT MAINTENANT, on peut commencer à écrire du code html
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma super page PHP</title>
    </head>
    <body>
    
    <p>
    Hé ! Je me souviens de toi !<br />
    Tu t'appelles <?php echo $_COOKIE['pseudo']; ?> et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ?
    </p>
    
    </body>
</html>