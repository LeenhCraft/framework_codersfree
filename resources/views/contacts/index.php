<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
</head>

<body>
    <h1>listado de contactos</h1>
    <a href="/contacts/create">Crear contacto</a>
    <p>Total de contáctos: <?= count($contacts) ?></p>
    <ul>
        <?php foreach ($contacts as $contact) : ?>
            <li>
                <a href="/contacts/<?php echo $contact['id']; ?>">
                    <?php echo $contact['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>