<?php
require "../config/connect_db.php";
$DB_con = connect_db();


if (isset($_POST['submit'])) {
    $username = $_POST['myusername'];
    $password = $_POST['mypassword'];

    $credent = $DB_con->prepare('SELECT username, password FROM tbl_user WHERE username = :username');
    $credent->bindParam(':username', $username);
    $credent->execute();

    $results = $credent->fetch(PDO::FETCH_ASSOC);
    if (count($results) > 0 && password_verify($password, $results['password'])) {
        $_SESSION['username'] = $results['username'];
        header('location: ../oldindex.php');
        exit;
    } else {
        echo '<p id="credErr">Wrong username/password</p>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Bootstrap Login Form</title>
    <meta name="generator" content="Bootply"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<!--login modal-->
<form action="loggin.php" method="post">
    <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1 class="text-center">Login</h1>
                </div>
                <div class="modal-body">
                    <form class="form col-md-12 center-block">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Username" name="myusername">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Password"
                                   name="mypassword">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" VALUE="loh">
                            <button class="btn btn-primary btn-lg btn-block">Sign In</button>
                            <span class="pull-right"><a href="register.php">Register</a></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form><!---.login modal-->

<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>