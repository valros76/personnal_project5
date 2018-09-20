<?php
    $pageTitle = "Portfolio";
?>

<?php ob_start();

    echo '
        <article>
            <h2>Mon portfolio</h2>
            <hr/>
            <div class="portfolio_item1">
                <h3>Titre item portfolio 1</h3>
                <p>Contenu item portfolio 1</p>
                <img src="public/img/" alt="image_itemPortfolio1"/>
            </div>
        </article>
    ';

$content = ob_get_clean();?>

<?php require('templates/baseTemplate.php'); ?>