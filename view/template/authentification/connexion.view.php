<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter - Citations </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="shortcut icon"
        href="https://st.depositphotos.com/1139310/4070/i/450/depositphotos_40709279-stock-photo-3d-illustration-of-chutting-icon.jpg"
        type="image/jpeg">
    
    <style>
        form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 320px;
            padding: 2rem;
            border: 1px solid gray;
            border-radius: 1rem;

        }
    </style>
</head>

<body>
    <?php if(isset($_SESSION['msg'])): ?>
        <div class="alert alert-<?= $_SESSION['msg']['code'] ?> text-center">
       <?= $_SESSION['msg']['text'] ?>
        </div>

    <?php unset($_SESSION['msg']); endif ?>
    <form action="index.php?controller=authentification" method="post">
        <div class="form-group">
            <label for="mail">Mail</label>
            <input type="email" class="form-control" id="mail"  name="mail">
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password"  name="password">
        </div>
        <button type="submit" class="submit btn btn-primary my-2">Se connecter</button>
    </form>

</body>

</html>