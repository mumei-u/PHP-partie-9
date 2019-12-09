<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 5;
include '../header.php';
for ($start = 1; $start <= 15 ; $start++) {
  echo '<br>On y arrive presque';
}
?>
<p><?= $result ?></p>
<?php include '../footer.php'; ?>
