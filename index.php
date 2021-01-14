<?php

include "logic.php"

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <div class="nav-right">
            <form action="search.php" method="POST">
                <input class="form-input" name="search" type="text" placeholder="Article Search" >
                <button type="submit" class="btn" name="submit-search">Search</button>
            </form>

        </div>
    </nav>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    


    <!-- content section -->
    <div class="content max-width-1 m-auto">
        <div class="content-left">
            <h1 padding="9px">Great platform for bloggers</h1>
            <p>iBlog is a website which lets you to read an important and interesting articles. Inhence your knowledge by reading valuable articles.</p>
            <p>We Believed in <b><i>"The Best Way To Grow Is To Give".</i></b></p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sint omnis voluptas aliquid, ea ut nemo rem nisi cumque dolorum qui nobis facilis laboriosam alias quos sapiente odit officia voluptate neque eaque voluptatum molestias?
                Consequatur, veniam quibusdam ea delectus eos quisquam cumque aspernatur unde enim. Incidunt veniam quasi quia error?</p>
        </div>
        <div class="content-right">
            <img src="img/home.svg" alt="iBlog">
        </div>
    </div>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font-1">
        <h1>Featured Articles</h1>
            
            <div class="home-article">
                
                <div class="home-article-content">
                    <div class="container mt-5 ">

                        
                        <?php foreach ($query as $q) { ?>
                            <div class="row">
                            <div class="home-article-img col">
                                <img src="img/11.svg" alt="article">
                            </div>
                            
                            <form method="POST">
                                <a href="blogpost.php?id=<?php echo $q['id']; ?>" class="c-pointer text-black my-3 text-center">
                                    
                                    <h1 class="c-pointer form-control bg-dark text-white my-3 text-center;"><?php echo $q['title']; ?></h1>
                                </a>
                                
                               <h3 class="font-1 card-text"><?php echo substr($q['content'], 0, 50); ?>
                            <a href="blogpost.php?id=<?php echo $q['id']; ?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                            </h3>

                                <div> ADMIN</div>
                                <spam><?php echo $q ['dt']; ?></spam>
                            </form>
                            <br>
                            </div>
                        <?php } ?>
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