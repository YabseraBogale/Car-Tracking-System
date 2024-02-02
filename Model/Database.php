<?php

class Database{
    private $username="yabsera";
    private $server="localhost";
    private $password="12345678";
    private $database="carTrackingSystem";
    protected function OpenConnection(){
        $connection=new mysqli($this->server,$this->username,$this->password,$this->database);
        if($connection->connect_errno){
            return "err";
        }
        else{
            return $connection;
        }
    }
    protected function CloseConnection(){
        $this.OpenConnection()->close();
        return "closed";
    }

    protected function CreateUser($firstname,$lastname,$middlename,$phonenumber,$password){
        try{
            $hash_pass=password_hash($password,PASSWORD_DEFAULT);
            $statment=$this->OpenConnection()->prepare("insert into User(firstname,middlename,lastname,password,phonenumber) values(?,?,?,?,?)");
            $statment->bind_param("ssssi",$firstname,$middlename,$lastname,$hash_pass,$phonenumber);
            $statment->execute();
            $this.CloseConnection();
            return "inserted";
        } catch(Exception $e){
            return $e->getMessage();
        }
        
    }
    protected function UserAddCar($userid,$carplate){
        

    }
    protected function UserRemoveCar($userid,$carplate){

    }
    protected function UserUpdateCar($userid,$carplate){

    }
    

}

?>