<?php

if (isset($_POST['submit'])) {
    include 'include/config.php';

    $user_name = $_POST['user_name'];
    $user_pwd = md5($_POST['user_pwd']);

    $user_query = "SELECT user_id, user_name, user_pwd FROM user WHERE user_name = '{$user_name}' AND user_pwd = '{$user_pwd}' ";

    $user_query_run = mysqli_query($conn, $user_query) or die("User Query Failed.") or die("Connection Failed");

    if (mysqli_num_rows($user_query_run) > 0) {
        while ($row = mysqli_fetch_assoc($user_query_run)) {
            session_start();
            $_SESSION["user_name"] = $row['$user_name'];
            $_SESSION["user_id"] = $row['$user_id'];
            $_SESSION["user_pwd"] = $row['$user_pwd'];
            header('Location: http://localhost/portfolio/admin/');
        }
    } else {
echo "<p class='error'>Login Failed..</p>";
    }
} else {
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/meta-tags.php'; ?>
</head>

<body>
    <div class="login-container">
        <div class="login-content">
            <div>
                <h2 class="sub-heading">
                    Welcome
                </h2>
                <div class="divider"></div>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" id="login-form" method="post">
                <div class="login-form-box">
                    <label for="name">User Name</label>
                    <input type="text" id="username" required name="user_name" />
                </div>
                <div class="login-form-box">
                    <label for="userpwd">Password</label>
                    <input type="password" id="userpwd" required name="user_pwd" />
                </div>
                <input type="submit" value="Submit" name="submit">
            </form>
            <h2 class="sub-heading">
                &copy;Irfan Abbas
            </h2>

        </div>
    </div>
</body>

</html>