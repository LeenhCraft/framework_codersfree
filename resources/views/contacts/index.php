<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body class="mx-3">
    <h1>listado de contactos</h1>
    <a class="btn btn-primary" href="/contacts/create">Crear contacto</a>
    <p>Total de contáctos: <?= count($contacts) ?></p>
    <ul>
        <?php foreach ($contacts['data'] as $contact) : ?>
            <li>
                <a href="/contacts/<?php echo $contact['id']; ?>">
                    <?php echo $contact['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <!-- pagination -->
    <nav aria-label="Page navigation example">
        <div class="w-100 text-capitalize text-monospace">
            mostrando
            <span class="font-weight-bold"><?= $contacts['from']; ?></span>
            al
            <span class="font-weight-bold"><?= $contacts['to']; ?></span>
            de
            <span class="font-weight-bold"><?= $contacts['total']; ?></span>
            resultados
        </div>
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="<?= $contacts['prev_page_url']; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            <?php for ($i = 1; $i <=  $contacts['last_page']; $i++) : ?>
                <li class="page-item <?= $contacts['current_page'] == $i ? 'active' : '' ?>">
                    <a class="page-link" href="<?= '/contacts?page=' . $i ?>">
                        <?= $i ?>
                    </a>
                </li>
            <?php endfor ?>

            <li class="page-item">
                <a class="page-link" href="<?= $contacts['next_page_url']; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- end pagination -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>