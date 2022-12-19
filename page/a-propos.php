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
                    <ol>
                        <li><h3>Qui sui-je ?</h3>
                            <ul class="no_list-styles">
                                <li>
                                    J'ai 18 ans, je suis originaire de Franche-Comté, passionné par l'informatique en générale, j'eb souhaite faire mon métier d'avenir.<br>
                                    Dans l'informatique, je me situe plus vers le réseau que vers le développement, j'amerais me spécialiser en CyberSécurité et Administrateur Réseau.
                                </li>
                            </ul>
                        </li>

                        <br><br>

                        <li><h3>Veille technologique:</h3>
                            <ul>
                                <li>IT connect</li>
                            </ul>
                        </li>
                    </ol>
                </div>
                <div class="image"><i class="fa-solid fa-id-card"></i></div>
            </article>

            <article>
                <div class="text">
                    <h2 id="Etude">Etude</h2>
                    <hr class="separator" style>
                    <ul>
                        <li>Diplôme National du Brevet - 2019 - mention Bien</li>
                        <li>Bac Pro Système Numérique - 2022 - mention Très Bien</li>
                        <li>BTS SIO - En préparation</li>
                    </ul>
                </div>
                <div class="image"><i class="fa-solid fa-graduation-cap"></i></div>
            </article>

    </div>
    <?php include("../src/presets/footer.php") ?>
</body>

</html>