<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar contacto</title>
</head>

<body>
    <h1>Actualizar contácto</h1>
    <form action="/contacts/<?php echo $contact['id'] ?>" method="post">
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="<?php echo $contact['name'] ?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $contact['email'] ?>">
        </div>
        <div>
            <label for="phone">Teléfono</label>
            <input type="text" name="phone" id="phone" value="<?php echo $contact['phone'] ?>">
        </div>
        <button type="submit">Actualizar</button>
    </form>
</body>

</html>