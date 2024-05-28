<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/meta-tags.php'; ?>
</head>

<body>
    <div class="summary-container">
        <?php include 'include/summary-header.php' ?>

        <h2 class="common-heading">All Pending Orders</h2>
        <div class="common-content">
            <?php
            include 'include/config.php';
            $poQuery = "SELECT * FROM pending_orders";
            $poResult = mysqli_query($conn, $poQuery) or die("po Query Disconnected!");
            if (mysqli_num_rows($poResult) > 0); {

            ?>
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Project Title</td>
                            <td>Client Name</td>
                            <td>Client Email</td>
                            <td>Description</td>
                            <td>Update</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($poResult)) { ?>
                            <tr>
                                <td><?php echo $row['po_id'] ?></td>
                                <td><?php echo $row['po_title'] ?></td>
                                <td><?php echo $row['po_client_name'] ?></td>
                                <td><?php echo $row['po_client_email'] ?></td>
                                <td><?php echo substr(($row['po_description']),0,50)."..." ?></td>
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