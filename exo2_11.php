<h1>Exercice11</h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.<br>
Exemple :<br>
formaterDateFr("1975-04-14");<br>
BUT : Afficher => lundi 14 avril 1975<br>
</p>
<h2>Résultat</h2>

<?php

// Appel de la focntion avec la date en paramètre
echo formaterDateFr("1975-04-14");

// Fonction qui renvoi la date formatée 
function formaterDateFr($date) 
{
    $dateTimeObj = new DateTime($date, new DateTimeZone('Europe/Paris'));
    return
        IntlDateFormatter::formatObject(
            $dateTimeObj,
            'eeee d MMMM y',
            'fr_FR'
        );
}