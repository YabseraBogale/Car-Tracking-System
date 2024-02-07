<?php 
class Model extends Database{
    protected function CreateUser($firstname,$lastname,$username,$email,$password){
        $statment="INSERT INTO User(firstname,lastname,username,email,password) values('?','?','?','?','?');";
        $this->OpenConnection()->query($statment);
    }
    protected function Location($lat,$long){
        $statment="INSERT into Location(lat,lon) values(?,?)";
        $command=$this->OpenConnection()->prepare($statment);
        $stmt->bind_param("ss",$lat,$long);
        if($stmt->execute()){
            return "location entered";
        } else {
            return "try again";
        }
    }
    protected function AddCar($platenumber,$carimage){
        $statment="INSERT into Car(platenumber,carimage) values('?','?')";
        $command=$this->OpenConnection()->prepare($statment);
        $stmt->bind_param("ss",$platenumber,$carimage);
        if($stmt->execute()){
            return "Added Car";
        } else {
            return "try again";
        }
    }
    protected function RemoveCar($platenumber){
        $statment="Delete from CAR Where platenumber='?'";
        $command=$this->OpenConnection()->prepare($statment);
        $stmt->bind_param("s",$platenumber);
        if($stmt->execute()){
            return "you have removed car";
        } else {
            return "try again";
        }
    }
    protected function AdminSeeAllUser(){
        return $this->OpenConnection()->query("Select username,password from user");
    }
    protected function AdminRemoveUser($id){
        $statment="Delete from User Where id=?";
        $command=$this->OpenConnection()->prepare($id);
        $stmt->bind_param("i",$id);
        if($stmt->execute()){
            return "you have removed user";
        } else {
            return "try again";
        }
    }
    protected function AdminAll(){
        return $this->OpenConnection()->query("Select * from Admin");
    }
}

?>