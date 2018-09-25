<?php
    $pageTitle = "Bonus";
?>

<?php ob_start();

    echo '
        <article class="portfolioContainer">
            <h2>Section Bonus</h2>
            <hr/>
            
            <div class="portfolio_item">
                <h3>Mini-jeu : Shifumi</h3>
                <p>
                    Projet personnel : développer un mini-jeu de Shifumi (Pierre, Feuille, Ciseaux).<br/>
                    <code>Langages : HTML / CSS / JS</code><br/>
                    <code>CMS : Non</code><br/>
                    <a href="?action=shifumi">Jouer au Shifumi</a>
                </p>
                <img src="public/img/shifumi01.png" alt="image_itemPortfolio1"/>
            </div>
    ';

$content = ob_get_clean();?>

<?php ob_start();

$scripts = ob_get_clean(); ?>

<?php require('templates/baseTemplate.php'); ?>