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
        $sql="CREATE TABLE IF NOT EXISTS customer (
  id_customer INT(5) NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NULL DEFAULT NULL,
  phone INT(10) NOT NULL,
  credit_limit FLOAT NULL DEFAULT NULL,
  age INT(3) NOT NULL,
  store_id INT(11) NOT NULL,
  PRIMARY KEY (id_customer),
    FOREIGN KEY (store_id)
    REFERENCES store (id_store)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
            ";
        if (mysqli_query($con,$sql)){
            //echo  "Table Created...!";
            return $con;
        }
        else{
            echo "Cannot Create table...!";
        }
}