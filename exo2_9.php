<h1>Exercice9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ex :("Monsieur","Madame","Mademoiselle").<br></p>
<h2>Résultat</h2>

<?php

// Création tableau associatif
$elementsRD = [
    "Hollande" => "false",
    "Slovénie" => "false",
    "Chine"    => "true"
];

// Appel de la fonction
echo afficherRadio($elementsRD);

function afficherRadio($elementsRD) {

    // On définit le titre de la LD
    $titre = "Selectionner le pays de votre choix :";

    $radio = "<form action='index.php' method='post'>";

    // On affiche le titre de la LD
    $radio .= "<label>$titre</label><br>";

    // On boucle sur le tableau des pays pour charger les options et cocher
    foreach ($elementsRD as $pays => $TF) {
        // echo "$TF<br>";
        // TRUE  => on coche        => checked
        // FALSE => on ne coche pas => unchecked
        if ($TF == "true") {
            $checkedUnchecked = "checked";
        } else {
            $checkedUnchecked = "unchecked";       
        }
        
        // echo "$checkedUnchecked<br>";
        $radio .= "     
            <input type='radio' name=$pays value=$pays id=$pays $checkedUnchecked/>
            <label>$pays</label>
            <br>";   
    }
    return $radio;
    "/<form>";
}