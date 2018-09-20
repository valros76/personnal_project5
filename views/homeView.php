<?php
    $pageTitle = "Home"
?>

<?php ob_start();
    
    echo '
        <article>
            <h2>Acceuil</h2>
            <p>
                Bienvenue sur la page d\'acceuil du site.<br/>
                Pour profiter de l\'ensemble des fonctionnalités du site, veuillez vous inscrire.    
            </p>
        </article>
    ';

$content = ob_get_clean();?>
<?php require('templates/baseTemplate.php'); ?>