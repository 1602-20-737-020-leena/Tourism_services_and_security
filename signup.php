<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<h1 id="titl">TOURISM SERVICES AND SECURITY</h1>
    <style>
        body{
            background-image: url('https://cf-images.us-east-1.prod.boltdns.net/v1/static/3281700261001/d5af8031-2862-4247-a83b-17a10ba459fe/daab5b96-df69-481c-ad06-f54b1d7d3449/1920x1080/match/image.jpg');
        }
        img{
            background-size: cover;
        }
    </style>
</head>
<body>

	<style type="text/css">
	#titl{
		
		padding-left: 14em;
		color: black;

	}
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: #f4511e;
		border: none;
        opacity: 0.6;
        transition: 0.3s;
	}
    #button:hover{
        cursor: pointer;
        opacity: 1
    }

	#box{
        margin-top: 150px;
        margin-left: 800px;
		background-color: darkslategray;
		width: 300px;
		padding: 20px;
        padding-right: 60px;
	}
    form #x{
        text-decoration: none;
        color: aliceblue;
    }
    form #x:hover{
        color: aquamarine;
    }
	.item2 {
    height: 70px;
    box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;
	margin-left: 125px;
}

	</style>

	<div id="box">
		
		<form method="post">
		    <a href="index.php"><img class="item2" src="https://images-workbench.99static.com/iwtka28M5zc-aYIwxZ2_DkoOQRw=/99designs-contests-attachments/19/19156/attachment_19156974" ></a>>
			<div style="font-size: 20px;margin: 10px;color: white;">SIGN UP</div>
            <h3>Username</h3>
			<input id="text" type="text" name="user_name"><br><br>
            <h3>Password</h3>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php" id="x">Already have an account?<br>Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>