<?php
header('Content-Type: text/html; charset=utf-8');

// Charger les classes
require_once("listeevenement.php");

// Créer des objets evenement
$e1 = new evenement("Concert de Jazz", "2025-05-10", "Théâtre de Bizerte");
$e2 = new evenement("Atelier de Peinture", "2025-06-01", "Centre Culturel");
$e3 = new evenement("Conférence PHP", "2025-06-15", "Université de Bizerte");

// Créer la liste des évènements
$liste = new listeevenements();
$liste->ajouterEvenement($e1);
$liste->ajouterEvenement($e2);
$liste->ajouterEvenement($e3);

// Afficher tous les évènements
echo "<h2>--- Liste des évènements ---</h2>";
$liste->afficherTous();
?>
