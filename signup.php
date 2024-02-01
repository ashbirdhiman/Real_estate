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
   

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }

        button {
            background-color: red;
            color: white;
            padding: 10px 15px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
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
								<h1 style="text-align:center;font-family:Arial;color:#0e2b59;"><b>Sign Up</b></h1>
							  
							  </div>
							  <div class="col-sm-4">
							  </div>
					  
					  
					  </div>
					  
					  <br>
					  
					
				   
					 
                <label for="user_email">Enter your Email:</label>
				<input type="email" id="user_email" name="user_email" required>

                <label for="user_password">Enter your password:</label>
				<input  id="user_password" name="user_password" required>

                <label for="username">Enter your username :</label>
				<input type="username" id="username" name="username" required>


                <label for="contact_number">Enter your Contact Number :</label>
				<input type="contact_number" id="contact_number" name="contact_number" required>

                

				<label for="agency_affiliation">Agency Affialiation:</label>
				<select id="agency_affiliation" name="agency_affiliation" required>
					<option value="Dtnrealtors">Dtnrealtors</option>
				</select>


				<center><button type="submit">Sign Up</button><center
           
			</form>
            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user_email = $_POST["user_email"];
    $password = $_POST["user_password"];
    $username = $_POST["username"];
    $contact_number = $_POST["contact_number"];
    $agency_affiliation = $_POST["agency_affiliation"];
    

    // Database connection details
    include("connect.php"); 

    // Insert data into the 'property_reviews' table
    $sql = "INSERT INTO agent (username, email, password, contact_info,agency_affiliation)
            VALUES ('$user_email', '$password','$username', '$contact_number', '$agency_affiliation')";

    if ($conn->query($sql) === TRUE) {
        echo "User added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} 
?>



 

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>