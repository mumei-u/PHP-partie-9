<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 5;
include '../header.php';
// tableau associatif avec les départements des Hauts de France et en valeur leur nom
$department = [
  02 => 'Aisne',
  59 => 'Nord',
  60 => 'Oise',
  62 => 'Pas-de-Calais',
  80 => 'somme'
];
// print_r() sert a afficher le contenu avec peut d'information, comparé a son frère var_dump()
print_r($department);
?>
<?php include '../footer.php'; ?>
