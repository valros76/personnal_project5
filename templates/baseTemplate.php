<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                        <a class="nav-link" href="?action=home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=portfolio">Portfolio</a>
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
        <!--
            <div class="paginationContainer">
            <ul class="pagination">
                <li class="page-item disabled">
                <a class="page-link" href="#">&laquo;</a>
                </li>
                <li class="page-item active">
                <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </footer>
    </div>
    -->
</body>
</html>