<?php
// variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php
$exerciseNb = 2;
include '../header.php';
$start = 0;
$number = 25;
// Tant que $start est inférieur à 20
while ($start < 20) {
    // tu multiplie $start par $number(la déuxieme variable)
    $result = $start * $number;
    // incrementer la première variable
    $start++;
}
?>
<p><?= $result ?></p>
<?php include '../footer.php'; ?>
