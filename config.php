<?php
    include "db.php";
    if (isset($_REQUEST['loginButton']) &&
     $_REQUEST['loginButton'] == 'true') {
        $username = $_REQUEST['username'];
        $password = hash("md5", $_REQUEST['password']);
        $result = $connection->query("SELECT name, id FROM users WHERE 
        username = '$username' AND password = '$password'");
        if ($result !== FALSE) {
            $_SESSION['login_name'] = $result->fetch_assoc()['name'];
            $_SESSION['user_id'] = $result->fetch_assoc()['id'];
            $_SESSION['username'] = $username;
            $_SESSION["login_status"] = "true";
            header("Location: youtube.php");
        } else header("Location: index.php");
    } else if (isset($_REQUEST["registerButton"]) &&
     $_REQUEST["registerButton"] == "true")
     {
        $newName = $_REQUEST['newName'];
        $newUsername = $_REQUEST['newUsername'];
        $newEmail = $_REQUEST['newEmail'];
        $rawPassword = $_REQUEST['newPassword'];
        $newPassword = hash("md5", $_REQUEST['newPassword']);
        $confirmPassword = hash("md5", $_REQUEST['confirmPassword']);
        if ($newPassword === $confirmPassword) {
            $connection->query("INSERT INTO users (name, username, email, password)
             VALUES ('$newName', '$newUsername', '$newEmail', '$newPassword')");
            header("Location: index.php?loginButton=true&username=$newUsername&password=$rawPassword");
        } else {
            header("Location: index.php");
        }
    } else if (isset($_REQUEST['logoutButton']) && $_REQUEST['logoutButton'] == 'true') {
        $_SESSION["login_status"] = "false";
        session_destroy();
        header("Location: index.php");
    }
?>