<?php
if(isset($_POST['login']))
{
    $conn = mysqli_connect('localhost', 'root', '', 'student'); 
    if (!$conn) {
        die('Could not connect my sql:' .mysql_error()); 
    }

    $name = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    $sql = `SELECT * FROM user where username=$name and password=$pass `; 
    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_object($result) > 0;
    if(!$row){
            echo "username or password incorrect";
    }
    else $_SESSION['username'] = $name;
    header ("Location : Welcome.php");
}   

?>
