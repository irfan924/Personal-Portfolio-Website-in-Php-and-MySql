<?php

$skill_name = $_POST['skill_name'];
$skill_proficiency = $_POST['skill_proficiency'];

include 'config.php';

$sqli = "INSERT INTO skill (skill_name, skill_proficiency) VALUES ('$skill_name','$skill_proficiency')";

$sqli_run = mysqli_query($conn, $sqli) or die("Error Found");

header('Location: http://localhost/portfolio/admin');

mysqli_close($conn);


?>