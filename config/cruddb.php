<?php
require "connect_db.php";
$DB_con = connect_db();



if (isset($_POST['submit'])){
    $url = $_POST['textInputSave'];
    $urlNew = "http://" . $url;
    

    $stmt = $DB_con->prepare("INSERT INTO tbl_text (text) VALUES (:text)");
    $stmt->bindParam(':text', $urlNew);
    $stmt->execute();
    header("location: ../links.php");
    exit;
}

if (isset($_POST['delete'])){
    $id = $_POST['idPoster'];
    $stmt = $DB_con->prepare("DELETE FROM tbl_posters WHERE id = ?");
    $stmt->bindParam(1, $id);
    $stmt->execute();
    header("location:../myposters.php");
    exit;
}

if(isset($_POST['saveposter'])){
    $name = $_POST['imgname'];
    $imgurl = $_POST['imgurl'];

    $stmt = $DB_con->prepare("INSERT INTO tbl_posters (imgname, imgurl) VALUES  (:name, :url)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':url', $imgurl);
    $stmt->execute();
    header("location:../searchposter.php");
    exit;
}