<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form action="submitPut.php" method="post">
<h1>Post</h1>

<input type="text" name="fullname" placeholder="FullName" />
<br>
<input type="text" name="username" placeholder="Username" />
<br>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>
<br>
<input type="text" name="email" placeholder="email" />
<br>
<select name="phone1" id="phone">
  <option value="123">123</option>
  <option value="321">321</option>
  <option value="412">412</option>
</select>

<input type="text" name="phone" placeholder="phone" />
<br>

<br>
<input type="submit" name="submit" />


</form> 

</body>
</html>