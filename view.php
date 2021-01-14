<?php

include "logic.php"

?>

<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">


    

    <title>Blog using PHP and MySQL</title>
</head>

<style>
.btn{
    margin: 0px 12px;
}
</style>

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






    <div class="container mt-5">
        <!-- initialise foreach loop to output the data(title and content) -->
        <?php foreach ($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['title'];?></h1>

                <div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="edit.php?id=<?php echo $q['id'];?>" class="btn btn-light btn-sm ">Edit</a>
                   
                
                    <form method="POST">
                        <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                        
                    </form>
                   

                </div>


            </div>
            <br>
            <div class="bg-dark p-3 rounded-lg text-white text-center">
                    <h5 class="mt-30 border-left border-dark pl-3"><?php echo $q['content']; ?></h5>
                </div>
        <?php }?>


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