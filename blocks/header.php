
<?php
    function startHeader($flag){
        if ($flag == 1)
        echo '<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
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
        <a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button></a>
    </div>
</nav>
        ';
        elseif ($flag == 2){
            echo '<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
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
        <a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button></a>
    </div>
</nav>
        ';
        }
        elseif ($flag == 3){
            echo '<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">EVE Contest</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Галерея</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacts.php">Контакты</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Условия</a>
            </li></ul>
        <a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button></a>
    </div>
</nav>
        ';
        }
        else{
            echo '<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">EVE Contest</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Галерея</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacts.php">Контакты</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Условия</a>
            </li></ul>
        <a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button></a>
    </div>
</nav>
        ';
        }
    }


