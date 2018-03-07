<?php
session_start();
session_destroy();
header("location: ../oldindex.php");
exit;