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

    mysqli_select_db ( $con , $dbname);
    $sql="CREATE TABLE IF NOT EXISTS department (
  id_department INT(5) NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NULL DEFAULT NULL,
  nr_of_employees INT(6) NOT NULL,
  PRIMARY KEY (id_department))
            ";
    if (mysqli_query($con,$sql)){
        //echo  "Table Created...!";
        return $con;
    }
    else{
        echo "Cannot Create table...!";
    }
}