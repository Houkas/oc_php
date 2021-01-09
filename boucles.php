<?php

$repetition = 0;

while($repetition <= 10){
    echo '<p>la variable $repetition est plus petite que 10' .', la valeur est de ' .$repetition .'</p>';
    $repetition++;
}

for($note = 0; $note < 10; $note++ ){
    echo '<p>La note est en dessous de la moyenne, la note est de ' . $note;
}
    
//    while :  à utiliser de préférence lorsqu'on ne sait pas par avance combien de fois la boucle doit être répétée.

//    for  : à utiliser lorsqu'on veut répéter des instructions un nombre précis de fois.

?>