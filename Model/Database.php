<?php

class Database{
    private string $username="yabsera";
    private string $server="localhost";
    private string $password="12345678";
    private string $database="carTrackingSystem";
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

    protected function CreateUser($username,$firstname,$lastname,$password){

    }
    protected function UserAddCar($userid,$carplate){
        

    }
    protected function UserRemoveCar($userid,$carplate){

    }
    protected function UserUpdateCar($userid,$carplate){

    }
    

}

?>