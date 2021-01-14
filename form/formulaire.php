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
        <h2>Contact Us</h2>
        <p>Feel free to get in touch with me with anything related to Web Development or you can just say hi. I will get back to
        you as soon as possible.</p>
        <form action="cible.php" method="POST">
            <input type="text" placeholder="Your Pseudo" name="pseudo" required><!--name="" définit une variable, c'est dans celle ci que les données rentrées par l'utilisateur vont être stockées-->
            <input type="password" placeholder="Your password" name="password" required>
            <input type="checkbox" name="case" id="case" /> <label for="case">Je suis admin ?</label>
            <input type="submit" id="btn" value="valider">
        </form>
    </div>
</body>
</html>