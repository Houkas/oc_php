<?php 

$age = 14; //  un seul '=' signifie que l'on assigne 8 à $age

if($age < 12){
    echo 'Salut gamin';
}
elseif($age == 14){
    echo 'tu as 14 ans' ."\n"; // '\n' permet de sauter une ligne
}
else{
   echo 'Bonjour cher adulte'; 
}

$adulte = true;
$nom = "Hugo";

if($adulte && $nom == "Hugo"){ //Condtion '&& = et' peut se rempalcer par 'AND'. 'OR' peut se remplacer par '||'
    echo  'Tu es un adulte qui a pour prenom ' . $nom . "\n";
}
else{
    echo 'Tu es enfant';
}

//if($age == 12){ // on test l'égalité $age = 12
    //echo 'Salut gamin';
//}

//if($age != 12){ // on test si $age est différent de 12
    //echo 'Salut gamin';
//}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Cours OC PHP Conditions</title>
    </head>
    <body>
        <header>
        
        </header>

        <div>
            <p>Bonjour je fais le cours sur les conditions en php</p>
        </div>

        <footer>
        
        </footer>
    </body>
</html>



<?php 
// Condtion Switch, elle permet de ne pas répeter les elseif

switch ($age){
    case 1:
        echo 'Tu as 1 an';
        break;
    case 35:
        echo 'Tu as 35 ans';
        break;
}



?>
