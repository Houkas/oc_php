<?php

$prenoms[0] = 'Hugo';
$prenoms[1] = 'Cyrielle';
$prenoms[2] = 'Capsule';
$prenoms[3] = 'Pot de colle';

$prenoms = array('Hugo','Cyrielle','Capsule','Pot de colle'); //façon plus simple pour ecrire un tableau

print_r($prenoms) .'<br>'; //la fonction 'print_r' affiche le contenu d'un tableau

$films = array('nom' => 'Drive', 'note' => '4/5', 'genre' => 'Thriller');

print_r($films);

for($num = 0; $num < 4; $num++){ // defaut de l'utilisation de for pour un tableau : il faut connaitre la taille du tableau
    echo '<p>' . $prenoms[$num] . '</p>';
}

foreach($films as $libelle => $detail){
    echo '<p>' . $libelle .' vaut ' . $detail . '</p>';
} //foreach est la boucle conçut pour les tableaux; on demande de faire une boucle sur toutes les cases du tableau   

if (array_key_exists('genre', $films)){ // array_key_exist permet de vérifier une clé recherchée dans le tableau, la function renvoit un boolean
    echo '<p>la clé " genre " existe dans les films</p>';
}

if (in_array('Drive', $films)){ // la fonction in_array permet de vérifier si un élément que l'on cherche est dans un tableau, il renvoit un boolean
    echo '<p>Drive est le meilleur film de tous les temps !</p>'; 
}

$position = array_search('Cyrielle', $prenoms);
echo '<p> Cyrielle se trouve en position ' .$position .' dans le tableaux $prenoms</p>';
?>