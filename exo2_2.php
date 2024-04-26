<h1>Exercice2</h1>
<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée..<br>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales) ;
<br></p>
<h2>Résultat</h2>

<?php

$capitales = ["France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome"];
//tri ascendant par rapport à la valeur (ksort = rapport à la clef)
ksort($capitales); 

// Appel de la fonction
echo afficherTableHTML($capitales);

function afficherTableHTML($capitales)
{
    // Création de la ligne d'entête
    //   - THEAD = Ligne entête de colonne
    //   - TR    = ligne de tableau
    //   - TH    = données de la de tableau     
    $ligne="
        <table border=1>        
        <thead>
        <tr>
        <tr bgcolor = green>
        <th>Pays</td>
        <th>Capitales</td>
        </tr>
        </thead>
        ";

    // Création des ligne du tableau    
    //   - TR    = ligne de tableau
    //   - TD    = données de la de tableau    
    foreach ($capitales as $pays => $ville) {
        $ligne.= "
            <tr>
            <td>" . mb_strtoupper($pays) . "</td>
            <td>$ville</td>
            </tr>";
    }
    $ligne .= "</table>";
    return $ligne;
}
