<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/meta-tags.php' ?>
</head>

<body>
    <div class="about-container">

        <?php include 'include/header.php'; ?>

        <section id="about">
            <h1 class="subHeading">About Me</h1>
            <div class="divider"></div>
            <p class="sub-para">
                I am a web developer. My experience in web development has allowed me to develop dynamic, interactive
                websites that are tailored to the specific needs of my clients. I have a strong understanding of HTML,
                CSS, JavaScript, and frameworks such as Bootstrap and React.I am passionate about creating web solutions
                that are both functional and aesthetically pleasing. I strive to ensure that my clients are satisfied
                with the final product.
            </p>
            <!-- img-cl -->
            <div class="about-col">
                <div class="img-col">
                    <img src="images/myPic.jpeg" alt="..." width="150px">
                </div>

                <!-- Information -->
                <div class="info-col">
                    <h2>Front-End developer</h2>
                    <p class="sub-para">
                        I am passionate about creating web solutions
                        that are both functional and aesthetically pleasing. I strive to ensure that my clients are
                        satisfied with the final product.
                    </p>
                    <div class="icon-list-col">
                        <!-- Left Side List -->
                        <div class="icon-list">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    <strong>Age</strong>
                                    <strong>:</strong>
                                    <span>19</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    <strong>Website</strong>
                                    <strong>:</strong>
                                    <span>www.irfanabbas.xyz</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    <strong>Phone</strong>
                                    <strong>:</strong>
                                    <span>+92 3047451194</span>
                                </li>
                                <li><i class="fa-solid fa-angle-right"></i>
                                    <strong>City</strong>
                                    <strong>:</strong>
                                    <span>Pakistan, Punjab,RahimYar Khan</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Right Side List -->
                        <div class="icon-list">
                            <ul>
                                <li><i class="fa-solid fa-angle-right"></i>
                                    <strong>BirthDay</strong>
                                    <strong>:</strong>
                                    <span>05/09/2004</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    <strong>Degree</strong>
                                    <strong>:</strong>
                                    <span>BS Information Technology</span>
                                </li>
                                <li><i class="fa-solid fa-angle-right"></i>
                                    <strong>e-mail</strong>
                                    <strong>:</strong>
                                    <span>irfanabbas00429@gmail.com</span>
                                </li>
                                <li><i class="fa-solid fa-angle-right"></i>
                                    <strong>Freelance</strong>
                                    <strong>:</strong>
                                    <span>Available</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="skill">
            <h1 class="subHeading">Skills</h1>
            <div class="divider"></div>

            <p class="sub-para">
                I am passionate about creating web solutions
                that are both functional and aesthetically pleasing. I strive to ensure that my clients are
                satisfied with the final product.
            </p>
            <!-- Skills -->
            <?php include 'include/skills.php' ?>

        </section>
        <section id="facts">
            <h1 class="subHeading">Facts</h1>
            <div class="divider"></div>
            <p class="sub-para">
                I am passionate about creating web solutions
                that are both functional and aesthetically pleasing. I strive to ensure that my clients are
                satisfied with the final product.
            </p>
            <div class="fact-row">

                <!-- Fact Box 1 -->

                <div class="fact-box">
                    <i class="fa-regular fa-face-smile"></i>
                    <strong>
                        <?php include 'include/get-all-clients.php';?> +
                    </strong>
                    <p>Happy Clients</p>
                </div>
                <!-- Fact Box 2 -->
                <div class="fact-box">
                    <i class="fa-regular fa-file-code"></i>
                    <strong>
                        <?php include 'include/get-all-projects.php';?> +
                    </strong>
                    <p>Completed Projects</p>
                </div>
                <!-- Fact Box 3 -->
                <div class="fact-box">
                    <i class="fa-solid fa-headset"></i>
                    <strong>24/7</strong>
                    <p>Hours of Support</p>
                </div>
                <!-- Fact Box 4 -->
                <div class="fact-box">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <strong>
                        <?php include 'include/get-all-pending-orders.php';?> +
                    </strong>
                    <p>Pending Orders</p>
                </div>

            </div>
        </section>
    </div>
</body>

</html>