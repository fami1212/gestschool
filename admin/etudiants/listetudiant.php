<?php
require '../../config.php';

$etudiants = $pdo->query("SELECT * FROM etudiants")->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body <?php include_once '../../menu.php'  ?>>
    <table border="1">

        <thead>
            <th>ID</th>
            <th>NOM</th>
            <th>EMAIL</th>
        </thead>

        <tbody>


            <?php foreach ($etudiants as $etudiant): ?>
                <tr>
                    <td><?php echo $etudiant['id'] ?></td>
                    <td><?php echo $etudiant['nom'] ?></td>
                    <td><?php echo $etudiant['email'] ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>
</body>

</html>