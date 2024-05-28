<?php
include 'config.php';
$projectQuery = "SELECT * FROM project";
$projectResult = mysqli_query($conn, $projectQuery) or die("Client Query Disconnected!");
if ($total_project = mysqli_num_rows($projectResult)); {
    echo $total_project;
}
