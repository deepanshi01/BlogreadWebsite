<?php

include "logic.php"

?>

<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blogpost.css">
    <link rel="stylesheet" href="css/mobile.css">



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">






    <title>Blog using PHP and MySQL</title>
</head>



<body>

    <!-- navbar section -->
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="index.php">
            <span><img src="img/logo2.png" alt="iBlog" width="50px"></span>
            </a>
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

    <div class='post-img'>
                        <img src='img/11.svg' alt=''>
                    </div>
        <div class="container mt-5">
        <?php
             $title = mysqli_real_escape_string($conn, $_GET['title']);
             $date = mysqli_real_escape_string($conn, $_GET['dt']);


            $sql = "SELECT * FROM data1 WHERE title='$title' AND dt='$date'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

                if ($queryResults > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                        <div>
                        <div class='blog-post-content max-width-2 m-auto my-2'>
                            <h1 padding='9px' class='font-1'>Great platform for Readers</h1>
                        <div class='blogpost-meta'>
                        <div class='author-info'>
                              <b> <div>Admin</div>
                            <spam>". $row['dt'] ."</spam></b>
                            </div>
                            <br>
                            <div class='social'>
                <svg width='25' height='25' class='r'><g fill-rule='evenodd'><path d='M22.3 4.3c-.82.51-1.72.88-2.67 1.08a4.25 4.25 0 0 0-6.18-.12 4.3 4.3 0 0 0-1.26 3.03c0 .34.04.67.08 1a12.2 12.2 0 0 1-8.81-4.52 4.8 4.8 0 0 0-.62 2.14 4.44 4.44 0 0 0 1.92 3.6 4.13 4.13 0 0 1-1.91-.55v.07c0 2.06 1.47 3.8 3.44 4.21-.37.08-.74.13-1.15.15l-.76-.07a4.32 4.32 0 0 0 3.98 2.99A9.03 9.03 0 0 1 3 19.14l-1-.06A12.26 12.26 0 0 0 8.6 21c7.88 0 12.2-6.55 12.17-12.18.02-.23.02-.41 0-.62a8.06 8.06 0 0 0 2.15-2.23c-.77.37-1.6.6-2.45.7a4.1 4.1 0 0 0 1.84-2.38'></path>
                 </g></svg>

                <svg style='background: black;
                border-radius: 21px;' width='25' height='25' viewBox='0 0 25 25' fill='none' class='jb'><path fill-rule='evenodd' clip-rule='evenodd' d='M9.15 18.23v-7.68H6.6v7.68h2.56zM7.87 9.51c.9 0 1.45-.6 1.45-1.33-.01-.75-.56-1.33-1.43-1.33-.88 0-1.46.58-1.46 1.33 0 .74.56 1.33 1.42 1.33h.02zM10.57 18.23h2.57v-4.29c0-.23.02-.45.09-.62.18-.46.6-.93 1.31-.93.93 0 1.3.7 1.3 1.73v4.11h2.57v-4.4c0-2.36-1.26-3.46-2.95-3.46-1.39 0-2 .77-2.34 1.3h.02v-1.12h-2.57c.04.72 0 7.68 0 7.68z' fill='#fff'></path></svg>

                <svg width='25' height='25' fill='#3B5998' class='jb'><path d='M20.3 4H4.7a.7.7 0 0 0-.7.7v15.6c0 .38.32.7.7.7h8.33v-6.38h-2.12v-2.65h2.12V9.84c0-2.2 1.4-3.27 3.35-3.27.94 0 1.75.07 1.98.1v2.3H17c-1.06 0-1.31.5-1.31 1.24v1.76h2.65l-.53 2.65H15.7l.04 6.38h4.56a.7.7 0 0 0 .71-.7V4.7a.7.7 0 0 0-.7-.7' fill-rule='evenodd'></path></svg>
            </div>
            </div>
            <br>
            <div class='bg-dark p-3 rounded-lg text-white text-center'>
                            <h1>" . $row['title'] . "</h1>
                            </div>
                            <br>
            <div class='bg-dark p-3 rounded-lg text-white text-center'>
            <h5 class='mt-12 border-left border-dark pl-3 mb-12'>
                            " . $row['content'] . "</h5>
                            </div>
                            </div>
                            </div>";
                        }
                    }
                    
        ?>
    </div>
    </div>
    </div>
            
    
    <div class="footer">
        <p> Copyright &copy; iBlog.com</p>
        <a href="https://www.vecteezy.com/free-vector/typing">Vector Credits: Vecteezy</a>
    </div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>