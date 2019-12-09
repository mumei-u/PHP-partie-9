<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 6;
include '../header.php';
for ($start = 20; $start >= 0 ; $start--) {
  echo '<br>C\'est presque bon';
}
?>
<p><?= $result ?></p>
<?php include '../footer.php'; ?>
