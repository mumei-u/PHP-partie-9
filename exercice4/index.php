<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../style.css">
        <title>PHP | Partie 9</title>
    </head>
    <body>
        <div class="container text-center bg-secondary">
            <h1 class="text-light">PHP | P9-ex4</h1>
            <nav>
                <a class="link" href="http://php-partie8/exercice1/">Partie8</a>
                <a class="link" href="http://php-partie9/exercice1/">ex1</a>
                <a class="link" href="http://php-partie9/exercice2/">ex2</a>
                <a class="link" href="http://php-partie9/exercice3/">ex3</a>
                <a class="link" href="http://php-partie9/exercice4/">ex4</a>
                <a class="link" href="http://php-partie9/exercice5/">ex5</a>
                <a class="link" href="http://php-partie9/exercice6/">ex6</a>
                <a class="link" href="http://php-partie9/exercice7/">ex7</a>
                <a class="link" href="http://php-partie9/exercice8/">ex8</a>
                <a class="link" href="http://php-partie9/TP/">TP</a>
                <a class="link" href="http://php-partie10/TP1/">Partie10</a>
            </nav>
        </div>
        <div class="container text-center">
            <p> Afficher le timestamp du jour et celui du  2 août 2016 à 15h</p>
            <p>Le timestamps du jour est : <?= time() ?></p>
            <?php $time2 = mktime(15, 0, 0, 8, 2, 2016); ?>
            <p>Et celui du 2 août 2016 à 15h est : <?= $time2 ?></p>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
