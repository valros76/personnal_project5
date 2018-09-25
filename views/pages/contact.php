<?php
    $pageTitle = "Contact";
?>

<?php ob_start();
    echo '
        <article>
            <h2>Formulaire de contact</h2>
            <p>
                <form action="?action=contact_me" method="post">
                    <button class="btn btn-success">Obtenir email</button>
                </form>
            </p>
        </article>
    ';
$content = ob_get_clean(); ?>

<?php ob_start();

$scripts = ob_get_clean(); ?>

<?php require('templates/baseTemplate.php');