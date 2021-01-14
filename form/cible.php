<p>Bonjour !</p>

<p>Affichage du pseudo : <?php echo htmlspecialchars($_POST['pseudo']); ?></p><!--On récupere ici la valeur qu'il y a dans la variable "pseudo"
htmlspecialchars permet de proteger l'injection le php en modifiant les chevrons de l'html-->

<p>Si tu veux changer de pseudo, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>