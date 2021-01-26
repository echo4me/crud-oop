<?php
include 'model.php';
$model = new Model();
$id = (isset($_GET['id']) && !empty($_GET['id']))  ? intval($_GET['id']) : 0 ;
$row = $model->fetch_single($id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Show Data</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <h1 class="text-center">OOP CRUD</h1>
            <hr style="background:#333;color:#333;height:1px">
        </div>
    </div>

    <div class="row">
        <div class="col-md-5 mx-auto">
            <?php
            if(!empty($row))
            {

            
            ?>
            <div class="card">
                <div class="card-header">
                    Single Record
                </div>
                <div class="card-body">
                    <p>Name :   <?=$row['name'];?></p>
                    <p>Address : <?=$row['address'];?></p>
                    <p>Email : <?=$row['email'];?></p>
                    <p>Phone : <?=$row['phone'];?></p>
                </div>
            </div>
            <?php
            }else{
                echo "<div class='alert alert-info'> No Data Availabe</div>";
            }
            ?>
        </div>
    </div>
</div>