<?php
// variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php
$exerciseNb = 3;
include '../header.php';
// tableau simple avec les mois de l'année
$months = ['janvier', 'février', 'mars','avril','mai','juin', 'juillet','aout','septembre','octobre', 'novembre', 'décembre'];
// print_r() sert a afficher le contenu avec peut d'information, comparé a son frère var_dump()
print_r($months);
?>
<!-- $month [affiche la quatrième valeur du tableau] -->
<p><?= $months[5] ?></p>
<?php include '../footer.php'; ?>
