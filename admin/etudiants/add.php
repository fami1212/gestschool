<?php
/// connecter à la base de donnee 
require '../../config.php';

// recuperer les donnees envoyee par le form

$nom = $_POST['nom'];   
$email= $_POST['email'];



$sql = "INSERT INTO etudiants (nom, email) VALUES (?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$nom, $email]);

header('Location: listetudiant.php');