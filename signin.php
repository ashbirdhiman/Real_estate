<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

   // Database connection details
   include("connect.php"); 

    // SQL query to check if email and password match in the 'agent' table
    $sql = "SELECT * FROM agent WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

	
    if ($result->num_rows > 0) {
		$_SESSION['username'] = $email;
        header("Location: http://localhost/finalweb/agent_properties.php");
        exit();
    } else {
        echo "Invalid email or password";
    }

    // Close the database connection
    $conn->close();
} 
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
.head{
	background-color:#ffffff;
	height:30px;
	
	
	}
	hr {
            border: 1px solid red;
        }
	
	.header{
	background-color:#ffffff;

	}
	.nav-link{
	color:black;
	
	
	
	}
	.nav-item{
	font-family: 'Montserrat', sans-serif;
	font-size: 20px;
	font-weight: 400;
	margin-top:20px;
	}

</style>
    <title>Sign-In</title>
</head>
<body >
					
<div class="head">
					<div class="row">
						<div class="col-sm-12"> 
						</div>
					</div>
				</div>
	<div class="header">
								<div class="row">
										<div class="col-sm-2">
										</div>
									
									<div class="col-sm-1"> 
										<div class="logo">
											<a href="#">
											<img src="image/logo.png" width="100px" >
											</a>
										</div>
										
									</div>
									
									
									<div class="col-sm-">
									<ul class="nav justify-content-center">
											<li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/index.php">HOME</a>
											  </li>
											  <li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/properties.php">PROPERTIES</a>
											  </li>
											  <li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/contact.html">CONTACT</a>
											  </li>
											  
											  <li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/enquire.php">ENQUIRE-US</a>
											  </li>
											  <li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/review.php">REVIEW-US</a>
			
												<li class="nav-item">
													<a class="nav-link" href="http://localhost/finalweb/signin.php">SIGN IN</a>
												  </li>
											  </li>
											  
										</ul>

								
								
								
								
								
								</div>
								
						
							</div>
						</div>	  
		  
		  <div class="head">
					<div class="row">
						<div class="col-sm-12"> 
						</div>
					</div>
			</div>

			<hr>
              <div class="container">
			  
			
			 
			  
			  
               <form style="background-color:white;"  method="Post"> 
              <div class="container ">
						
					<div class="row">
					 <div class="col-sm-4">		
					</div>
					<div class="col-sm-4">	
							<br>
						<div class="logo">
								<a href="#">
								<h1 align="center">
								<img src="image/logo.png" width="200px">
								</h1>
								</a>
						</div>
					</div>
					<div class="col-sm-4">		
					</div>
	
					</div>
						<br>
					  <div class="row">
							  <div class="col-sm-4">
							  </div>
							  <div class="col-sm-4">
								<h1 style="text-align:center;font-family:Arial;color:#0e2b59;"><b>LOGIN HERE</b></h1>
							  
							  </div>
							  <div class="col-sm-4">
							  </div>
					  
					  
					  </div>
					  
					  <br>
					  
						<div class="row">
						  <div class="col-sm-4">
						  </div>
						  <div class="col-sm-4">
							<div class="input-group mb-3">
								<input type="email" style="height:55px;" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1">
							  </div>
						  </div>
						  <div class="col-sm-4">
						  </div>
						</div>
					  </div>
					  <div class="container">
						<div class="row">
						  <div class="col-sm-4">
						  </div>
						  <div class="col-sm-4">
							<div class="input-group mb-3">
								<input type="password" class="form-control" style="height:55px;" placeholder="Password" name="password" aria-describedby="basic-addon1">
							  </div>
						  </div>
						  <div class="col-sm-4">
						  </div>
						</div>
					  </div>
				   
					  <div class="container">
						<div class="row">
						  <div class="col-sm-4">
						  </div>
						  <div class="col-sm-4">
							<button type="submit" class="btn btn-dark btn-lg btn-block">Login</button>
						  </div>
						  <div class="col-sm-4">
						  </div>
						</div>
					</div>

					<div class="container">
						<div class="row">
						  <div class="col-sm-4">
						  </div>
						  <div class="col-sm-4">
						  <br>
						  <h5 align="center">
							<br>
							<br>
							<p class="font-weight-normal">Dont have an account? <a href="http://localhost/finalweb/signup.php">Sign up here</a></p>
							</h5>
						  </div>
						  <div class="col-sm-4">
						  <br>
						  </div>
						</div>
					</div>
           
			</form>


 

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>