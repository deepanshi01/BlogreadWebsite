<?php
   $server = "localhost";
   $user = "root";
   $password = "";
   $database ="blogphp1";

   $conn = mysqli_connect($server, $user, $password, $database);

   if(!$conn){
       die("connection to this database failed due to" .
       mysqli_connect_error());
   }

   // echo "Success connecting to the db";
    

   //retrive data from data table
   $sql = "SELECT * FROM `data1`";//it select all data(result) from data table
   $query = mysqli_query($conn, $sql);//store data(result) in query variable
//    echo $sql;



   //after click on add post button -- u will submit the info in database
   if(isset($_REQUEST["bpost"])){
       $title = $_REQUEST["title"];
       $content = $_REQUEST["content"];

       $sql = "INSERT INTO `data1` (`title`, `content`) VALUES ('$title', '$content')";
       mysqli_query($conn, $sql);

    //    echo $sql;
       // after click on add button ---u will redirect to home page(index.php)
       header("Location: adminindex.php?info=added");
       exit(); //exit from  above if condition
   }

   //query retrieve the data from database
   if(isset($_REQUEST['id'])){
       $id = $_REQUEST['id'];

       $sql = "SELECT * FROM `data1` WHERE `id` = $id";//it takes data(id) from database and save it on sql
       $query = mysqli_query($conn, $sql);//over write the query function and excess this over write to retrive data from database
   }
//update post
   if(isset($_REQUEST['update'])){
    $id = $_REQUEST['id'];
    $title = $_REQUEST["title"];
    $content = $_REQUEST["content"];


    $sql = "UPDATE `data1` SET title = '$title', content= '$content' WHERE id = $id";
    mysqli_query($conn, $sql);

    header("Location: adminindex.php?info=updated");
    exit(); //exit from  above if condition
   }
//Delete post
   if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM `data1` WHERE id = $id";//it takes data(id) from database and save it on sql
    $query = mysqli_query($conn, $sql);//over write the query function and excess this over write to retrive data from database
   header("Location: adminindex.php?info=deleted");
   exit(); //exit from  above if condition
   }

 if (isset($_REQUEST['dt'])){
    $dt = $_REQUEST['dt'];

    $sql = "SELECT * FROM `data1` WHERE `dt` = $dt";
    $query = mysqli_query($conn, $sql);
 }


   
   
   ?>