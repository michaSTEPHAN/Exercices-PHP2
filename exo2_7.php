<h1>Exercice7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.<br></p>
<h2>Résultat</h2>

<?php

// Création tableau de données
// $elementsCB = array("Hollande","Slovénie","Chine");
$elementsCB = [
    "Hollande" => "false",
    "Slovénie" => "true",
    "Chine"    => "false"
];

// Appel de la fonction
echo genererCheckbox($elementsCB);

function genererCheckbox($elementsCB) {

    // On définit le titre de la LD
    $titre = "Selectionner le pays de votre choix :";

    // FORM ID = L  => On définit une LD
    $comboBox =  "<form action='index.php' method='post'>";

    // On affiche le titre de la LD
    $comboBox .= "<label>$titre</label><br>";

    // Balise SELECT => Sélecteur
    //$CB .= "<select>"; 

    // On boucle sur le tableau des pays pour charger les options
    foreach ($elementsCB as $pays => $TF) {      
        // echo "$TF<br>";
        // TRUE  => on coche        => checked
        // FALSE => on ne coche pas => unchecked
        if ($TF == "true") {
            $checkedUnchecked = "checked";
        } else {
            $checkedUnchecked = "unchecked";       
        }  
        $comboBox .= "     
            <input type='checkbox' name=$pays value=$pays id=$pays $checkedUnchecked />
            <label>$pays</label>
            <br>";   
    }
    return $comboBox;
    "/<form>";
}