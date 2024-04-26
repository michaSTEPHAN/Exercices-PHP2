<h1>Exercice12</h1>
<p>Soit le tableau suivant :<br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.<br>
</p>
<h2>Résultat</h2>

<?php

// Déclaration du tableau
$tableauValeurs = [true, "texte", 10, 25.369, array("valeur1", "valeur2")];
afficheValeurs($tableauValeurs);

function afficheValeurs($tableau)
{
    foreach ($tableau as $valeur) {
        switch (gettype($valeur)) {
            case "boolean":
                // $valeur = $valeur ? "true" : "false";

                if ($valeur = true) {
                    $TF = "true";
                } else {   
                    $TF = "true";    
                }
                echo "bool(" . $TF . ")<br>";
                break;
            case "string":
                $LG = strlen($valeur);
                echo "string(" . $LG . ")"." "."\"$valeur\""." "."<br>";       
                break;
            case "integer":
                echo "int(" . $valeur . ")<br>";
                break;
            case "double":
                echo "float(" . $valeur . ")<br>";
                break;
            case "array":       
                $count = count($valeur);
                $chaine = "";
                $chaine .="array[".$count."] ";
                for ($i = 0; $i < $count; $i++) {
                    $chaine .= "[$i]=> ";
                    $LG = strlen($valeur[$i]);
                    $chaine .=  "string(" . $LG . ")"." "."\"$valeur[$i]\""." ";
                }
                echo $chaine;
                break;
        }
    }
}