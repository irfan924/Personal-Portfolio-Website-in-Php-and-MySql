<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/meta-tags.php'; ?>
</head>

<body>
    <div class="summary-container">
        <?php include 'include/summary-header.php' ?>

        <h2 class="common-heading">All contacts</h2>
        <div class="common-content">
            <?php
            include 'include/config.php';
            $contactQuery = "SELECT * FROM contact_us";
            $contactResult = mysqli_query($conn, $contactQuery) or die("Contact Query Disconnected!");
            if (mysqli_num_rows($contactResult) > 0); {

            ?>
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Subject</td>
                            <td>Message</td>
                            <td>Update</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($contactResult)) { ?>
                            <tr>
                                <td><?php echo $row['contact_id'] ?></td>
                                <td><?php echo $row['contact_name'] ?></td>
                                <td><?php echo $row['contact_email'] ?></td>
                                <td><?php echo $row['contact_subject'] ?></td>
                                <td><?php echo substr(($row['contact_message']),0,50)."..." ?></td>
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