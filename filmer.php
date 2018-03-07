<?php
include("header.php");
?>
<!doctype html>
<html lang="en">
<head>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="main-body movie-down">

    <?php


    $client = new SoapClient('http://tsb05.cnap.hv.se/Filmklubb_WS/Service1.svc?singleWsdl');

    $result = $client->GetMovies();

    $total = count($result->GetMoviesResult->Movie);

    for ($x = 0;
    $x < $total;
    $x++) {

    $path = $result->GetMoviesResult->Movie[$x]->pathToImage;
    $title = $result->GetMoviesResult->Movie[$x]->title;
    $plot = $result->GetMoviesResult->Movie[$x]->plot;
    $imdb = $result->GetMoviesResult->Movie[$x]->externalLink;

    $splittitles = str_replace(" ", "<br/>", $title);

    ?>
    <div class="posters col-lg-6">

        <img class="poster" src="<?php echo $path ?>">

    </div>

        <?php } ?>

</div>
</body>
</html>


