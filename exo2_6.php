<h1>Exercice6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.<br></p>
<h2>Résultat</h2>

<?php

// Création tableau de données
$elementsLD = array("Monsieur","Madame","Mademoiselle");

// Appel de la fonction
echo alimenterListeDeroulante($elementsLD);

function alimenterListeDeroulante($elementsLD) {
    // On définit le titre de la LD
    $titre = "Selectionner la civilité";

    // FORM ID = L  => On définit une LD
    $listeDéroulante =  "<form id='L' method='post'>";

    // On affiche le titre de la LD
    $listeDéroulante .= "<label>$titre</label><br>";

    // Balise SELECT => Sélecteur
    $listeDéroulante .= "<select>"; 

    // On boucle sur le tableau des civilités pour charger les options
    foreach ($elementsLD as $civilité) {        
        $listeDéroulante .= "            
            <option>$civilité</option><br>";        
    }
    return $listeDéroulante."/<select>";
    "/<form>";
}