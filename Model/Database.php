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
            return $connection->pre;
        }
    }
    protected function CloseConnection(){
        $this.OpenConnection()->close();
        return "closed";
    }

    protected function CreateUser($firstname,$lastname,$middlename,$phonenumber,$password){
        $hash_pass=password_hash($password,PASSWORD_DEFAULT);
        $stamtment=mysql_escape_string("insert into User(firstname,middlename,lastname,phonenumber,password) values('$firstname','$lastname','$middlename',$phonenumber,)");

    }
    protected function UserAddCar($userid,$carplate){
        

    }
    protected function UserRemoveCar($userid,$carplate){

    }
    protected function UserUpdateCar($userid,$carplate){

    }
    

}

?>