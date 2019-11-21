<?php
session_start();
if (isset($_SESSION['user'])) {
    if (isset($_GET['stress'])) {
        shell_exec('for i in {1..100}; do ab -n 2000000 -c 400 -k http://localhost/; done');
    } else {
        header("location:welcome.php");
    }
} else {
    header("location:index.php");
}
?>