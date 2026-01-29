<?php
    include "db.php";
    $_user_id = $_SESSION['user_id'];
    $connection->query("DELETE FROM search_history WHERE user_id = '$_user_id'");
    header("Location: history.php");
?>