<?php
    $pageTitle = "Connexion";
?>

<?php ob_start();
    echo '
        <article>
            <h2>Formulaire de connexion</h2>
            <p>
                <form action="?action=connect" method="post">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username"/>
                    <br/>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password"/>
                    <br/>
                    <button class="btn btn-success">Se connecter</button>
                </form>
            </p>
        </article>
    ';
$content = ob_get_clean();?>

<?php ob_start();

$scripts = ob_get_clean(); ?>

<?php require('templates/baseTemplate.php'); ?>