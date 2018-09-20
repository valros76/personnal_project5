<?php
    $pageTitle = "Inscription";
?>

<?php ob_start();
    echo '
        <article>
            <h2>Formulaire d\'inscription</h2>
            <p>
                <form action="?action=new_inscription" method="post">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Type username here..." name="username"/>
                    <br/>
                    <label for="password">Password</label>
                    <input type="password" name="password"/>
                    <br/>
                    <label for="confirmPassword">Confirm password</label>
                    <input type="password" name="confirmPassword"/>
                    <br/>
                    <label for="mail">Email</label>
                    <input type="email" name="mail"/>
                    <br/>
                    <button class="btn btn-success">S\'inscrire</button>
                </form>
            </p>
        </article>
    ';
$content = ob_get_clean(); ?>

<?php require('templates/baseTemplate.php');