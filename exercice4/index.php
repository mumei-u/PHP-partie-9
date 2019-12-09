<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 4;
include '../header.php';
$start = 1;
/* Tant que cette variable n'atteint pas 10 */
while ($start <= 10) {
  /* j'affiche premièrement le résultat */
  echo $start;
  /* tu affiche les résultat incrementer de la moitié de sa valeur */
  $result = $start++/2;
}
?>
<p><?= $result ?></p>
<?php include '../footer.php'; ?>
