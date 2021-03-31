<?php

require_once ("db.php");
require_once ("component.php");

$con = Createdb();

//create button click
if(isset($_POST['create'])){
    //echo "Create button clicked";
   createData();
}

if(isset($_POST['read'])){
    getData();
}

if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}

if(isset($_POST['deleteall'])){
    deleteAll();
}


function createData(){
    $storename = textboxValue("name");
    $storelocation = textboxValue("location");
    $nrofemployees = textboxValue("nr_of_employees");

    //$nr = intval($nrofemployees);
    if($storename && $storelocation && $nrofemployees){

        $sql = "INSERT INTO store(name,location,nr_of_employees)
            VALUES ('$storename','$storelocation','$nrofemployees')";
        if(mysqli_query($GLOBALS['con'],$sql)){
           // echo "Record Succesfully Inserted...!";
            TextNode("success","Record Succesfully Inserted...!");
        }else{
            echo "Error";
        }
    }else{
       // echo "Provide Data in the Textbox";
        TextNode("error","Provide data in the Textbox");
    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}

//messages
  function TextNode($classname, $msg){
      $element= "<h6 class='$classname'>$msg</h6>";
      echo $element;
  }

//get data from mysql database
function getData(){
    $sql = "SELECT * FROM store";

    $result = mysqli_query($GLOBALS['con'],$sql);
    if(mysqli_num_rows($result) > 0){
       return $result;
    }
}

//update data
function UpdateData(){
    $storeid = textboxValue("id_store");
    $storename = textboxValue("name");
    $storelocation = textboxValue("location");
    $nrofemployees = textboxValue("nr_of_employees");

    if($storename && $storelocation && $nrofemployees) {
        $sql = "
        UPDATE store SET name = '$storename',location ='$storelocation', nr_of_employees ='$nrofemployees' WHERE id_store='$storeid';
        ";
        if (mysqli_query($GLOBALS['con'], $sql)) {
            TextNode("success", "Data Successfully Updated");
        } else
            TextNode("error", "Enable to Update Data");
    }else{
        TextNode("error", "Select Data Using Edit Icon");
    }
}

function deleteRecord(){
    $storeid = (int)textboxValue("id_store");

    $sql="DELETE FROM store WHERE id_store=$storeid";
    if(mysqli_query($GLOBALS['con'],$sql)){
        TextNode("success","Record Deleted Successfully...!");
    }else{
        TextNode("error","Enable to Delete Record...!");
    }
}

function deleteBtn(){
    $result = getData();
    $i = 0;
    if($result){
        while($row = mysqli_fetch_assoc($result)){
           // echo $row['id'];
            $i++;
            if($i > 3){
                buttonElement("btn-deleteall","btn btn-danger","<i class='fas fa-trash'></i>Delete All", "deleteall","");
                return;
            }
        }
    }
}

function deleteAll(){
    $sql = "DROP TABLE store";
    if(mysqli_query($GLOBALS['con'],$sql)){
        TextNode("success", "All Record Deleted Successfully...!");
        Createdb();
    }else{
        TextNode("error", "Something Went Wrong! Record cannot be deleted...!");
    }
}

//set id to textbox
function setID(){
    $getid = getData();
    $id = 0;
    if($getid){
        while($row = mysqli_fetch_assoc($getid)) {
            $id = $row['id_store'];
        }
    }
    return ($id + 1);
}