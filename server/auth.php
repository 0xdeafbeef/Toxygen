<?php
include_once("sql_manage.php");
include_once('sql_misc.php');
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == $_POST['username']) {
    print "Already logged";
} elseif (isset($_POST['submit']) and $_POST['submit'] == 'Войти' and isset($_POST['password']) and isset($_POST['username'])) {
    if ($res = generic_read("users", "username" . " = " . wrap_single_quotes($_POST["username"]))) {
        $res = mysqli_fetch_array($res, MYSQLI_ASSOC);
        if (hash("whirlpool", $_POST['password']) == $res['password']) {
            $_SESSION['logged'] = $_POST['username'];
            print $res['isAdmin'];
            $_SESSION['admin'] = $res['isAdmin'];
            print $_SESSION['admin'];
                        header('Location: ../src/index.php');
        } else
            print "bad user or password";
    } else {
        print "bad user or password"; //todo one ,ore fucking todo
    }
}
