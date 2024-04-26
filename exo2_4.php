<h1>Exercice4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/<br></p>
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
        <th>Pays</th>
        <th>Capitales</th>
        <th>Lien wiki</th>
        </tr>
        </thead>
        ";
    
    // Création des ligne du tableau    
    //   - TR    = ligne de tableau
    //   - TD    = données de la de tableau
    foreach ($capitales as $pays => $ville) {
        $lien_ville = "https://fr.wikipedia.org/wiki/".$ville;
        echo $lien_ville."<br>";
        
        $ligne.= "
            <tr>
            <td>" . mb_strtoupper($pays) . "</td>
            <td>$ville</td>
            <td><a href='$lien_ville' target='_blank'>wiki</a></td>'
            </tr>";
    }
    $ligne .= "</table>";
    return $ligne;
}
