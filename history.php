<?php
    include "db.php";
?>
<html>
    <style>
        h1{
            color:darkred;
            text-align:center;
            margin-left: 20px;
        }
        a{
            text-decoration: none;
        }
        .back{
            background-color: #c5cedcff;
            color:white;
            border-radius: 23px;
            padding: 10px;
             font-size: 18px;
             margin-top: 340px;
             margin-left: 20px;
        }
        .back:hover{
            background-color: #d7dee8ff;
        }
        .btn{
            background-color: rgb(234, 72, 8);
            color: white;
            border-radius: 23px;
             padding: 10px;
             font-size: 18px;
        }
        .btn:hover{
            background-color: rgba(172, 58, 13, 1);
        }
        p{
            font-size: 25px;
        }
        .nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
    <body>
        <div class="nav">
        <h1>History</h1>
        <button class = "btn btn-primary" onclick="window.location.href='clear_history.php'">Clear History</button>
        </div>
        <ul>
            <?php
                $result = $connection->query("SELECT username, search_term, timestamp FROM search_history");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>[" . $row['username'] . ":" . $row['timestamp'] . "]:<b>" . htmlspecialchars($row['search_term']) . "</b></li>";
                    }
                } else {
                    echo "<p>No search history found.</p>";
                }
            ?>
        </ul>
       <button class="back"><a href="youtube.php">Back to Main Page</a> </button> 

    </body>
</html>