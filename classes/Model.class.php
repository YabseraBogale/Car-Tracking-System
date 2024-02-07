<?php 
class Model extends Database{
    protected function CreateUser($firstname,$lastname,$username,$email,$password){
        $statment="INSERT INTO  User(firstname,lastname,username,email,password) values('$firstname','$lastname','$username','$email','$password');";
        $this->OpenConnection()->query($statment);
    }
    protected function Location($lat,$long){
        $statment="INSERT into Location(lat,lon) values($lat,$$long)";
        $this->OpenConnection()->query($statment);
    }
    protected function AddCar($platenumber,$carimage){
        $statment="INSERT into Car(platenumber,carimage) values('$platenumber','$carimage')";
        $this->OpenConnection()->query($statment);
    }
    protected function RemoveCar($platenumber){
        $statment="Delete from Car Where platenumber='$platenumber'";
        $this->OpenConnection()->query($statment);
    }
    protected  function AdminSeeAllUser($username,$password){
        return $this->OpenConnection()->query("Select * from User where username='$username' AND password='$password'");
    }
    protected function AdminRemoveUser($id){
        $statment="Delete from User Where id=$id";
        $this->OpenConnection()->query($statment);
    }
    protected function AdminAll(){
        return $this->OpenConnection()->query("Select * from Admin");
    }
}

?>