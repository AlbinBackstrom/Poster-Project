<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
    <script src="js/bootstrap.js"></script>
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/custom_navbar.css">
</head>
<body>
<!-- NAVBAR
         ================================================== -->
<div class="grey-area">
    <div class="navbar-wrapper">
        <div class="container">

            <nav class="navbar navbar-inverse navbar-static-top navbar-default nav-custom">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Poster Project</a>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li><a href="filmer.php">TSB100</a></li>
                            <li><a href="searchposter.php">Sök Posters</a></li>
                            <li><a href="myposters.php">Mina posters</a></li>




                        </ul>

                       

                        <?php
                        if (isset($_SESSION['username'])) { ?>


                            <ul class="nav navbar-nav pull-right" style="padding-right: 15px">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">Mitt konto<span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Foobar</a></li>
                                        <li><a href="#">Inställningar</a></li>
                                        <li><a href="account/loggin.php">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="config/logout.php">Logga ut</a></li>
                                    </ul>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <div id="navbar" class="navbar-collapse collapse righ-allign">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#" data-toggle="modal" data-target="#registerModal">Registrera</a>
                                    </li>
                                    <li><a href="#" data-toggle="modal" data-target="#loginModal">Logga in</a>
                                    </li>
                                </ul>
                            </div><?php } ?>


                    </div>
            </nav>
        </div>

        <!-- NAVBAR
         ================================================== -->

        <!--register modal-->
        <form action="account/register.php" method="post">
            <div id="registerModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h1 class="text-center">Register</h1>
                        </div>
                        <div class="modal-body">
                            <form class="form col-md-12 center-block">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Username"
                                           name="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg" placeholder="Password"
                                           name="passwordone">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg"
                                           placeholder="Retype password" name="passwordtwo">
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block"
                                           VALUE="Sign Up">
                                        <span class="pull-right"><a href="signin.php">Already have an account? Sign
                                                In!</a></span>
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

        <!--login modal-->
        <form action="account/loggin.php" method="post">
            <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h1 class="text-center">Login</h1>
                        </div>
                        <div class="modal-body">
                            <form class="form col-md-12 center-block">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Username"
                                           name="myusername">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg" placeholder="Password"
                                           name="mypassword">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block"
                                           VALUE="loh">
                                    <button class="btn btn-primary btn-lg btn-block">Sign In</button>
                                    <span class="pull-right"><a href="#" data-toggle="modal"
                                                                data-target="#registerModal">Register</a></span>
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


    </div>
</body>
</html>