<?php
    $pageTitle = "Shifumi";
?>

<?php ob_start();
    echo '
        <article>
            <h3>Shifumi</h3>
            <div class="textArticleHome">
                <button class="btn btn-info game">Pierre</button>
                <button class="btn btn-success game">Feuille</button>
                <button class="btn btn-warning game">Ciseaux</button>
                <hr/>
                <div id="resultatJoueur" style="display:inline-block;">Joueur : X</div>
                <hr width="50px"/>
                <div>
                    VS
                </div>
                <hr width="50px"/>
                <div id="resultatRobot" style="display:inline-block;">
                    Robot : X
                </div>
                <br/>
                <br/>
                <hr/>
                <div class="resultat">
                </div>
                <hr/>
            </div>
        </article>
    ';
$content = ob_get_clean();?>

<?php require('templates/shifumiTemplate.php'); ?>