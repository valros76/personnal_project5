<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle; ?></title>
</head>
<body>
    <div class="pageContainer">
    <header class="head">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="?action=home"><?= $pageTitle; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?action=home">Acceuil <span class="sr-only">(current)</span></a>
                    </li>
                    <?php 
                        if(!isset($_SESSION['username'])){;
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?action=inscription">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?action=connexion">Connexion</a>
                        </li>
                    <?php 
                        }
                        else{;
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?action=portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?action=bonus">Bonus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?action=disconnect">Déconnexion</a>
                        </li>
                    <?php };?>
                </ul>
            </div>
        </nav>
    </header>

    <section class="content">
        <?= $content; ?>
    </section>

    <footer class="foot">
           
    </footer>
    </div>

    
        
    <script src="public/js/shifumi.js"></script>
</body>
</html>