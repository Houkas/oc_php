<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e391ce7786.js" crossorigin="anonymous"></script>
    <script src="app.js" defer></script>
</head>
<body>
    <div class="container">
       
    <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p> Formulaire d'envoi de fichier :<br />
            <input type="file" name="monfichier" /><br />
            <input type="submit" value="Envoyer le fichier" />
        </p>
    </form> 
    
    </div>
</body>
</html>