<?php
function estActif(string $needle): string
{
    $retour = "";
    if (str_contains($_SERVER['REQUEST_URI'], $needle)) {
        $retour = 'class="active"';
    }
    return $retour;
}
?>

<header>
    <div class="all_button">
        <a <?= estActif("index.php"); ?> href="/portfolio/index.php">Accueil</a>
        <a <?= estActif("competences.php"); ?> href="/portfolio/page/competences.php">Compétences</a>
        <a <?= estActif("cv.php"); ?> href="/portfolio/page/cv.php">CV</a>
        <a <?= estActif("contact.php"); ?> href="/portfolio/page/contact.php">Contact</a>
        <a <?= estActif("a-propos.php"); ?> href="/portfolio/page/a-propos.php">A propos</a>
    </div>
</header>