<!DOCTYPE html>
<html>
<head>



<style> 
body{
    background-color:lightgray;
}

h1{
    text-align:center;
}
.div1 {
width: 300px;
height: 100px;
border: 1px solid black;

}   

</style>

<?php
ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

require_once 'security.php';
session_start();

include_once("functions.php");
if(isset($_POST['update']) && !empty($_POST)){

    try {  

        $id = $_SESSION['id_user'];
        $username = $_POST['username'];
        $firstname= $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $email= $_POST['email'];

        $query = [
            "id" => $id,
            "firstname" => $firstname,
            "lastname"   => $lastname,
            "username"   => $username,
            "email"      => $email,
        ];
    
        $sql = "UPDATE users SET username = :username, lastname = :lastname, firstname = :firstname, email = :email WHERE id = :id";
        $sqlExec = $login->prepare($sql);
        $sqlExec->execute($query);


        $_SESSION['message'] = "update succesful";
        header("location:home.php");
    
    }
    catch (PDOException $e) {
    die('error connecting to database'. $e-> getMessage());
    }
}

?>




</head>
<body>
<h1> < funtions > </h1>
<div class="div1"> </div><input type="button" value="Generate object" />
<br>
<div class="div1"> </div> </div><input type="button" value="Revert object" />
<br>
<div class="div1"> </div> </div> <input type="text" name="name">
 <input type="submit" value="Get a nickname">

</body>
</html>