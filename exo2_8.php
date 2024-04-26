<h1>Exercice8</h1>
<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran..<br></p>
<h2>Résultat</h2>

<?php

// Déclaration de la variable qui contient l'URL de l'image à afficher
$url = "http://my.mobirise.com/data/userpic/764.jpg";

// Appel de la fonction
echo repeterImage($url,12);

// TEST pour afficher une image
// echo "<img src='$url'>";

// Fonction qui va répeter l'image
 function repeterImage($url,$nbre) {

    // On initialise à ""    
    $repreteImage = "";

    // Boucle "POUR" pour concaténer les images n fois
    for ($i = 0; $i < $nbre; $i++) {
        $repreteImage .= "<img src='$url'>";
    }    
     return $repreteImage;
 }