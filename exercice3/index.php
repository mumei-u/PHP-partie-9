<?php
// variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php
$exerciseNb = 3;
include '../header.php';
$start = 100;
$number = 25;
// Tant que $start est supérieur | égal à 10
while ($start >= 10) {
    // tu multiplie $start par $number(la déuxieme variable)
    $result = $start * $number;
    // décrémenter la première variable
    $start--;
}
?>
<p><?= $result ?></p>
<?php include '../footer.php'; ?>
