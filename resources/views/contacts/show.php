<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del contácto</title>
</head>

<body>

    <h1>Detalle del Contácto</h1>
    <a href="/contacts">Volver</a>
    <a href="/contacts/<?php echo $contact['id'] ?>/edit">Editar</a>
    <p><b>Nombre:</b> <?php echo $contact['name']; ?></p>
    <p><b>Email:</b> <?php echo $contact['email']; ?></p>
    <p><b>Teléfono:</b> <?php echo $contact['phone']; ?></p>
    <form action="/contacts/<?= $contact['id'] ?>/delete" method="post">
        <button type="submit">Eliminar</button>
    </form>
</body>

</html>