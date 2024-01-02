<?php
session_start();

// Check if user is logged in

		$agent_email=$_SESSION['username'];

		include("connect.php"); 
        $sql = "SELECT agent_id FROM agent WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $agent_email); // 's' represents a string parameter
        $stmt->execute();
        
        // Bind the result
        $stmt->bind_result($agent_id);
        
        // Fetch the result
        $stmt->fetch();
        // Close the statement
        $stmt->close();

?>

<html>
<head><title>contact </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
		
		
		.head{
	background-color:#ffffff;
	height:30px;
	
	
	}
	.header{
	background-color:#ffffff;

	
	
	}
	hr {
            border: 1px solid red;
        }
	.mob{
margin-top:20px;
font-size:20px;
color:white;
}
.nav-link{
	color:red;
	
	
	
	}
	.nav-item{
	font-family: 'Montserrat', sans-serif;
	font-size: 20px;
	font-weight: 400;
	margin-top:20px;
	}
	.logo
{
margin-top:15px;

}
.bord
		{
		width:189px;
		
		font-size:23;
		color:white;
		border:4px solid;
		border-color:#1c3e75;
		border-radius: 15px 50px 30px;
		text-align:center;
		}
		
.parallax_background{
height:320px;
width:100%;
background-image:url(./image/back.jpg);
background-repeat:no-repeat;
color:white;
font-size:30px;
font-family:"Times New Roman", Times, serif;
background-size:cover;



}
.space{

height:100px;
background:none;

}		
.realtors {
    width: 100%;
    background: #f0f2f7;
    padding-top: 105px;
    padding-bottom: 74px;
	}
	
.foot1{
	background-color:#ffffff;
	height:30px;
	
	}
.footer{
		background-color:#ffffff;
		
	
	}
.logo
{
margin-top:15px;

}
.latest{
	font-size:23px;
	color:white;
	background-color:#ffffff;
	
	}
	.lprop{
	font-size:20px;
	color:white;
	background-color:#ffffff;
	
	
	
	}
		
.Real{
	
	font-size:40px;
	color:white;
	background-color:#ffffff;
	
	
	}
	
		
		
		
    .container {
            width: 50%;
            margin: auto;
            overflow: hidden;
            padding: 10px;
            background-color: #fff;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
		
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .delete-button {
            background-color: #ff4c4c;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #ff3333;
        }
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		</style>
</head>

	<body>
	
	
	
	
	<div class="container-fluid">
			
				
					
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
									
									
									<div class="col-sm-7">
								
                                    <ul class="nav justify-content-center">
                                            <li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/index.php">HOME</a>
											  </li>
                                             <li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/add_property.php">ADD PROPERTY</a>
											  </li>
                                              <li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/agent_properties.php">VIEW PROPERTY</a>
											  </li>
                                              <li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/index.php">SIGN OUT</a>
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
		  
		  <div class="head">
					<div class="row">
						<div class="col-sm-12"> 
						</div>
					</div>
			</div>

			<hr>
			<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
			<div class="container-fluid">
						
					  
			</div>
		
		
		
				
				
			<div class="container-fluid">
                <br>
				<br>
			<center><h2> Please Find the list of below properties</h2></center>	
			<?php

				include("connect.php"); 
				// Handle property deletion if the form is submitted
				if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_property'])) {
					$property_id = $_POST['property_id'];
					// You should perform actual deletion here
				// Database connection details
				include("connect.php"); 
				
				// Insert data into the 'property_reviews' table
				$sql = "DELETE FROM properties where id=$property_id;";

				$sql2 = "DELETE FROM agent_property where property_id=$property_id and agent_id=$agent_id";

				
				if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
					echo "<script>alert('Deleting property with ID: $property_id');</script>";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				
				}

// Retrieve data from the database
$email= $_SESSION['username'];
$sql = "SELECT DISTINCT properties.*, agent.email,agent.username FROM properties JOIN agent_property ON properties.id = agent_property.property_id JOIN agent ON agent_property.agent_id = agent.agent_id where agent.email='$email';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display the table headers
    echo "<table>
            <tr>
                <th>ID</th>
                <th>location</th>
                <th>rooms</th>
                <th>Price</th>
                <th>property_images</th>
                <th>email</th>
                <th>Delete this property</th>
            </tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["location"]."</td>
                <td>".$row["rooms"]."</td>
                <td>".$row["price"]."</td>
                <td>".$row["property_images"]."</td>
                <td>".$row["email"]."</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='property_id' value='".$row["id"]."'>
                        <button type='submit' class='delete-button' name='delete_property'>Delete</button>
                    </form>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
		</div>
	
		  
		  <br>
		  <hr>
					<div class="foot1">
						<div class="row">
							<div class="col-sm-12"> 
							</div>
						</div>
					</div>
					
			<div class="footer">
						<div class="row">
							<div class="col-sm-1">
							</div>
						
						<div class="col-sm-2"> 
							<div class="logo">
								<a href="#">
								<img src="image/llogo.png"  >
								</a>
							</div>
							
						</div>
						
						
					<div class="col-sm-7">
					
					<ul class="nav justify-content-center">
											<li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/index.php">HOME</a>
											  </li>
											  <li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/properties.php">ADD PROPERTY</a>
											  </li>
                                              <li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/agent_properties.php">VIEW PROPERTY</a>
											  </li>
                                              <li class="nav-item">
												<a class="nav-link" href="http://localhost/finalweb/index.php">SIGN OUT</a>
											  </li>
											 								  
										</ul>

					
					</div>
			
				</div>
				
			</div>
			
				
	</div>
	
	
	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

</html>