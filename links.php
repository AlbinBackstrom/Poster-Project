<?php
include("header.php");

require "config/connect_db.php";
$DB_con = connect_db();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="main-body">
    <form class="fieldset-down" action="config/cruddb.php" method="post">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border"><h2>Spara text eller en länk</h2></legend>
            <legend>Fyll i rutan och spara</legend>
            <!-- Text input-->
            <div class="input-group">
                <input type="text" class="form-control" name="textInputSave">
  <span class="input-group-btn">
    <input class="btn btn-default" type="submit" name="submit">
  </span>
            </div>
        </fieldset>
    </form>

    <fieldset class="scheduler-border">
        <legend class="scheduler-border"><h2>Sparade länkar och text</h2></legend>
        <?php
        $stmt = $DB_con->prepare("SELECT * FROM tbl_text ORDER BY id DESC");
        $stmt->execute();
        foreach ($stmt as $row) {
            $id = $row['id'];
            $text = $row['text'];
            ?>
            <a href="<?php echo $text ?>"><?php echo $text ?>
            </a>
            <form id="delete" method="post" action="config/cruddb.php" class="pull-right">
                <input type="hidden" name="delete_rec_id" value="<?php print $id; ?>"/>
                <input type="submit" name="delete" value="Radera"/>

            </form>
            <hr>
        <?php } ?>
    </fieldset>

</div>
</body>
</html>
