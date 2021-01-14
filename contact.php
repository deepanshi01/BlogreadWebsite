<!--?php

include "logic.php"

?-->
<?php
$insert = false;
if (isset($_POST['name'])) {

    $server = "localhost";
    $username =  "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `contactblog`.`conblog` (`name`, `phone`, `email`, `other`, `dt`) VALUES ('$name', '$phone', '$email', '$desc', current_timestamp())";


    if ($con->query($sql) == true) {
        $insert = true;
    } else {
        echo "ERROR : $sql <br> $con->error";
    }

    $con->close();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title>iBlog Site - You can only read the blogs</title>
</head>
<style>
    .submitMsg{
        color: red;
        /* background-color: red; */
        font-size: 32px;
        font-family: fantasy;
    }
</style>

<body>
    <!-- navbar section -->
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
        <a href="index.php">
        <span><img src="img/logo2.png" alt="iBlog" width="50px"></span>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="admin/login.php">Admin Login</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="max-width-1 m-auto">
        <hr>
    </div>



    <div class="contact-content font-1 max-width-1 m-auto ">
        <div class="max-width-1 m-auto mx-1">
            <h2>Feel Free to Contact Us</h2>

        <?php
        if ($insert == true){
          echo "<p class='submitMsg'>Thank for submitting your feedback. We are happy to see you in this community </p>";
        }
        ?>


            <form action="contact.php" method="post">
                <div class="contact-form">
                    <div class="form-box">
                        <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-box">
                        <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number (10 digits)" pattern="[0-9]{10}" required>
                    </div>
                    <div class="form-box">
                        <input type="email" name="email" id="email" placeholder="Enter Your Email Id" required>
                    </div>
                    <div class="form-box">
                        <textarea type="text" name="desc" id="desc" cols="30" rows="10" placeholder="How may we help you" required></textarea>
                    </div>
                    <div class="form-box">
                        <button class="btn">Submit</button>
                    </div>

                </div>
            </form>
        </div>

    </div>
    </div>

    <!-- footer section -->
    <div class="footer">
        <p> Copyright &copy; iBlog.com</p>
        <a href="https://www.vecteezy.com/free-vector/typing">Vector Credits: Vecteezy</a>
    </div>

</body>

</html>