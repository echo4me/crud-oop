<?php 
include 'model.php';
$model = new Model();
$id = (isset($_GET['id']) && !empty($_GET['id']))  ? intval($_GET['id']) : 0 ;
$row = $model->fetch_single($id);
if(isset($_POST['update']))
        {
            if(!empty($_POST['name']) && !empty($_POST['phone']) &&!empty($_POST['address']) &&!empty($_POST['email']))
            {
                $name       = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
                $email      = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
                $address    = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
                $phone      = filter_var($_POST['phone'],FILTER_SANITIZE_STRING);

                $data ['id']          = $id;
                $data ['name']        = $name;
                $data ['email']       = $email;
                $data ['address']     = $address;
                $data ['phone']       = $phone;

                $model->update($data);
                if($model->update($data)){
                    header("Location: records.php ");
                }
                
            }else{
                header("Location: edit.php?id=$id ");
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Edit Users</title>
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
                    <input type="text" name="name" class="form-control" value="<?=$row['name']; ?>"/>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="<?=$row['email']; ?>"/>
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone" class="form-control" value="<?=$row['phone']; ?>"/>
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control"><?=$row['address']; ?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="update" value='update' class="btn btn-primary btn-block">
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