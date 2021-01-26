<?php

class Model{
    private $server = "localhost";
    private $user   = 'root';
    private $pass   = '';
    private $db     = 'oop_crud';
    private $conn;

    public function __construct()
    {
        try{
            $this->conn = new mysqli($this->server,$this->user,$this->pass,$this->db);

        }catch(Exception $e){
            echo "Connection Faild".$e->getMessage();
        }
    }

    
    //fetCh All Data Function

    public function fetch()
    {
        $data = null;
        $query = "SELECT * FROM `records` ";
        if($sql = $this->conn->query($query))
        {
            while($row = mysqli_fetch_assoc($sql))
            {
                $data[] = $row;
                //var_dump($data);
            }
        }
        
        return $data;
    }

    //fetCh Single Row Function
    public function fetch_single($id)
    {
        $data = null;
        $query = "SELECT * FROM `records` WHERE `id` = '$id' ";
        if($sql = $this->conn->query($query))
        {
            while($row = mysqli_fetch_assoc($sql))
            {
                $data = $row;
                
            }
        }
        return $data;
    }
    
    // Insert Function
    public function insert()
    {
        if(isset($_POST['submit']))
        {
            if(!empty($_POST['name']) && !empty($_POST['phone']) &&!empty($_POST['address']) &&!empty($_POST['email']))
            {
                $name       = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
                $email      = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
                $address    = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
                $phone      = filter_var($_POST['phone'],FILTER_SANITIZE_STRING);

                $query = "INSERT INTO `records` (`name`,`email`,`address`,`phone`) VALUES ('$name','$email','$address','$phone' ) ";
                if($sql = $this->conn->query($query))
                {
                    echo "<script> alert('Inserted Successfuly')</script>";
                    echo "<script> window.location.href = 'index.php'</script>";
                }else{
                    echo  '<script>alert("Failed")</script>';
                    echo "<script> window.location.href = 'index.php'</script>";
                }
                
            }else{
                echo  '<script>alert("All Fields Are Required")</script>';
                echo "<script> window.location.href = 'index.php'</script>";
            }
        }
    }
    //update 
    public function update($data)
    {
        $query = ("UPDATE `records` SET `name`='$data[name]', `email`='$data[email]', `phone`='$data[phone]',`address`='$data[address]' WHERE `id` = '$data[id]' ");
        if($sql = $this->conn->query($query)){
            return true;
        }else{
            return false;
        }

    }
    //Delete Data
    public function delete($id)
    {
        $query = ("DELETE FROM `records` WHERE `id` = $id");
        if($sql = $this->conn->query($query))
        {
            return true;
        }else{
            return false;
        }
    }

    //..Class End
}

?>