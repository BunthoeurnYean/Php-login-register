<?php
    session_start();
    echo "Hello, &nbsp;"; 
    echo($_SESSION['username']); 
    echo ". Welcome to RE-EXAM.";
?>