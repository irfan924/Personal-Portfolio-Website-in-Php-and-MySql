<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/meta-tags.php'; ?>
</head>

<body>
    <div class="summary-container">
        <?php include 'include/summary-header.php' ?>

        <h2 class="common-heading">All skills</h2>
        <div class="common-content">
            <?php
            include 'include/config.php';
            $skillQuery = "SELECT * FROM skill";
            $skillResult = mysqli_query($conn, $skillQuery) or die("Skill Query Disconnected!");
            if (mysqli_num_rows($skillResult) > 0); {

            ?>
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Skills Name</td>
                            <td>Proficiency</td>
                            <td>Update</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($skillResult)) { ?>
                            <tr>
                                <td><?php echo $row['skill_id'] ?></td>
                                <td><?php echo $row['skill_name'] ?></td>
                                <td><?php echo $row['skill_proficiency'] ?></td>
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