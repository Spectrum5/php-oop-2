<?php
require __DIR__ . '/classes/classProduct.php';
require __DIR__ . '/classes/classStore.php';
require __DIR__ . '/db.php';

$shop = new Store('PetsMania');

?>


<!DOCTYPE html>
<html lang="it">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Style css -->
        <link rel="stylesheet" href="/css/style.css">

        <title>PHP OOP 2</title>
    </head>

    <body class="bg-dark text-white text-center">

        <div>
            <h1><?php echo $shop->nameStore  ?></h1>
        </div>

        <div>
            <?php
            foreach ($productList as $product) {
                $prod = new Product($product);
                $prod->selectType($product);
            ?>
                <div class="img-card"></div>
                <div class="info-card">
                    <p> <?php echo $prod->name  ?></p>
                    <p> <?php echo $prod->price  ?></p>
                    <p> <?php echo $prod->tipology  ?></p>
                    <p> <?php echo $prod->category  ?></p>
                    <p> <?php echo $prod->calories  ?></p>
                    <p> <?php echo $prod->size  ?></p>
                    <p> <?php echo $prod->width ?></p>
                    <p> <?php echo $prod->height  ?></p>
                    <p> <?php echo $prod->material  ?></p>
                    <p> <?php echo $prod->sound  ?></p>

                </div>


            <?php } ?>


        </div>

    </body>

</html>