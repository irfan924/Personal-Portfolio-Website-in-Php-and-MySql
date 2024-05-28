


<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'include/meta-tags.php' ?>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <?php include 'include/header.php' ?>
        <!-- Content -->
        <main class="main-content">
            <section id="dashboard">
                <h2 class="sub-heading">Dashboard</h2>
                <div class="divider"></div>
                <div class="dashboard-content">
                    <div class="box-div">
                        <div class="dash-box">
                            <i class="fa-regular fa-face-smile icon"></i>
                            <div class="dash-box-detail">
                                <h1 class="dash-box-detail-title">
                                    <?php include 'include/get-all-clients.php' ?> +
                                </h1>
                                <h3 class="dash-box-detail-para">Happy Clients</h3>
                            </div>
                        </div>
                        <div class="dash-box">
                            <i class="fa-regular fa-square-plus icon"></i>
                            <div class="dash-box-detail">
                                <h1 class="dash-box-detail-title">
                                <?php include 'include/get-all-projects.php' ?> +
                                </h1>
                                <h3 class="dash-box-detail-para">Total Projects</h3>
                            </div>
                        </div>
                        <div class="dash-box">
                            <i class="fa-solid fa-clock-rotate-left icon"></i>
                            <div class="dash-box-detail">
                                <h1 class="dash-box-detail-title">
                                <?php include 'include/get-all-pending-orders.php' ?> +
                                </h1>
                                <h3 class="dash-box-detail-para">Pending Orders</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dash-detail">
                        <div class="dash-detail-box">
                            <h1>Monthly Visitors</h1>
                            <h1>37.5K +</h1>
                        </div>
                        <div class="dash-detail-box">
                            <h1>Monthly Revenvue</h1>
                            <h1>50K</h1>
                        </div>
                        <div class="dash-detail-box">
                            <h1>New Visitors</h1>
                            <h1>5K +</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section id="projects">
                <h2 class="sub-heading">
                    Add New Project in Portfolio
                </h2>
                <div class="divider"></div>

                <form action="include/add-new-project.php" method="post" id="project-form" >
                    <div class="form-box">
                        <label for="title">Title</label>
                        <strong>:</strong>
                        <input type="text" name="proj_title" placeholder="Your Project Title" required>
                    </div>
                    <div class="form-box">
                        <label for="description">Description</label>
                        <strong>:</strong>
                        <textarea name="proj_description" id="description" cols="30" rows="10" required>

                        </textarea>
                    </div>
                    <div class="form-box">
                        <label for="link">Link</label>
                        <strong>:</strong>
                        <input type="text" name="proj_link" required>
                    </div>
                    <input type="submit" value="Submit" id="submitBtn">
                </form>
            </section>
            <section id="skill">
                <h2 class="sub-heading">
                    Add New Skill
                </h2>
                <div class="divider"></div>

                <form action="include/add-new-skill.php" method="post" id="project-form">
                    <div class="form-box">
                        <label for="title">Skill</label>
                        <strong>:</strong>
                        <input type="text" placeholder="e.g Next.js" name="skill_name">
                    </div>
                    <div class="form-box">
                        <label for="proficiency">Proficiency</label>
                        <strong>:</strong>
                        <div class="radio-box">
                            <div class="radios">
                                <input type="radio" name="skill_proficiency" value="25"> 
                                25%
                            </div>
                            <div class="radios">
                                <input type="radio" name="skill_proficiency" value="50"> 
                                50%
                            </div>
                            <div class="radios">
                                <input type="radio" name="skill_proficiency" value="60"> 
                                60%
                            </div>
                            <div class="radios">
                                <input type="radio" name="skill_proficiency" value="70"> 
                                70%
                            </div>
                            <div class="radios">
                                <input type="radio" name="skill_proficiency" value="80"> 
                                80%
                            </div>
                            <div class="radios">
                                <input type="radio" name="skill_proficiency" value="90"> 
                                90%
                            </div>
                            <div class="radios">
                                <input type="radio" name="skill_proficiency" value="100"> 
                                100%
                            </div>
                        </div>
                    </div>
                    
                    <input type="submit" value="Submit" id="submitBtn">
                </form>
            </section>
            <section id="blogs">
                <h2 class="sub-heading">
                    Add a New Blog
                </h2>
                <div class="divider"></div>
                <form action="include/add-new-blog.php" method="post" id="project-form">
                    <div class="form-box">
                        <label for="title">Blog Title</label>
                        <strong>:</strong>
                        <input type="text" placeholder="Your Blog Title" name="blog_title">
                    </div>
                    <div class="form-box">
                        <label for="description">Description</label>
                        <strong>:</strong>
                        <textarea name="blog_description" id="description" cols="30" rows="10" placeholder="Your Project Description">

                        </textarea>
                    </div>
                    <div class="form-box">
                        <label for="link">Link</label>
                        <strong>:</strong>
                        <input type="text" name="blog_link">
                    </div>
                    <input type="submit" value="Submit" id="submitBtn">
                </form>
            </section>
            <section id="clients">
                <h2 class="sub-heading">
                    Add a New Client
                </h2>
                <div class="divider"></div>
                <form action="include/add-new-client.php" method="post" id="project-form">
                    <div class="form-box">
                        <label for="name">Name</label>
                        <strong>:</strong>
                        <input type="text" placeholder="e.g John Doe" name="client_name" >
                    </div>
                    <div class="form-box">
                        <label for="phNumber">Phone Number</label>
                        <strong>:</strong>
                        <input type="text" placeholder="e.g +92 300 1234567" name="client_number" >
                    </div>
                    <div class="form-box">
                        <label for="email">Email</label>
                        <strong>:</strong>
                        <input type="email" placeholder="e.g example.com" name="client_email" >
                    </div>
                    <input type="submit" value="Submit" id="submitBtn">
                </form>
            </section>
            <section id="pending-orders">
                <h2 class="sub-heading">
                    Add Pending Order Details
                </h2>
                <div class="divider"></div>
                <form action="include/add-new-pending-order.php" method="post" id="project-form">
                    <div class="form-box">
                        <label for="client-name">Prjoect Name</label>
                        <strong>:</strong>
                        <input type="text" placeholder="e.g Keyboard App" name="po_title" >
                    </div>
                    <div class="form-box">
                        <label for="order-description">Description</label>
                        <strong>:</strong>
                        <textarea name="order-description" cols="30" rows="10" name="po_title" ></textarea>
                    </div>
                    <div class="form-box">
                        <label for="order-client">Client Name</label>
                        <strong>:</strong>
                        <input type="text" placeholder="e.g John Doe" name="po_client_name" >
                    </div>
                    <div class="form-box">
                        <label for="client-email">Email</label>
                        <strong>:</strong>
                        <input type="order-email" placeholder="e.g example.com" name="po_client_email" >
                    </div>
                    <input type="submit" value="Submit" id="submitBtn">
                </form>
            </section>
        </main>
    </div>
</body>

</html>