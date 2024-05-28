<?php

$proj_title = $_POST['proj_title'];
$proj_description = $_POST['proj_description'];
$proj_link = $_POST['proj_link'];

include 'config.php';

$sqli = "INSERT INTO project (project_title, project_description, project_link) VALUES ('{$proj_title}','{$proj_description}', '{$proj_link}')";

$sqli_run = mysqli_query($conn, $sqli);

header('Location: http://localhost/portfolio/admin');

mysqli_close($conn);


?>