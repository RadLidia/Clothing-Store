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
    $sql="CREATE TABLE IF NOT EXISTS manufacturer (
  id_manufacturer INT(5) NOT NULL AUTO_INCREMENT,
  company_name VARCHAR(50) NULL DEFAULT NULL,
  phone INT(10) NOT NULL,
  PRIMARY KEY (id_manufacturer))
            ";
    if (mysqli_query($con,$sql)){
        //echo  "Table Created...!";
        return $con;
    }
    else{
        echo "Cannot Create table...!";
    }
}