<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 8;
include '../header.php';
for ($start=200; $start >= 0; $start = $start-12) {
  echo '<br> Enfin !!!!';
}
?>
<p><?= $result ?></p>
<?php include '../footer.php'; ?>
