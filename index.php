<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/Eve Online.ico" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Галерея</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.php">Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Условия</a>
                </li></ul>
            <?php if($_COOKIE['user'] == ''): ?>
                <button class="btn btn-outline-danger my-2 my-sm-0" data-toggle="modal" data-target="#myModal" type="submit">Login</button>
            <?php else: ?>
                <a class="btn btn-outline-primary my-2 my-sm-0" href="/validation-form/exit.php">Account</a>
            <?php endif; ?>
        </div>
    </nav>
</header>
<?php require "modal-regist/login.php" ?>
<main role="main" class="container">
    <div class="jumbotron">
        <div class="row">
            <?php for ($i = 0; $i < 10; $i++):?>
            <div class="col-lg-3 col-md-4 col-6 thumb">
                <a data-fancybox="gallery" href="img/1.jpg" data-caption="Caption #1">
                    <img class="img-fluid" src="img/1.jpg" alt="qwerty">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 thumb">
                <a data-fancybox="gallery" href="img/2.jpg">
                    <img class="img-fluid" src="img/2.jpg" alt="...">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 thumb">
                <a data-fancybox="gallery" href="img/3.jpg">
                    <img class="img-fluid" src="img/3.jpg" alt="...">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 thumb">
                <a data-fancybox="gallery" href="img/4.jpg">
                    <img class="img-fluid" src="img/4.jpg" alt="...">
                </a>
            </div>
            <?php endfor;?>
        </div>
    </div>
</main>
<?php require "blocks/footer.php"?>
</body>
</html>