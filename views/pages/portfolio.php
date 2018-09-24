<?php
    $pageTitle = "Portfolio";
?>

<?php ob_start();

    echo '
        <article class="portfolioContainer">
            <h2>Mon portfolio</h2>
            <hr/>
            
            <div class="portfolio_item">
                <h3>Projet 1 - Webagency</h3>
                <p>
                    Webagency a été mon premier projet from scratch à présenter pendant une soutenance.<br/>
                    <code>Langages : HTML / CSS</code><br/>
                    <code>CMS : Non</code><br/>
                    <code>Note : <span id="rateP1"></span>/5</code><br/>
                    <a href="https://valerian-dufrene.000webhostapp.com/" target="_blank">Visiter Webagency<br/><i class="fas fa-arrow-right"></i></a><br/>
                    <div class="rating"><!--
                            --><a href="#1" onclick="getNoteP1(5)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#2" onclick="getNoteP1(4)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#3" onclick="getNoteP1(3)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#4" onclick="getNoteP1(2)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#5" onclick="getNoteP1(1)"><i class="far fa-star" aria-hidden="true"></i></a><!---->
                    </div>
                </p>
                <img src="public/img/projet1_mini.png" alt="image_itemPortfolio1"/>
            </div>

            <hr/>

            <div class="portfolio_item">
                <h3>Projet 2 - OpenStrasbourg</h3>
                <p>
                    OpenStrasbourg a été mon premier projet sous CMS.<br/>
                    <code>Langages : HTML / CSS</code><br/>
                    <code>CMS : Wordpress</code><br/>
                    <code>Note : <span id="rateP2"></span>/5</code><br/>
                    <a href="http://dev-openstrasbourg.pantheonsite.io/" target="_blank">Visiter OpenStrasbourg<br/><i class="fas fa-arrow-right"></i></a><br/>
                    <div class="rating"><!--
                            --><a href="#1" onclick="getNoteP2(5)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#2" onclick="getNoteP2(4)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#3" onclick="getNoteP2(3)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#4" onclick="getNoteP2(2)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#5" onclick="getNoteP2(1)"><i class="far fa-star" aria-hidden="true"></i></a><!---->
                    </div>
                </p>
                <img src="public/img/projet2_mini.png" alt="image_itemPortfolio2"/>
            </div>
        </article>

        <hr/>

            <div class="portfolio_item">
                <h3>Projet 3 - Vélo\'V Lyon</h3>
                <p>
                    Vélo\'V Lyon a été mon premier projet contenant du javascript.<br/>
                    <code>Langages : HTML / CSS / Javascript</code><br/>
                    <code>CMS : Non</code><br/>
                    <code>Note : <span id="rateP3"></span>/5</code><br/>
                    <a href="https://velo-v-valros.000webhostapp.com/" target="_blank">Visiter Vélo\'V Lyon<br/><i class="fas fa-arrow-right"></i></a><br/>
                    <div class="rating"><!--
                            --><a href="#1" onclick="getNoteP3(5)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#2" onclick="getNoteP3(4)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#3" onclick="getNoteP3(3)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#4" onclick="getNoteP3(2)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#5" onclick="getNoteP3(1)"><i class="far fa-star" aria-hidden="true"></i></a><!---->
                    </div>
                </p>
                <img src="public/img/projet3_mini.png" alt="image_itemPortfolio3"/>
            </div>

            <hr/>

            <div class="portfolio_item">
                <h3>Projet 4 - Blog "Billet simple pour l\'Alaska"</h3>
                <p>
                    "Billet simple pour l\'Alaska" a été mon premier projet contenant du PHP.<br/>
                    <code>Langages : HTML / CSS / PHP</code><br/>
                    <code>CMS : Non</code><br/>
                    <code>Note : <span id="rateP4"></span>/5</code><br/>
                    <a href="https://projet4-valros.000webhostapp.com/" target="_blank">Visiter "Billet simple pour l\'Alaska"<br/><i class="fas fa-arrow-right"></i></a><br/>
                    <div class="rating"><!--
                            --><a href="#1" onclick="getNoteP4(5)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#2" onclick="getNoteP4(4)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#3" onclick="getNoteP4(3)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#4" onclick="getNoteP4(2)"><i class="far fa-star" aria-hidden="true"></i></a><!--
                            --><a href="#5" onclick="getNoteP4(1)"><i class="far fa-star" aria-hidden="true"></i></a><!---->
                    </div>
                </p>
                <img src="public/img/projet4_mini.png" alt="image_itemPortfolio4"/>
            </div>
        </article>
    ';

$content = ob_get_clean();?>

<?php require('templates/baseTemplate.php'); ?>