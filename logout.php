<?php 

include 'db_connnection.php';

$conn = OpenCon();

    session_start();
    session_unset();
    session_destroy();

    require_once 'index.php';

    header("location: ../index.php");
    exit();

    CloseCon($conn);
?>