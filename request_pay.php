<?php

include("data_class.php");

$adddate=$_POST['adddate'];
$addbreakfast= $_POST['addbreakfast'];
$addlunch= $_POST['addlunch'];
$adddinner= $_POST['adddinner'];
$type= $_POST['type'];

$total = $addbreakfast * 30 + $addlunch * 50 + $adddinner *60;



$obj=new data();
$obj->setconnection();
$obj->addnewcoupon($adddate,$addbreakfast,$addlunch,$adddinner,$type, $total);
