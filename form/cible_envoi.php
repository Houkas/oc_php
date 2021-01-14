<?php 




// on test si le fichier a bien été envoyé et si il n'y a pas d'erreur
if (isset($_FILES['monfichier']) && $_FILES['monfichier']['error'] == 0){
    
    // on test si le fichier est inférieur à 1Mo soit 1 000 000 d'octets
    if($_FILES['monfichier']['size'] < 1000000){

        $infosfichier = pathinfo($_FILES['monfichier']['name']); // on recupere le nom du fichier
        $extension_upload = $infosfichier['extension'];// on recupere son extension
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

        if (in_array($extension_upload, $extensions_autorisees)){

            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
            echo "L'envoi a bien été effectué !";

        }

        

    }

}

?>