<?php

$contact_name = $_POST['name'];
$contact_email = $_POST['email'];
$contact_subject = $_POST['subject'];
$contact_message = $_POST['message'];

include 'config.php';

$contact_query = "INSERT INTO contact_us(contact_name, contact_subject, contact_message, contact_email) VALUES ('{$contact_name}','{$contact_subject}','{$contact_message}','{$contact_email}')";

$contact_result = mysqli_query($conn, $contact_query) or die("Query Faild");

header("Location: http://localhost/portfolio/index.php");

mysqli_close($conn);

?>