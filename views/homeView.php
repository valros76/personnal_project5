<?php
    $pageTitle = "Home"
?>

<?php ob_start();
    
    echo '
        <article>
            <h2>Titre du contenu 1</h2>
            <p>Contenu 1...</p>
        </article>
    ';

$content = ob_get_clean();?>
<?php require('templates/baseTemplate.php'); ?>