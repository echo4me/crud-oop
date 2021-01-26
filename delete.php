<?php
include('model.php');
$model = new Model();

$id = (isset($_GET['id']) && !empty($_GET['id']))  ? intval($_GET['id']) : 0 ;
$model->delete($id);

if($model->delete($id))
{
     echo  '<script>alert("One Record Deleted")</script>';
     echo "<script> window.location.href = 'records.php'</script>";
}else{
     echo  '<script>alert("Faild To Delete")</script>';
     echo "<script> window.location.href = 'records.php'</script>";
}

?>