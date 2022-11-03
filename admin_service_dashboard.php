<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <style>
        .innerright,label {
    color: rgb(16, 170, 16);
    font-weight:bold;
}
.container,
.row,
.imglogo {
    margin:auto;
}
body{
    background-color: rgb(222, 184, 184);
}
.content_heading{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 23px;

}
.img_heading{
    width: 55px;
    height: 55px;
    margin: 16px;
}

.innerdiv {
    text-align: center;
    /* width: 500px; */
    margin: 100px;
}
input{
    margin-left:20px;
}
.leftinnerdiv {
    float: left;
    width: 25%;
}

.rightinnerdiv {
    float: right;
    width: 75%;
}

.innerright {
    background-color: rgb(105, 221, 105);
}

.greenbtn {
    background-color: rgb(134,34,65);
    color: white;
    width: 95%;
    height: 40px;
    margin-top: 8px;
}

.greenbtn,
a {
    text-decoration: none;
    color: white;
    font-size: large;
}
.label_content{
    padding: 12px;
    align-item: center;
}
th{
    background-color: orange;
    color: black;
}
td{
    background-color: #fed8b1;
    color: black;
}
td, a{
    color:black;
}
    </style>
    <body>

    <?php
   include("data_class.php");

$msg="";

   if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

if($msg=="done"){
    echo "<div class='alert alert-success' role='alert'>Sucssefully Done</div>";
}
elseif($msg=="fail"){
    echo "<div class='alert alert-danger' role='alert'>Fail</div>";
}

    ?>



        <div class="container">
        <div class="innerdiv">
        <div class="content_heading">
        <img src="pg.png" alt="" class = "img_heading">
        <h1>IIT ROPAR MESS MANAGMENT</h1>
        </div>
            <div class="leftinnerdiv">
                <Button class="greenbtn" onclick="openpart('addperson')"> ADD STUDENT</Button>
                <a href="index.php"><Button class="greenbtn" > LOGOUT</Button></a>
            </div>
            
            
            <div class="rightinnerdiv">   
            <div id="addperson" class="innerright portion" style="display:none">
            <Button class="greenbtn" >ADD Person</Button>
            <form action="addperson.php" method="post" enctype="multipart/form-data">
            <label class = "label_content">Name:</label><input type="text" name="addname"/>
            </br>
            <label class = "label_content" >Pasword:</label><input type="pasword" name="addpass" />
            </br>
            <label class = "label_content">Email:</label><input  type="email" name="addemail"/></br>
            <label for="type">Choose type:</label>
            <select name="type" >
                <option value="student">student</option>
                <option value="teacher">teacher</option>
            </select>

           <input type="submit" value="SUBMIT"/>
            </form>
            </div>
            </div>
            
            
            <script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }
        </script>
    </body>
</html>