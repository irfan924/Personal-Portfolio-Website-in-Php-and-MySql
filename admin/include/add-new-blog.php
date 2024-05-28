<?php

require 'config.php';

$blog_title = $_POST['blog_title'];
$blog_description = $_POST['blog_description'];
$blog_link = $_POST['blog_link'];
$sql_query = "INSERT INTO blog (blog_title, blog_description, blog_link) VALUES ('$blog_title', '$blog_description', '$blog_link')";
$sql_query_run = mysqli_query($conn, $sql_query) or die("Query Faild");
header('Location: http://localhost/portfolio/admin');

mysqli_close($conn);


?>