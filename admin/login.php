<?php



// This script will handle login
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$err ="";
$success = "";


if(isset($_POST['submit'])){
    if($username == "admin"){
        if($password == "admin12345"){
            $err ="";
            $success = "Welcome Admin!!!";
            //redirect to another page on successful login
            header("Location: ../adminindex.php");
        }
        else{
            $err = "Invalid password!!!";
            $success = "";
        }
    }
    else{
        $err = "Invalid Username";
        $success = "";
    }
}
    
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/utils.css">
    <link rel="stylesheet" href="../css/mobile.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    




    <title>PHP login system!</title>
</head>

<body>
    <!-- navbar section -->
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="../index.php">
            <span><img src="../img/logo2.png" alt="iBlog" width="50px"></span>
        </a>
            <ul class="padding-bottom = 0px">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../admin/login.php">Admin Login</a></li>
                <li><a href="../contact.php">Contact</a></li>
            </ul>
        </div>
        <!-- <div class="nav-right">
            <form action="../search.html" method="GET" name="query">
                <input class="form-input" type="text" placeholder="Article Search">
                <button class="btn">Search</button>
            </form>

        </div> -->
    </nav>
    <div class="max-width-1 m-auto">
        <hr>
    </div>

    <div class="container mt-4">
        <h3>Admin Login Here:</h3>
        <!-- <hr> -->
     <p class="error text-danger"><?php echo $err;?></p><p class="success text-success"><?php echo $success; ?></p>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="username" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1"  required>
                <label class="form-check-label" for="exampleCheck1" >Check me out</label><br>
                <a href="#">Forget Password</a>
            </div>
            <button type="submit" name = "submit" class="btn btn-primary">LOGIN</button>
        </form>



    </div>

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>

</html>