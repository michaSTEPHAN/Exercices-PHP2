<h1>Exercice1</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
<br></p>
<h2>Résultat</h2>

<style>p {color: red;}</style>  

<?php

// Déclaration variable texte
$texte = "Allez les bleus";

// Appel de la fonction
echo convertirMajRouge($texte);

// Fonction qui convertit le texte en majuscule et le met en rouge
function convertirMajRouge($texte)
{
    return "<p>" . mb_strtoupper($texte) . "</p>";
}