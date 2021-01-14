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
        <!-- <div class="nav-right">
            <form action="search.php" method="POST">
                <input class="form-input" name="search" type="text" placeholder="Article Search" >
                <button type="submit" class="btn" name="submit-search">Search</button>
            </form>

        </div> -->
    </nav>
    <div class="max-width-1 m-auto">
        <hr>
    </div>

    <div class="container mt-5">
        <!-- php if condition when parameter is info=added then display below meassage  -->
        <?php if (isset($_REQUEST['info'])) { ?>
            <?php if ($_REQUEST['info'] == "added") { ?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php }else if($_REQUEST['info'] == "updated"){ ?>
                <div class="alert alert-success" role="alert">
                    Post has been updated successfully
                </div>
                <?php }else if($_REQUEST['info'] == "deleted"){ ?>
                <div class="alert alert-danger" role="alert">
                    Post has been deleted successfully
                </div>
                <?php }?>
        <?php } ?>

        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
        </div>


        <div class="row">
            <?php foreach ($query as $q){?>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-white bg-dark mt-5">
                        <div class="card-body" style="width: 18rem;">
                            <h5 class="card-title"><?php echo $q['title']; ?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 30); ?></p>
                            <a href="view.php?id=<?php echo $q['id']; ?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                            
                        </div>
                    </div>
                </div>
            <?php }?>


        </div>

    </div>
    <!-- footer section -->
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