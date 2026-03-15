<?php
echo("helloworld");
$nom="ouislaiti";
$prenom="sabrine";

$formation=array("devweb","securite","devmobile");
foreach ($formation  as $formations ) {
    echo $formations ."|";

}

$formation=["devweb","securite","devmobile"];
for($i=0 ;$i<count($formation);$i++ ){
    echo $formation[$i] ."|";
}

$formation=array();
$foramtion=["devweb"];
$formation=["securite"];
$formation=["devmobile"];

while($i<count($formation)){
    echo $formation[$i] ."|";
    $i++;
}

$utilisateur = [
"nom" => "ouislaiti",
"prenom" => "sabrine",
"email" => "sabrine@email.com",
"formation" => "Développement Web"
];

echo "Nom : " . $utilisateur["nom"] . "\n";
echo "Prénom : " . $utilisateur["prenom"] . "\n";
echo "Email : " . $utilisateur["email"] . "\n";
echo "Formation : " . $utilisateur["formation"];

$formations = [
["nom" => "devweb", "duree" => "3 mois"],
["nom" => "securite", "duree" => "2 mois"],
["nom" => "devmobile", "duree" => "4 mois"]
];
foreach ($formations as $f) {
echo "Formation : " . $f["nom"] .
" - Durée : " . $f["duree"] . "\n";

}






$utilisateur = [
    "nom" => "ouislaiti",
    "prenom" => "sabrine",
    "email" => "sabrine@email.com",
    "formation" => "Développement Web",
    
];



$age = 20;

if (!is_numeric($age) || $age <= 0) {
    echo "Erreur : L'âge doit être un nombre supérieur à 0.";
} else {
    echo "Âge valide.";
}

?>










    
