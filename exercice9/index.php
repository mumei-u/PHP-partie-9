<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 9;
include '../header.php';
// tableau associatif avec les départements des Hauts de France et en valeur leur nom
$department = [
  'Aisne' => 02,
  'Nord' => 59,
  'Oise' => 60,
  'Pas-de-Calais' => 62,
  'Somme' => 80
];
// print_r() sert a afficher le contenu avec peut d'information, comparé a son frère var_dump()
print_r($department);
?>
<?php include '../footer.php'; ?>
