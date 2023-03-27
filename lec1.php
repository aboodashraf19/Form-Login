<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

</head>
<body>
	<h2>Login Form</h2>
	<form action="login.php" method="post">
		<label>Username: </label>
		<input type="text" name="username"><br><br>
		<label>Password: </label>
		<input type="password" name="password"><br><br>
		<input type="submit" value="Login">
	</form>  

    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == 'admin' && $password == ']') {
		echo "Welcome, $username!";
	} else {
		echo "Invalid username or password.";
	}
}
?>
<style>
    body {
	font-family: Arial, sans-serif;
	background-color: #f2f2f2;
}

h2 {
	margin-top: 60px;
	text-align: center;
	color: #222;
    font-family: Arial, sans-serif;
}

h2:hover{
    color:red;
    font-style: bold
}

form {
	max-width: 500px;
	margin: 50px auto;
	padding: 20px;
	background-color: #fff;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
	border-radius: 5px;
}

label {
	display: block;
	margin-bottom: 10px;
	color: #333;
    
}

label:hover{
    font-size: 17px;
    color:blue;
    font-style: italic;
}

input[type="text"], input[type="password"] {
	width:90%;
	padding: 10px;
	margin-bottom: 22px;
 	border-radius: 5px;
	border: none;
	background-color: #f2f2f2;
    
}



input[type="submit"] {
	display: block;
	margin-top: 7px;
	padding: 10px;
	background-color: #333;  
	color: #fff; 
	border-radius: 5px;
	cursor: pointer;

}

</style> 

</body>
</html>
