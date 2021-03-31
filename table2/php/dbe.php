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
    $sql="CREATE TABLE IF NOT EXISTS employee (
  id_employee INT(10) NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NULL DEFAULT NULL,
  age INT(5) NOT NULL,
  phone INT(10) NOT NULL,
  store_id INT(11) NOT NULL,
  department_id INT(5) NOT NULL,
  PRIMARY KEY (id_employee),
    FOREIGN KEY (store_id)
    REFERENCES store (id_store)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (department_id)
    REFERENCES department (id_department)
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