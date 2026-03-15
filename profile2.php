<?php
$nom = "Ouislaiti";
$prenom = "Sabrine";
$email = "sabrine.ouislaiti@email.com";
$age = 20;
$ville= "ariana,mnihla" ;
$formation = "php and js";
echo "<p>Bienvenue $prenom dans la formation $formation</p>"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Profil utilisateur</title>
</head>
<body>
<h1>Profil utilisateur</h1>
<p><strong>Nom :</strong> <?php echo $nom; ?></p>
<p><strong>Prénom :</strong> <?php echo $prenom; ?></p>
<p><strong>Email :</strong> <?php echo $email; ?></p>
<p><strong>Âge :</strong> <?php echo $age; ?> ans</p>
</body>
</html>