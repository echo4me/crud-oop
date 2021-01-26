<?php 
    require_once 'model.php';
    // call DB
    $model = new Model();
    // insert From Post Request
    $model->insert();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    
    <div class="row">
        <div class="col-md-12 mt-5">
            <h1 class="text-center">OOP CRUD</h1>
            <hr style="background:#333;color:#333;height:1px">
        </div>
    </div>
    <a  class="btn btn-info mb-2" href="records.php">User Manage</a>

    <div class="row">
        <div class="col-md-5 mx-auto">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value='submit' class="btn btn-primary btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>