<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/meta-tags.php'; ?>
</head>

<body>
    <div class="summary-container">
        <?php include 'include/summary-header.php' ?>

        <h2 class="common-heading">All Blogs</h2>
        <div class="common-content">
            <?php
            include 'include/config.php';
            $blogQuery = "SELECT * FROM blog";
            $blogResult = mysqli_query($conn, $blogQuery) or die("Client Query Disconnected!");
            if (mysqli_num_rows($blogResult) > 0); {

            ?>
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Blog Link</td>
                            <td>Update</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($blogResult)) { ?>
                            <tr>
                                <td><?php echo $row['blog_id'] ?></td>
                                <td><?php echo $row['blog_title'] ?></td>
                                <td><?php echo $row['blog_link'] ?></td>
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