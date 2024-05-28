<?php
    include 'config.php';
    $blogQuery = "SELECT * FROM blog";
    $blogResult = mysqli_query($conn, $blogQuery) or die("Client Query Disconnected!");
    if ($total_blogs = mysqli_num_rows($blogResult)); {
        echo  $total_blogs ;
    }
    ?>