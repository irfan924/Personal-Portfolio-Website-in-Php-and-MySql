<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/meta-tags.php'; ?>
</head>

<body>
    <div class="summary-container">
        <?php include 'include/summary-header.php' ?>

        <h2 class="common-heading">All projects</h2>
        <div class="common-content">
            <?php
            include 'include/config.php';
            $projectQuery = "SELECT * FROM project";
            $projectResult = mysqli_query($conn, $projectQuery) or die("Project Query Disconnected!");
            if (mysqli_num_rows($projectResult) > 0); {

            ?>
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Description</td>
                            <td>Link</td>
                            <td>Update</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($projectResult)) { ?>
                            <tr>
                                <td><?php echo $row['project_id'] ?></td>
                                <td><?php echo $row['project_title'] ?></td>
                                <td><?php echo $row['project_link'] ?></td>
                                <td><?php echo substr(($row['project_description']),0,50)."..." ?></td>
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