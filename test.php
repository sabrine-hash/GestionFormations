<?php
$nom = "Ouislaiti";
$prenom = "Sabrine";
$email= "sabrine.ouislaïti@email.com";  
$age= 20;
$formation= "php and js";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e4f0f7;
            color: #333;
            min-height: 100vh;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
            max-width: 620px;
            width: 100%;
        }

        /* Bienvenue avec dégradé violet → bleu */
        .welcome {
            margin-bottom: 50px;
        }

        .welcome h1 {
            font-size: 3.2rem;
            font-weight: 700;
            background: linear-gradient(90deg, #d76fd0 0%, #d76fd0 48%, #113797 52%, #113797 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1.1;
        }

        .welcome .subtitle {
            font-size: 1.35rem;
            color: #385a93;
            font-weight: 500;
            margin-top: 12px;
        }

        /* Titre profil */
        h2 {
            color: #385a93;
            font-size: 2.4rem;
            font-weight: 600;
            margin: 0 0 40px 0;
        }

        /* Carte globale */
        .profile-card {
            background: #385a93;
            border-radius: 24px;
            padding: 45px 35px;
            box-shadow: 0 12px 40px rgba(56, 90, 147, 0.14);
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
            font-size: 1.15rem;
        }

        .info-item:last-child {
            margin-bottom: 0;
        }

        .label {
            color: #e4f0f7;
            font-weight: 600;
            min-width: 140px;
            text-align: left;
        }

        .value-box {
            background: #f8fcff;
            border: 1px solid #d0e3f0;
            border-radius: 12px;
            padding: 12px 20px;
            color: #333;
            font-weight: 400;
            flex: 1;
            text-align: left;
            margin-left: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .value-box.email {
            word-break: break-all;
            color: #385a93;
        }

        /* Responsive */
        @media (max-width: 580px) {
            .welcome h1 { font-size: 2.6rem; }
            .profile-card { padding: 35px 25px; }
            .info-item { flex-direction: column; align-items: flex-start; gap: 10px; }
            .label { min-width: auto; }
            .value-box { margin-left: 0; width: 100%; }
        }
    </style>
</head>
<body>

    <div class="container">

        <div class="welcome">
            <h1>Bienvenue <?php echo htmlspecialchars($prenom); ?> !</h1>
            <div class="subtitle">dans la formation <?php echo htmlspecialchars($formation); ?></div>
        </div>

        <h2>Profil utilisateur</h2>

        <div class="profile-card">
            <div class="info-item">
                <span class="label">Nom :</span>
                <span class="value-box"><?php echo htmlspecialchars($nom); ?></span>
            </div>
            <div class="info-item">
                <span class="label">Prénom :</span>
                <span class="value-box"><?php echo htmlspecialchars($prenom); ?></span>
            </div>
            <div class="info-item">
                <span class="label">Email :</span>
                <span class="value-box email"><?php echo htmlspecialchars($email); ?></span>
            </div>
            <div class="info-item">
                <span class="label">Âge :</span>
                <span class="value-box"><?php echo $age; ?> ans</span>
            </div>
        </div>

    </div>

</body>
</html>