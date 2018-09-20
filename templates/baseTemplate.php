<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle; ?></title>
</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="?action=home">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="?action=articles">Articles <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=inscription">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=connexion">Connexion</a>
                    </li>
                </ul>
                <form action="?action=submitSearch" method="post" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Rechercher...">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </div>
        </nav>
    </header>

    <section>
        <?= $content; ?>
    </section>

    <footer>
            <div>
                <ul class="pagination pagination-sm">
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

</body>
</html>