<?php include("db.php");

class data extends db {

    private $addbreakfast;
    private $adddate;
    private $adddinner;
    private $addlunch;
    private $total;

    private $book;
    private $userselect;
    private $days;
    private $getdate;
    private $returnDate;





    function __construct() {
        // echo " constructor ";
        echo "</br></br>";
    }


    function addnewuser($name,$pasword,$email,$type){
        $this->name=$name;
        $this->pasword=$pasword;
        $this->email=$email;
        $this->type=$type;


         $q="INSERT INTO userdata(id, name, email, pass,type)VALUES('','$name','$email','$pasword','$type')";

        if($this->connection->exec($q)) {
            header("Location:admin_service_dashboard.php?msg=New Add done");
        }

        else {
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }



    }
    function addnewcoupon($adddate,$addbreakfast,$addlunch,$adddinner,$type, $total){
        
        $this->date = $adddate;
        $this->breakfast = $addbreakfast;
        $this->lunch = $addlunch;
        $this->dinner = $adddinner;
        $this->total = $total;
        $this->type=$type;


         $q="INSERT INTO coupon_data(id, date, breakfast, lunch, dinner, total,type)VALUES('','$adddate','$addbreakfast','$addlunch','$adddinner','$total','$type')";

        if($this->connection->exec($q)) {
            header("Location:otheruser_dashboard.php?msg=New Add done");
        }

        else {
            header("Location:otheruser_dashboard.php?msg=Register Fail");
        }
    }
    function userLogin($t1, $t2) {
        $q="SELECT * FROM userdata where email='$t1' and pass='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();
        if ($result > 0) {

            foreach($recordSet->fetchAll() as $row) {
                $logid=$row['id'];
                header("location: otheruser_dashboard.php?userlogid=$logid");
            }
        }

        else {
            header("location: index.php?msg=Invalid Credentials");
        }

    }

    function adminLogin($t1, $t2) {

        $q="SELECT * FROM admin where email='$t1' and pass='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();

        if ($result > 0) {

            foreach($recordSet->fetchAll() as $row) {
                $logid=$row['id'];
                header("location: admin_service_dashboard.php?logid=$logid");
            }
        }

        else {
            header("location: index.php?msg=Invalid Credentials");
        }

    }



    

    }