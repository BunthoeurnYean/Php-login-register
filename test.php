<html> 
    <head> 

    </head> 
    <body>
    <?php
    $fullname = $_POST["name"];
    $firstname = strtok($fullname, ' ');
    $lastname = strstr($fullname, ' ');
    $fourdigitrandom = rand(1000,9999);
    $symbol = substr(str_shuffle(str_repeat("@#", 5)),0, 1);
    ?>
    <form name="frmRegistration" method="post" action="test.php">
    <br>
    //full name = first + last
    //random number //random symbol
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $fullname?>"/>
    &nbsp; &nbsp;
    <button value="Generate Password">Generate Password</button>
    <br><br>
    <label>Sex:</label>
    <input type="radio" name="radio" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"/> Female
    <input type="radio" name="radio" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"/> Male
    <br><br>
    <label>Password:</label>
    <input type="text" name="password" value="<?php echo $firstname,$symbol,$fourdigitrandom;
    ?>" />
    <br><br>
    ?>"/>
    <label>Email:</label>
    <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" />


    <label>Phone number</label> <select name="phone1">
    <option value="012">012</option> <option value="010">010</option> <option value="097">097</option>
    </select>
    <input type="text" name="phone2" value="<?php if(isset($_POST['phone'])) echo
    $_POST['phone']; ?>"/>
    <br><br>
    <input type="submit" class="button" name="insert" value="Insert" />

    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['insert'])) 
    {
    insert(); }
    function insert()
    {
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['insert'])) {
    include_once 'database.php'; if(isset($_POST['insert']))
    {
    $name = $_POST["name"];
    $sex = $_POST["radio"]; $password = $_POST['password']; $email = $_POST['email']; $phone1 = $_POST['phone1']; $phone2 = $_POST['phone2'];
    $phone = "{$phone1} {$phone2}";
    $sql = "INSERT INTO user (fullname, sex, password, email, phonenumber) VALUES ('$name','$sex','$password','$email','$phone')";
    if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully.";
    } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    
}
mysqli_close($conn); }
    }
    }
?>
    </form> 
</body> 
</html>