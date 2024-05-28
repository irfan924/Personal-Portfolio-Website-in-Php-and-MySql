<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/meta-tags.php'; ?>
</head>

<body>
    <div class="summary-container">
        <?php include 'include/summary-header.php' ?>

        <h2 class="common-heading">All clients</h2>
        <div class="common-content">
            <?php
            include 'include/config.php';
            $clientQuery = "SELECT * FROM client";
            $clientResult = mysqli_query($conn, $clientQuery) or die("Client Query Disconnected!");
            if (mysqli_num_rows($clientResult) > 0); {

            ?>
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Mobile Number</td>
                            <td>Email Address</td>
                            <td>Update</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($clientResult)) { ?>
                            <tr>
                                <td><?php echo $row['client_id'] ?></td>
                                <td><?php echo $row['client_name'] ?></td>
                                <td><?php echo $row['client_number'] ?></td>
                                <td><?php echo $row['client_email'] ?></td>
                                <td><a href="#"><i class="fas fa-pen-to-square"></i></a></td>
                                <td><a href="#"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
        </div>
    </div>
</body>

</html>