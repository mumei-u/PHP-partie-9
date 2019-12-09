<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 7;
include '../header.php';
for ($start = 1; $start <= 100; $start = $start + 15) {
  echo '<br>On tient le bon bout';
}
?>
<p><?= $result ?></p>
<?php include '../footer.php'; ?>
