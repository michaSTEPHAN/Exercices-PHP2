<h1>Exercice5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.<br></p>
<h2>Résultat</h2>

<?php

// Création tableau de données
$nomsFormulaire = array("Nom","Prénom","Ville");

// Appel de la fonction
echo afficherFormulaire($nomsFormulaire);


function afficherFormulaire($nomsFormulaire) {
    // On défini method + action
    $formulaire = "<form method='post' action='action.php'>";
    foreach ($nomsFormulaire as $champ) {
        $formulaire .= "
            <label>$champ</label><br>
            <input name='$champ' id='$champ' type='text'>
            <br>";        
    }
    return $formulaire;
}