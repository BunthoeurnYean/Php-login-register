<?php
    $con = mysqli_connect("localhost","root","" ,"student");
        if(!$con) {
            echo "fail to connect to database";
            exit(); 
        }

    if ( isset( $_POST['submit'] ) ) {

        $name = explode(" ",$_REQUEST['fullname']);
        $f = $name[0];
        $l = $name[1];
        $u = $_REQUEST['username'];
        $e = $_REQUEST['email'];
        $g = $_REQUEST['gender'];
        $p = $_REQUEST['phone1'].$_REQUEST['phone'];
        insert($u ,$f ,$l ,$e ,$g,$p );
        exit;
    }

function insert($username ,$firstname , $lastname , $email ,$gender , $phone){
    global $con;
    $password = str_suffle('abc#@1f'.strval(rand(100000,999999)));
    $result = mysqli_query( $con,`INSERT into user(username , fistname , lastname, email  , gender , phone , password) 
                            VALUES ('$username' , '$firstname' ,'$lastname' , '$email' ,'$gender' ,'$phone' ,'$password' )`);
    if (!result) {
        echo "fail!";
    } 
    else echo "success!";
}

?>
