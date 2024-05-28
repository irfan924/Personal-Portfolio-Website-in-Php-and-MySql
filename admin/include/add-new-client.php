<?php

include 'config.php';

$client_name = $_POST['client_name'];
$client_number = $_POST['client_number'];
$client_email = $_POST['client_email'];

$client_query = "INSERT INTO client (client_name, client_number, client_email) VALUES ('$client_name', '$client_number', '$client_email')";

$client_query_run = mysqli_query($conn, $client_query);

header('Location: http://localhost/portfolio/admin');

mysqli_close($conn);


?>