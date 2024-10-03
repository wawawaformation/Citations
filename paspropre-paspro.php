<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auteurs | Citations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Citations</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Citations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" aria-current="page">Auteurs</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <h1 class="title my-3">Les auteurs</h1>
        <section>
        <a href="#" class="btn btn-primary mb-5"><i class="bi bi-plus-circle-fill"></i> Ajouter un auteur</a>
            <div class="row">
                <?php
                $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=citations', 'root', '');
                $requete = $pdo->query('SELECT * FROM auteurs');
                while ($auteur = $requete->fetch()) {
                ?>

                    <div class="card col-4">
                        <img src="<?php echo $auteur['image_src'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $auteur['auteur']; ?></h3>
                            <p class="card-text"><?php echo substr($auteur['bio'],0, 120) ; ?> ...etc</p>
                            <a href="#" class="card-link"><i class="bi bi-eye-fill"></i> Read more</a>
                            <a href="#" class="card-link"><i class="bi bi-pencil-fill"></i> Edit</a>
                            <a href="#" class="card-link"><i class="bi bi-trash2-fill"></i> Delete</a>

                        </div>
                    </div>


                <?php
                }
                ?>
              
            </div>
        </section>

    </main>



</body>

</html>