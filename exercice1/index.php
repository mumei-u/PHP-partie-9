<?php
$exerciseNb = 1;
include '../header.php';
$start = 0;
$result = '';
/* Tant que $start est inférieure | égal a 10 */
while ($start <= 10) {
    $result = $start++;  /* La valeur affichée est $start avant l'incrémentation
                   (post-incrémentation)  */
}
?>
<p><?= $result ?></p>
<?php include '../footer.php'; ?>
