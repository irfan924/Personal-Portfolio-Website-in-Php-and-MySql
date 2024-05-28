<?php
            include 'config.php';
            $sql = "SELECT * FROM skill";
            $result = mysqli_query($conn, $sql) or die("Qurey Unsuccessful");

            if (mysqli_num_rows($result) > 0) {
            ?>
                <div class="skill-row">

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <!-- Skill Box  -->
                        <div class="skill-box">
                            <div class="skill-info">
                                <h2><?php echo $row['skill_name']; ?></h2>
                                <h2><?php echo $row['skill_proficiency']; ?></h2>
                            </div>
                            <div class="skill-outer-line">
                                <div class="skill-inner-line" style="width: <?php echo $row['skill_proficiency']; ?>%;">
                                </div>
                            </div>

                        </div>
                    <?php } ?>

                </div>

            <?php } ?>