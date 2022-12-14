<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Page d'accueil</title>
    <link rel="icon" type="image/x-icon" href="../src/images/favicon.jpg">
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
                        <li>Mooc de l'ANSSI<a href="../src/downloads/Attestation-MOOC_Fichot-Benjamin.pdf" class="button download"><i class="fa fa-download"></i> Télécharger</a></li>
                        <li>Mooc de la CNIL<a href="../src/downloads/Certificat_CNIL_Fichot_Benjamin.zip" class="button download"><i class="fa fa-download"></i> Télécharger</a></li>
                        <li>PIX                      <a href="../src/downloads/pix.pdf" class="button download"><i class="fa fa-download"></i> Télécharger</a></li>
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
                        <li>
                            Serveur Debian avec:
                            <ul>
                                <ol>DHCP</ol>
                                <ol>DNS(PiHole)</ol>
                                <ol>Web(Apache/Nginx)</ol>
                                <ol>VPN(OpenVPN)</ol>
                            </ul>
                        </li>
                        <li>Ce site web</li>
                        <li>Montage PC de A à Z</li>
                    </ul>

                    <br>

                    <h3>Futur projet</h3>
                    <ul>
                        <li>
                            Veille technologique avec flux RSS
                            <ul>
                                <ol>Faire un serveur sur ma Debian qui récupérera des flux RSS de plusieurs site que je suis<br>
                                et pouvoir les consulter sur un client compatible Android.</ol>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="image"><i class="fa-solid fa-lightbulb"></i></div>
            </article>

            <article>
                <div class="text">
                    <h2 id="Projet informatique">Experience professionnel</h2>
                    <hr class="separator" style>
                    <h3>En entreprise:</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/dmiservices.dijon/" target="_blank">DMi services</a> - Dijon</li>
                        <ul>
                            <ol>Stages de 4 et 2 semaines</ol>
                        </ul>
                        <li><a href="https://admx.fr/" target="_blank">Afodis-Admx</a> - Besançon</li>
                        <ul>
                            <ol>Stage de 3 semaines</ol>
                        </ul>
                    </ul>
                </div>
                <div class="image"><i class="fa-solid fa-flask"></i></div>
            </article>
        </div>
    </div>
    <!--a class="top">Retour en haut de page</a-->
    <?php include("../src/presets/footer.php") ?>
</body>

</html>