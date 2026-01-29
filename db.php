<?php
    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $connection = mysqli_connect($host, $username, $password);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $connection->query("CREATE DATABASE IF NOT EXISTS youtube_search_tracker");
    mysqli_select_db($connection, "youtube_search_tracker");
    $result = $connection->query("CREATE TABLE IF NOT EXISTS searches (id INT AUTO_INCREMENT PRIMARY KEY, search_term VARCHAR(256) NOT NULL)");
    $result = $connection->query("CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(256) NOT NULL, username VARCHAR(256) NOT NULL UNIQUE, email VARCHAR(256), password VARCHAR(256) NOT NULL)");
    $result = $connection->query("CREATE TABLE IF NOT EXISTS search_history (id INT AUTO_INCREMENT PRIMARY KEY, user_id INT, username VARCHAR(256) DEFAULT NULL, search_term VARCHAR(256) NOT NULL, timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP)");
    $result = $connection->query("CREATE TABLE IF NOT EXISTS uploads (id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(256), file_path VARCHAR(512) NOT NULL, title VARCHAR(256) NOT NULL, description TEXT)");
?>