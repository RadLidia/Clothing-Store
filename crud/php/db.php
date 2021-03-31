<?php

function Createdb(){
    $servername = "localhost";
    $username ="root";
    $password ="";
    $dbname = "clothing_store";

    //create connection
    $con = mysqli_connect($servername,$username,$password);

    //check Connection
    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
    }
  //  $sql1 = "DROP DATABASE $dbname";
    //if(mysqli_query($con,$sql1))
      //  echo "database deleted";
    //create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if(mysqli_query($con,$sql)) {
        mysqli_select_db ( $con , $dbname);
        $sql="
                CREATE TABLE IF NOT EXISTS store (
                id_store INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(45) NOT NULL,
                location VARCHAR(45) NOT NULL,
                nr_of_employees INT(11) NULL DEFAULT NULL
                );
            ";
        if (mysqli_query($con,$sql)){
           //echo  "Table Created...!";
           return $con;
        }
        else{
            echo "Cannot Create table...!";
        }

    }else{
        echo "Error while creating database".mysqli_character_set_name($con);
        }
}