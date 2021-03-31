<?php
require_once ("../crud/php/component.php");
require_once ("../crud/php/operation.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clothing Store</title>

    <script src="https://kit.fontawesome.com/02faaaeb6a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--Custom stylesheet -->
    <link rel= "stylesheet" href="../crud/style.css">
</head>
<body>

<main>
<div class="container text-center">
    <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-tshirt"></i> Clothing Store</h1>
    <div class="d-flex justify-content-center">
        <form action="" method="post" class="w-50">
            <div class="pt-2">
                <?php inputElement("<i class=\"fas fa-id-badge\"></i>", "Id","id_store", setID());?>
            </div>
            <div class="pt-2">
               <?php inputElement("<i class=\"fas fa-store-alt\"></i>", "Store name","name", "");?>
            </div>
            <div class="row pt-2">
                <div class="col">
                <?php inputElement("<i class=\"fas fa-map-marker-alt\">  </i>", "Store location","location", "");?>
            </div>
            <div class="col">
                <?php inputElement("<i class=\"fas fa-users\"></i>", "Nr. of emplooyees","nr_of_employees", "");?>
            </div>
            </div>
            <div class="d-flex justify-content-center">
                <?php buttonElement("btn-create","btn btn-success","<i class=\"fas fa-plus\"></i>","create","dat-toggle='tooltip' data-placement='bottom' title='Create'");?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php buttonElement("btn-read","btn btn-primary","<i class=\"fas fa-sync\"></i>","read","dat-toggle='tooltip' data-placement='bottom' title='Read'");?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php buttonElement("btn-update","btn btn-light border","<i class=\"fas fa-pen-alt\"></i>","update","dat-toggle='tooltip' data-placement='bottom' title='Update'");?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php buttonElement("btn-delete","btn btn-danger","<i class=\"fas fa-trash-alt\"></i>","delete","dat-toggle='tooltip' data-placement='bottom' title='Delete'");?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php deleteBtn();?>
            </div>
        </form>
    </div>

    <!--Bootstrap table -->
    <div class="d-flex table-data">
        <table class="table table-striped table-dark" style= "margin: 1em 10em">
            <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Store Name</th>
                <th>Store location</th>
                <th>Number of employees</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody id="tbody">
            <tr>
                <?php
                if(isset($_POST['read'])){
                    $result = getData();
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){?>
                            <tr>
                                <td data-id="<?php echo $row['id_store'];?>"><?php echo $row['id_store'];?></td>
                                <td data-id="<?php echo $row['id_store'];?>"><?php echo $row['name'];?></td>
                                <td data-id="<?php echo $row['id_store'];?>"><?php echo $row['location'];?></td>
                                <td data-id="<?php echo $row['id_store'];?>"><?php echo $row['nr_of_employees'];?></td>
                                <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['id_store'];?>"></i></td>
                             </tr>
                <?php
                        }
                    }
                }
                ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</main>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="../crud/php/main.js"></script>
</body>
</html>