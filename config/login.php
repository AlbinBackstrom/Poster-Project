<?php
require"connect_db.php";
$DB_con = connect_db();


if (isset($_POST['submit'])) {
    $username = $_POST['myusername'];
    $password = $_POST['mypassword'];
    
    $credent = $DB_con->prepare('SELECT username, password FROM tbl_users WHERE username = :username');
    $credent->bindParam(':username', $username);
    $credent->execute();
    
    $results = $credent->fetch(PDO::FETCH_ASSOC);
    if (count($results) > 0 && password_verify($password, $results['password'])) {
        $_SESSION['username'] = $results['username'];
        header('location: oldindex.php');
        exit;
    } else {
        echo  '<p id="credErr">Wrong username/password</p>';
    }
}

?>