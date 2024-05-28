<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/meta-tags.php' ?>
</head>

<body>
    <div class="folio-container">

        <?php include 'include/header.php' ?>

        <section id="portfolio">
            <h1 class="subHeading">Portfolio</h1>
            <div class="divider"></div>
            <p class="sub-para">I am passionate about creating web solutions
                that are both functional and aesthetically pleasing. I strive to ensure that my clients are
                satisfied with the final product. Here is Some projects links and Details that are created by Me.
            </p>

            <?php
            include 'include/config.php';
            $projectQuery = "SELECT * FROM project";
            $projectResult = mysqli_query($conn, $projectQuery);
            if (mysqli_num_rows($projectResult) > 0) {
            ?>

                <div class="port-row">
                    <!-- Portfolio Item 1 -->
                    <?php
                    while ($project_result = mysqli_fetch_assoc($projectResult)) {
                    ?>
                        <div class="port-item">
                            <div class="port-img">
                                <!-- <img src="" alt="..."> -->
                               <img src="images/img5.jpg" >
                            </div>
                            <div class="port-info">
                                <h4><?php echo $project_result['project_title'] ?></h4>
                                <p class="port-info-para">
                                    <?php echo substr(($project_result['project_description']), 0, 100) . "..."; ?>
                                </p>
                                <a href="<?php echo $project_result['project_link'] ?>"><i class="fa-solid fa-up-right-from-square"></i></a>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            <?php } ?>
        </section>

    </div>
</body>

</html>