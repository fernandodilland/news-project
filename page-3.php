<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticiero</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="js/bootstrap"></script>
    <script src="RandomGenerator"></script>
    <link href="index.css" rel="stylesheet"/>
</head>
<body>

    <?php
        $url = 'https://newsapi.org/v2/top-headlines?country=mx&category=technology&pageSize=10&page=3&apiKey=c56f43f0a5fb46f1ab6891dd9793e37e';
        $response = file_get_contents($url);
        $NewsData = json_decode($response);
    ?>
    <div class="jumbotron">
        <h1>Noticiario de Tecnología</h1>
        <p>Creado por: Fernando Dilland Mireles Cisneros</p>
    </div>

    <div class="container-fluid">
        <?php
            foreach($NewsData->articles as $News)
                {
        ?>
    </div>

    <div class="row NewsGrid">
        <div class="col-md-3">
            <img src="<?php echo $News->urlToImage	?>" alt="News thumbnail" class="rounded">
        </div>
        <div class="col-md-9">
            <h2><?php echo $News->title ?></h2>
            <p><?php echo $News->description ?></p>
            <h2>Autor: <?php echo $News->author ?></h2>
            <h6>Publicado en la fecha: <?php echo $News->publishedAt ?></h6>
            <p>Más información <a href=<?php echo $News->url ?>>aquí</a></p>
        </div>
    </div>

    <?php
        }
    ?>

    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item">
            <a class="page-link" href="page-2.php" tabindex="-1">Anterior</a>
            </li>
            <li class="page-item">
            <a class="page-link" href="index.php">1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="page-2.php">2</a></li>
            <li class="page-item active"><a class="page-link" href="page-3.php">3</a></li>
            <li class="page-item disabled">
            <a class="page-link" href="#">Siguiente</a>
            </li>
        </ul>
    </nav>

</body>
</html>