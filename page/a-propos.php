<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Page d'acceuil</title>
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/competences.css" />
    <link rel="stylesheet" href="../styles/a-propos.css" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
</head>

<body>
    <?php include("../src/presets/header.php") ?>
    <div class="contenu-page">
        <article id="Profil personnel">
                <div class="text">
                    <h2>Profil personnel</h2>
                    <hr class="separator" style>
                    <p>Etudiant en BTS SIO dans le but de me spécialiser en Réseau puis CyberSécurité</p>
                </div>
                <div class="image"><i class="fa-solid fa-id-card"></i></div>
            </article>

            <article>
                <div class="text">
                    <h2 id="Etude">Etude</h2>
                    <hr class="separator" style>
                    <ul>
                        <li>Bac Pro Système Numérique - 2022</li>
                        <li>BTS SIO - En préparation</li>
                    </ul>
                </div>
                <div class="image"><i class="fa-solid fa-graduation-cap"></i></div>
            </article>

    </div>
    <?php include("../src/presets/footer.php") ?>
</body>

</html>