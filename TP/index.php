<?php
//recupération du mois courant $selectedMonth = date('m');
$selectedMonth = !empty($_POST['month']) ? $_POST['month'] : date('m');
// !empty et l'inverse de empty vide en francais
$selectedYear = !empty($_POST['year']) ? $_POST['year'] : date('Y');
$daysInMonth = date('t', mktime(0, 0, 0, $selectedMonth, 1, $selectedYear));
// recupére le 1er jour du mois pour l'année courante
$firstDayOfMonthInWeek = date('N', mktime(0, 0, 0, $selectedMonth, 1, $selectedYear));
// tableau pour sauvegarder le nom des jours 
$weekDays = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
// tableau pour sauvegarder le nom des mois
$yearMonths = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
?>
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
            <h1 class="text-light">PHP | P9-TP</h1>
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
            </nav>
        </div>
        <div class="container text-center">
            <h1>Année 2020</h1>
            <form class="form-inline" method="post">
                <div class="form-group">
                <!-- tout ce qui est dans le select month permet de choisir le mois désirer -->
                <select class="form-control" name="month">
                    <!--renvoi au tableau $yearMonth avec leur numéro correspondant -->
                    <?php foreach ($yearMonths as $monthsNumber => $yearMonth): ?>
                        <option value="<?= $monthsNumber + 1 ?>" <?= ($selectedMonth == $monthsNumber + 1) ? 'selected' : '' ?> ><?= $yearMonth ?></option>
                    <?php endforeach; ?>
                </select>
                <!-- tout ce qui est dans le select year permet de choisir l'année désirer -->              
                <select class="form-control" name="year">
                    <!--on peut choisir de l'année 1900 jusqu'a 2100 maximum-->
                    <?php for ($year = 1900; $year <= 2100; $year++): ?>
                        <option value="<?= $year ?>" <?= ($selectedYear == $year) ? 'selected' : '' ?> ><?= $year ?></option>
                    <?php endfor; ?> <!-- endfor marque la fin du for -->
                </select>
                <input class="btn btn-dark form-control" type="submit" >
                </div>
            </form>
            <table class="table table-bordered">
                <thead>
                    <!--pour chaque weekdays comme weekday-->
                    <tr>                      
                        <?php foreach ($weekDays as $weekDay): ?>
                            <!-- affiche le jour de la semaine dans la 1er ligne -->
                            <th class="bg-secondary"><?php echo $weekDay; ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $loop = TRUE;
                        $cell = 1;
                        $day = 1;
                        $requiredCells = $daysInMonth + $firstDayOfMonthInWeek - 1;
                        while ($loop) {
                            if ($firstDayOfMonthInWeek > $cell || $cell > $requiredCells) {
                                ?>
                                <td class="bg-dark"></td>
                                <?php
                            } else {
                                ?>
                                <td class="bg-light"><?= $day ?></td>
                                <?php
                                $day++;
                            }
                            if ($cell % 7 == 0) {
                                if ($cell >= $requiredCells) {
                                    break;
                                }
                                ?>
                            </tr><tr>
                                <?php
                            }
                            $cell++;
                        }
                        ?>  
                    </tr>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
