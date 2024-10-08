<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>">
    <title><?= $title ?> | Citations</title>
    <link rel="shortcut icon"
        href="favicon.png"
        type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="js/tinymce/tinymce.min.js"
        referrerpolicy="origin"></script>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header id="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?controller=quotes">Citations</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($controller == 'quotes')
                                echo 'active' ?>" href="index.php?controller=quotes">Citations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($controller == 'authors')
                                echo 'active' ?>" href="index.php?controller=authors">Auteurs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($controller == 'users')
                                echo 'active' ?>" href="index.php?controller=users">Utilisateurs</a>
                            </li>
                        </ul>
                        <ul class="d-flex gap-3 list-unstyled my-auto">
                            <li class="nav-item">
                                Bonjour <?= htmlspecialchars(ucfirst(strtolower($_SESSION['profile']['firstname']))) ?>
                            <?= htmlspecialchars(strtoupper($_SESSION['profile']['lastname'])) ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controller=profile"><i
                                    class="bi bi-person-fill"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controller=authentification&action=deconnexion"><i
                                    class="bi bi-power"></i></a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
        <?php if (isset($_SESSION['msg'])): ?>
            <div class="alert alert-<?= $_SESSION['msg']['code'] ?>"> <!--Mettre le htmlspecialchars ici ?-->
                <?= htmlspecialchars($_SESSION['msg']['text']) ?>
            </div>
            <?php unset($_SESSION['msg']);
        endif ?>

    </header>
    <main id="main" class="container my-5">

        <h2 class="subtitle my-3"><?= $title ?></h2>


        <div class="content">
            <?php // htmlspecialchars($content) What The FUCK!! You are MAD ! ?>
            <?= $content ?>
        </div>

    </main>
    <footer id="footer">

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="js/tinymce.js"></script>
</body>

</html>