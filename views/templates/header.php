<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600,400,700&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=zodiak@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <script defer src="../public/js/script.js"></script>
    <title><?= $title ?></title>
</head>

<body>
    <!-- En tête -->
    <header>
        <!-- Menu navigation -->
        <nav class="navbar navbar-expand-lg navbar-light p-4 mb-4 ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../public/assets/img/logo/logoBlack.png" alt="Logo" class="logo d-inline-block align-text-center">
                </a>
                <!-- NavBar -->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Acceuil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Entreprises</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Argent</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Economie Française</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Immobilier</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Emploi</a></li>
                    </ul>
                </div>
                <!-- Bouton Modal -->
                <div class="btnContainer">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="../public/assets/img/icon/param.png" alt="Paramètre" class="modalImg">
                    </button>
                    <button class="navbar-toggler btnMenuBurger btn navbar-dark bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>