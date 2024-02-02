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

    public function CreateUser($firstname,$lastname,$middlename,$password,$phonenumber){
        try{
            $hash_pass=password_hash($password,PASSWORD_DEFAULT);
            $this->OpenConnection()->query("insert into User(firstname,middlename,lastname,password,phonenumber) values('$firstname','$middlename','$lastname','$hash_pass',$phonenumber)");
            //$statment=$this->OpenConnection()->prepare("insert into User(firstname,middlename,lastname,password,phonenumber) values(?,?,?,?,?)");
            //$statment->bind_param("ssssi",$firstname,$middlename,$lastname,$hash_pass,$phonenumber);
            //$statment->execute();
            //$this->CloseConnection();
            return "inserted";
        } catch(Exception $e){
            return $e->getMessage();
        }
        
    }
    protected function UserAddCar($phonenumber,$platenumber,$carimage){
        try{
            $statment=$this->OpenConnection()->prepare("insert into Car(driverid,platenumber,carimage) values(?,?,?)");
            $statment->bind_param("iss",$phonenumber,$platenumber,$carimage);
            $statment->execute();
            $this.CloseConnection();
            return "inserted";
        } catch(Exception $e){
            return $e->getMessage();
        }

    }
    protected function UserRemoveCar($platenumber){
        try{
            $statment=$this->OpenConnection()->prepare("DELETE FROM Car WHERE platenumber=?");
            $statment->bind_param("s",$platenumber);
            $statment->execute();
            $this.CloseConnection();
            return "inserted";
        } catch(Exception $e){
            return $e->getMessage();
        }

    }

    public function SeeAllCarInformation($phonenumber){
        
    }
    protected function UserUpdateCar($userid,$carplate){

    }
    

}

?>