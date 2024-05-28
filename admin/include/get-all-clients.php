 <?php
    include 'config.php';
    $clientQuery = "SELECT * FROM client";
    $clientResult = mysqli_query($conn, $clientQuery) or die("Client Query Disconnected!");
    if ($total_client = mysqli_num_rows($clientResult)); {
        echo  $total_client ;
    }
    ?>