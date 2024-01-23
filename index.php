<?php

$getMessage = "";

if (isset($getMessage)) {
    $getMessage = "Coucou PHP";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Gaetan</title>
</head>

<body>
    <h1>Hello je suis le projet Gaetan</h1>
    <h4><?= $getMessage ?></h4>
</body>

</html>