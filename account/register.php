<?php
require "../config/connect_db.php";
$DB_con = connect_db();
session_start();


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['passwordone'];
    $password2 = $_POST['passwordtwo'];


    if ($_POST['passwordone'] == $_POST['passwordtwo']) {

        $passhashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $DB_con->prepare("INSERT INTO tbl_user( username, password) VALUES ( :user, :pass)");
        $stmt->bindParam(":user", $username);
        $stmt->bindParam(":pass", $passhashed);
        $stmt->execute();
        header("location: ../oldindex.php");
        exit;


    } else {
        echo "<div class=\"wrongpw\">The passwords did not match. Please try again.</div>";

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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>-->
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<!--register modal-->
<form action="register.php" method="post">
    <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1 class="text-center">Register</h1>
                </div>
                <div class="modal-body">
                    <form class="form col-md-12 center-block">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Password" name="passwordone">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Retype password" name="passwordtwo">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" VALUE="Sign Up">
                            <span class="pull-right"><a href="loggin.php">Already have an account? Sign In!</a></span>
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
</form><!--.register modal-->

<a href="#" data-toggle="modal" data-target="#myModal">Load me</a>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" id="bannerformmodal">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>