<?php

include_once '../control/CountryController.php';
include_once '../model/countries.php';
?>
<!-- country_view.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Country Info</title>
</head>

<body>
    <h1>Información del País</h1>

    <?php if (isset($country)): ?>
        <p><strong>Nombre:</strong> <?= htmlspecialchars($country['name']); ?></p>
        <p><strong>Capital:</strong> <?= htmlspecialchars($country['capital']); ?></p>
        <p><strong>Continente:</strong> <?= htmlspecialchars($country['region']); ?></p>
        <p><strong>Moneda:</strong> <?= htmlspecialchars($country['currency']); ?></p>
        <p><strong>Idioma(s):</strong> <?= htmlspecialchars(implode(', ', $country['languages'])); ?></p>
    <?php else: ?>
        <p>No se encontró información para el país especificado.</p>
    <?php endif; ?>

</body>

</html>