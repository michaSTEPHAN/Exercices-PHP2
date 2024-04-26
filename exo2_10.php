<h1>Exercice10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).<br></p>
<h2>Résultat</h2>

<?php

// Création tableau de données
$nomsFormulaire = array("Nom","Prénom","Email","Ville");
$elementsCB     = array("Developpeur Logiciel","Designer Web","Intégrateur","Chef de projet");
$elementsLD     = array("Homme","Femme","Autre");

// // Création tableau associatif
// $elementsRD = [
//     "Femme"    => "false",
//     "Homme"    => "false",
//     "Autre"    => "false"
// ];

// Appel des fonctions
echo afficherinfos($nomsFormulaire,$elementsCB,$elementsLD);

function afficherinfos($nomsFormulaire,$elementsCB,$elementsLD) {
    $formulaire = "";   
    $formulaire .= "<form method='post' action='action.php'>"; 
    echo afficherFormulaire($nomsFormulaire,$formulaire);   // Formulaire NOM/...
    // echo afficherRadio($elementsRD,$formulaire);         // Bouton radio GENRE
    echo afficherListeDéroulante($elementsLD,$formulaire);  // Liste déroulante GENRE    
    echo afficherCheckbox($elementsCB,$formulaire);          // CheckBox METIER
    echo afficherbtnSubmit($formulaire);                    // Submit
    "/<form>";
}

// Fonction qui affiche le bouton SUBMIT
function afficherbtnSubmit($formulaire) {
    $formulaire .= "<input TYPE='submit' name='submit' />";
    return $formulaire;
}

// Fonction qui affiche les champs de saisis "Nom", "Prénom", "Email" et "Ville"
function afficherFormulaire($nomsFormulaire,$formulaire) {
    // On défini method + action    
    foreach ($nomsFormulaire as $champ) {
        $formulaire .= "
            <label>$champ</label><br>
            <input name='$champ' id='$champ' type='text'>
            <br>";        
    }
    return $formulaire."<br>";
}

// Fonction qui affiche les cases à cocher pour choisir le METIER.
function afficherCheckbox($elementsCB,$formulaire) {

    // On définit le titre de la LD
    $titre = "Selectionner le métier de votre choix :";

    // FORM ID = L  => On définit une LD
    // $formulaire .=  "<form action='index.php' method='post'>";

    // On affiche le titre de la LD
    $formulaire .= "<label>$titre</label><br>";

    // On boucle sur le tableau des pays pour charger les options
    foreach ($elementsCB as $pays) {        
        $formulaire .= "     
            <input type='checkbox' name=$pays value=$pays id=$pays />
            <label>$pays</label>
            <br>";   
    }
    return $formulaire."<br>";
}

// Fonction qui affiche une liste de choix le GENRE.
function afficherListeDéroulante($elementsLD,$formulaire) {
    // On définit le titre de la LD
    $titre = "Selectionner le genre :";

    // FORM ID = L  => On définit une LD
    // $formulaire =  "<form id='L' method='post'>";

    // On affiche le titre de la LD
    $formulaire .= "<label>$titre</label><br>";

    // Balise SELECT => Sélecteur
    $formulaire .= "<select>"; 

    // On boucle sur le tableau des genre pour charger les options
    foreach ($elementsLD as $genre) {        
        $formulaire .= "            
            <option>$genre</option><br>";        
    }
    return $formulaire."/<select>"."<br>"."<br>";
}