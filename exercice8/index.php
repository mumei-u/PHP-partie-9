<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 8;
include '../header.php';
$start = 0;
// tableau simple avec les mois de l'année
$months = [
  'janvier',
  'février',
  'mars',
  'avril',
  'mai',
  'juin',
  'juillet',
  'aout',
  'septembre',
  'octobre',
  'novembre',
  'décembre'
];
print_r($months);
  for ($start = 0; $start < sizeof($months); $start ++) {
    $result = $months[$start];
?>
<p><?= $result ?></p>
<?php
  }
?>
<?php include '../footer.php'; ?>
