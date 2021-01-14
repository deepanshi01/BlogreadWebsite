<?php

include "logic.php"

?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <link rel="stylesheet" href="css/utils.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mobile.css">
        <title>iBlog Site - You can only read the blogs</title>
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
        <div class="home-articles max-width-1 m-auto font-1">
           
                <div class="home-article">
                    
                    <div class="home-article-content">
                        <div class="container mt-5 ">

                                     <?php
                                    if (isset($_POST['submit-search'])){
                                        $search = mysqli_real_escape_string($conn, $_POST['search']);
                                        $sql = "SELECT * FROM data1 WHERE title LIKE '%$search%' OR content LIKE '%$search%' OR dt LIKE '%$search%'";

                                        $result = mysqli_query($conn, $sql);
                                        $queryResult = mysqli_num_rows($result);

                                        echo "<h2>Search Results for ".$queryResult."</h1>";



                                        if ($queryResult > 0) {
                                         while ($row = mysqli_fetch_assoc( $result)){
                                           echo " 
                                           <div>
                                           <a href='article.php?title=".$row['title']."&dt=".$row['dt']."' class='c-pointer text-black my-3 text-center;'>
                                           
                                           <h1 class='c-pointer form-control bg-dark text-white my-3 text-center;'>".$row['title']."</h1>
                                           </a>
                                           <div>Admin</div>
                                           <spam>".$row['dt']."</spam>
                                           </div>";
                                         }
                                        } else {
                                            echo "There are no results matching your search!";
                                        }
                                    }
                                    ?> 
                        </div>
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