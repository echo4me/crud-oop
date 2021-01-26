<?php 
    require_once 'model.php';
    // call DB
    $model = new Model();
    // Fetch Data From DB
    $rows =$model->fetch();
    
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
    <a  class="btn btn-primary mb-2" href="index.php"><strong>+</strong>Add New User</a>
    <div class="row">
        <div class="col-md-12">
            
            <table class="table">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No0</th>
                        <th>Address</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(!empty($rows))
                {
                    $i = 1;
                    foreach($rows as $value){
                
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $value['name']?></td>
                        <td><?= $value['email']?></td>
                        <td><?= $value['phone']?></td>
                        <td><?= $value['address']?></td>
                        <td>
                            <a class="badge badge-info" href="read.php?id=<?=$value['id']?>">Read</a>
                            <a class="badge badge-danger" href="delete.php?id=<?=$value['id']?>">Delete</a>
                            <a class="badge badge-success" href="edit.php?id=<?=$value['id']?>">Edit</a>
                        </td>
                    </tr>
                <?php 
                    }
                }else{
                    echo "<div class='alert alert-info'> No Data Availble</div>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>