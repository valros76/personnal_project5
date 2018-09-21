<?php
    $pageTitle = "Give Contact";
?>

<?php ob_start();
    echo '
        <article>
            <h2>Formulaire de contact</h2>
            <p>
                <form action="?action=portfolio" method="post">
                    <label for="monMail">Mon adresse mail</label>
                    <input type="text" class="form-control" value="valerian.dufrene@gmail.com" Disabled/>
                    <br/>
                    <button class="btn btn-success">Retour au portfolio</button>
                </form>
            </p>
        </article>
    ';
$content = ob_get_clean(); ?>

<?php require('templates/baseTemplate.php');