<?php
class Db_Connect{

    public $host = 'localhost';
    public $dbname = 'healthyinsurance';
    //public $user = 'root';
    //public $pass = 'manifest1!';

    public $user = 'healthyuser';
    public $pass = 'healthypassword1!@';

    public function __construct(){

        $host = $this->host;
        $dbname = $this->dbname;
        $user = $this->user;
        $pass = $this->pass;
        $DBH = '';

        # MySQL with PDO_MYSQL
        $this->DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $this->DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    }

    public function insert_leads($fname,$lname,$email,$phone,$address,$city,$state,$zipcode	,$dob){

        /****Insert Leads****/
        $STH  = $this->DBH->prepare("INSERT INTO leads(fname,lname,email,phone,address,city,state,zipcode,dob)
                                       value (:fname,:lname,:email,:phone,:address,:city,:state,:zipcode,:dob)");
        $STH->execute( array(':fname'=>$fname,':lname'=>$lname,':email'=>$email,':phone'=>$phone,':address'=>$address,':city'=>$city,
            ':state'=>$state,':zipcode'=>$zipcode,':dob'=>$dob));

    }

    public function fetch_leads(){

        /****Fetch Leads****/
       $query = "SELECT * FROM leads";
       $prepare = $this->DBH->prepare($query);
       if($prepare){
           $prepare->execute();
           return  $prepare->fetchAll();

       }else{
           $prepare->errorInfo();
       }
    return false;
    }

    public function delete_leads($id){

        /****Fetch Leads****/
        $query = "DELETE  FROM leads WHERE `id` = :id";
        $prepare = $this->DBH->prepare($query);
        if($prepare){
            $prepare->execute(array(':id'=>$id));
            echo "Successfully Deleted";

        }else{
            $prepare->errorInfo();
        }
    }
}
