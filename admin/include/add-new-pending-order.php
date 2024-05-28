<?php

include 'config.php';

$po_title = $_POST['po_title'];
$po_description = $_POST['po_description'];
$po_client_name = $_POST['po_client_name'];
$po_client_email = $_POST['po_client_email'];

$po_query = "INSERT INTO pending_orders (po_title, po_description, po_client_name, po_client_email) VALUES ('$po_title', '$po_description', '$po_client_name', '$po_client_email')";

$po_query_run = mysqli_query($conn, $po_query);

header('Location: http://localhost/portfolio/admin');

mysqli_close($conn);


?>