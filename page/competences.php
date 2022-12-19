<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/competences.css" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
</head>

<body>
    <?php include("../src/presets/header.php") ?>

    <div class="contenu-page">
        <div class="portfolio">

            <article>
                <div class="text">
                    <h2 id="Certification">Certification</h2>
                    <hr class="separator" style>
                    <ul>
                        <li>Mooc de l'ANSSI</li>
                        <li>Mooc de la CNIL</li>
                        <li>PIX</li>
                    </ul>
                </div>
                <div class="image"><i class="fa-solid fa-certificate"></i></div>
            </article>

            <article>
                <div class="text">
                    <h2 id="Projet informatique">Projet informatique</h2>
                    <hr class="separator" style>
                    <h3>Projet personnel</h3>
                    <ul>
                        <li>Serveur Debian avec:</li>
                        <ul>
                            <ol>DHCP</ol>
                            <ol>DNS(PiHole)</ol>
                            <ol>Web(Apache/Nginx)</ol>
                            <ol>VPN(OpenVPN)</ol>
                        </ul>
                        <li>Ce site web</li>
                        <li>Montage PC de A à Z</li>
                    </ul>
                </div>
                <div class="image"><i class="fa-solid fa-lightbulb"></i></div>
            </article>
        </div>
    </div>
    <!--a class="top">Retour en haut de page</a-->
    <?php include("../src/presets/footer.php") ?>
</body>

</html>