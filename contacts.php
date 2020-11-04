<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/Eve Online.ico" type="image/x-icon">
    <title>EVE-Contest</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">EVE Contest</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Галерея</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contacts.php">Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Условия</a>
                </li></ul>
            <button class="btn btn-outline-danger my-2 my-sm-0" data-toggle="modal" data-target="#myModal" type="submit">Login</button>
        </div>
    </nav>
</header>
<?php require "modal-regist/login.php" ?>
<main role="main" class="container">
    <div class="jumbotron">
        <h1>Navbar example</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>

        <a class="btn btn-lg btn-primary" href="/docs/4.5/components/navbar/" role="button">View navbar docs »</a>
    </div>
</main>
<?php require "blocks/footer.php"?>
</body>
</html>