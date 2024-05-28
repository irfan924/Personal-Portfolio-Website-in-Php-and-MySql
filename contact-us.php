<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/meta-tags.php' ?>
</head>

<body>
    <div class="contact-container">

        <?php include 'include/header.php' ?>

        <section id="contact">

            <h1 class="subHeading">Contact Us</h1>
            <div class="divider"></div>
            <p class="sub-para">
                I am passionate about creating web solutions
                that are both functional and aesthetically pleasing. I strive to ensure that my clients are
                satisfied with the final product.
            </p>

            <div class="contact-row">
                <!-- Left Col -->
                <div class="contact-left">

                    <!-- Email Box -->
                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="info">
                            <h4>Email:</h4>
                            <p>irfanabbas 00429@gmail.com</p>
                        </div>
                    </div>

                    <!-- Call Box -->
                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="info">
                            <h4>Call:</h4>
                            <p>+92 304 7451194</p>
                        </div>
                    </div>

                    <!-- Location Box -->
                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="info">
                            <h4>Location:</h4>
                            <p>Rahimyar Khan, Punjab, Pakistan.</p>
                        </div>
                    </div>
                    <!-- Map -->
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56146.745343110946!2d70.26898310415386!3d28.41407902098592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39375c713b45db39%3A0x28af23c1672a0170!2sRahim%20Yar%20Khan%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1678708267837!5m2!1sen!2s" width="100%" height="250" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
                <!-- Right Col -->
                <div class="contact-right">

                    <form action="include/contact-data-upload.php" method="post">

                        <input type="text" name="name" id="name" placeholder="e.g John Deo">
                        <input type="email" name="email" id="email" placeholder="e.g xyz@gmail.com">
                        <input type="text" name="subject" id="subject" placeholder="Subject">
                        <textarea name="message" id="msg" rows="9" placeholder="Your Message"></textarea>
                        <input type="submit" value="Send Message">

                    </form>

                </div>

            </div>

        </section>
    </div>
</body>

</html>