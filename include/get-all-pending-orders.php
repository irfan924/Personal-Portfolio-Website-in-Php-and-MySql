<?php
include 'include/config.php';
$poQuery = "SELECT * FROM pending_orders";
$poResult = mysqli_query($conn, $poQuery) or die("Client Query Disconnected!");
if ($total_po = mysqli_num_rows($poResult)); {
    echo $total_po ;
}
