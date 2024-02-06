<?php
class Database{
    private $username="yabsera";
    private $server="localhost";
    private $password="12345678";
    private $database="carTrackingSystem";
    public function OpenConnection(){
        $connection=new mysqli($this->server,$this->username,$this->password,$this->database);
        if($connection->connect_errno){
            return "err";
        }
        else{

            return $connection;
        }
    }
    public function CloseConnection(){
        $this.OpenConnection()->close();
        return "closed";
    }

    public function CreateUser($firstname,$lastname,$username,$password,$email){
        $statment="INSERT INTO into User(firstname,lastname,username,email,password) values('?','?','?','?','?');";
        $command=$this->OpenConnection()->prepare($statment);
        $password=password_hash($password,PASSWORD_DEFAULT);
        $stmt->bind_param("sssss",$firstname,$lastname,$username,$email,$password);
        $stmt->execute();
    }
    public function AddCar($platenumber,$carimage){
        $statment="INSERT  into Car(platenumber,carimage) values('?','?')";
        $command=$this->OpenConnection()->prepare($statment);
        $stmt->bind_param("ss",$platenumber,$carimage);
        $stmt->execute();
    }
    public function RemoveCar($platenumber){
        $statment="Delete from CAR Where platenumber='?'";
        $command=$this->OpenConnection()->prepare($statment);
        $stmt->bind_param("s",$platenumber);
        $stmt->execute();
    }
    public function AdminSeeAllUser(){
        return $this->OpenConnection()->query("Select * from user");
    }
    public function AdminRemoveUser($id){
        $statment="Delete from User Where id=?";
        $command=$this->OpenConnection()->prepare($id);
        $stmt->bind_param("i",$id);
        $stmt->execute();
    }
}

?>