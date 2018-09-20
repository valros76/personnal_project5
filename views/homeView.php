<?php
    $pageTitle = "Home"
?>

<?php ob_start();
    
    echo '
        <article class="homeContainer">
            <h2>Accueil</h2>
            <hr/>
            <p>
                Bienvenue sur la page d\'accueil du site.<br/><br/>
                Vous êtes ici pour consulter mon portfolio ?<br/><br/>
                <a href="?action=portfolio"><button class="btn btn-info">Consulter</button></a><br/>
                <hr/>
                <img src="public/img/nomad.png" alt="img_Accueil"/>
            </p>
        </article>
    ';

$content = ob_get_clean();?>
<?php require('templates/baseTemplate.php'); ?>