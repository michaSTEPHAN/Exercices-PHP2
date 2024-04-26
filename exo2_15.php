<h1>Exercice15</h1>
<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format.
<br></p>
<h2>Résultat</h2>

<?php

// Déclaration variable texte qui contient le mail
$email = "mickael.stephan@yahoo.fr";
$email = "contact@elan";
 
// On utilise FILTER_VALIDATE_EMAIL pour vérifier que l'adresse mail est valide
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("L'adresse mail $email est une adresse e-mail valide.");
} else {
    echo("L'adresse mail $email est une adresse e-mail invalide.");
}