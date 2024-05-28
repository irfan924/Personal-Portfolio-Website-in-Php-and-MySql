<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/meta-tags.php'; ?>
</head>

<body>
    <div class="summary-container">
        <?php include 'include/summary-header.php' ?>

        <h2 class="common-heading">All Users</h2>
        <div class="common-content">
            <?php
            include 'include/config.php';
            $userQuery = "SELECT * FROM user";
            $userResult = mysqli_query($conn, $userQuery) or die("User Query Disconnected!");
            if (mysqli_num_rows($userResult) > 0); {

            ?>
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>User Name</td>
                            <td>Password</td>
                            <td>Update</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($userResult)) { ?>
                            <tr>
                                <td><?php echo $row['user_id'] ?></td>
                                <td><?php echo $row['user_name'] ?></td>
                                <td><?php echo md5($row['user_pwd'] )?></td>
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