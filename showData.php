<?php
    $pass = $_POST['password'];
    $conf_pass = $_POST['confirm_password'];
    if($pass == $conf_pass) {
        echo "Password match";
    }
    else {
        echo "Password does not match";
    }
?>