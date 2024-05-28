<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/meta-tags.php' ?>
</head>

<body>
    <div class="blog-container">

        <?php include 'include/header.php' ?>

        <div id="blogs">
            <h1 class="subHeading">
                My Presonal Blogs
            </h1>
            <div class="divider"></div>

            <div id="blogs-content">

                <?php
                include 'include/config.php';
                $query = "SELECT * FROM blog";
                $result = mysqli_query($conn, $query) or die("Query Faild!");

                if (mysqli_num_rows($result) > 0) {
                ?>
                    <?php while ($blog_result = mysqli_fetch_assoc($result)) { ?>

                        <div class="blog">
                            <h2 class="blog-title">
                            <?php echo $blog_result['blog_title'] ?>
                            </h2>
                            <p class="blog-para">
                            <?php echo $blog_result['blog_description'] ?>
                            </p>
                            <a href="<?php echo $blog_result['blog_link'] ?>" class="read-more-btn">
                                <i class="fas fa-arrow-up-right-from-square"></i>
                                Read More
                            </a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>