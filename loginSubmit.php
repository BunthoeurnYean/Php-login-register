<?php
if(isset($_POST['login']))
{
    $conn = mysqli_connect('localhost', 'root', '', 'student'); 
    if (!$conn) {
        die('Could not connect my sql:' .mysql_error()); 
    }
    $sql = `SELECT count(*) FROM user where username=$_REQUEST['username'] and password=$_REQUEST['password'] `; 
    $result = mysqli_query($conn , $sql);
    //$row = mysqli_fetch_object($result) > 0;
    $row = $result->fetch_row() > 0;
    if(!$row){
            echo "username or password incorrect";
    }
    else $_SESSION['username'] = $name;
    header ("Location : Welcome.php");
}   

?>
