<?php
include("header.php");
require("config/connect_db.php");
$DB_con = connect_db(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="main-body">
    <?php
    $urldomain = "http://image.tmdb.org/t/p/w500/";

    $stmt = $DB_con->prepare("SELECT * FROM tbl_posters");
    $stmt->execute();
    foreach ($stmt as $row) {
        $id = $row['id'];
        $name = $row['imgname'];
        $url = $row['imgurl'];
        $urlToImg = $urldomain . $url;
        ?>

        <div class="posters col-lg-6">
            <h1 class="title-poster"><?php echo $name ?></h1>
            <div class="btn-del">

            <form  method="post" action="config/cruddb.php">
                <button type="submit" name="delete" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Radera
                <input type="hidden" name="idPoster"value="<?php echo $id?>">                </button>
                </button>
            </form>
        </div>

    <img class="multiple-borders" src="<?php echo $urlToImg ?>"><br/>


        </div>
        <?php
    }
    ?>
</div>


</body>
</html>
