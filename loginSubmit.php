<?php
if(isset($_POST['login']))
{
    $servername = 'localhost';
    $username = 'root';
    $password = ''; 
    $dbname = "student";
    $conn = mysqli_connect($servername, $username, $password, "$dbname"); 
    if (!$conn) {
        die('Could not connect my sql:' .mysql_error()); 
    }

    $name = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    $sql = `SELECT * FROM user where username=$name and password=$pass `; 
    $result = mysqli_query($conn , $sql);

    if(!result){
            echo "username or password incorrect";
    }
    else $_SESSION['username'] = $name;
    header ("Location : Welcome.php");
}   

?>
