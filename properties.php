
<?php 
    include("connect.php"); 
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $location=$_POST['selected_location']; 
		echo $location;
        $q="SELECT DISTINCT properties.*, agent.email,agent.username FROM properties JOIN agent_property ON properties.id = agent_property.property_id JOIN agent ON agent_property.agent_id = agent.agent_id where location='$location';"; 
        $result=mysqli_query($conn,$q); 
    }  
    else { 
        $q= "SELECT DISTINCT properties.*, agent.email,agent.username FROM properties JOIN agent_property ON properties.id = agent_property.property_id JOIN agent ON agent_property.agent_id = agent.agent_id;"; 
        $result=mysqli_query($conn,$q); 
    } 
	include("connect.php"); 

	$loc= "select location_name from locations"; 
	$locations=mysqli_query($conn,$loc); 
	if ($locations) {
		// Create an array to store the values
		$dropdownValues = array();
	
		// Fetch data and store in the array
		while ($row = $locations->fetch_assoc()) {
			$dropdownValues[] = $row['location_name'];
		}
	
		// Close the result set
		$locations->close();
	
		// Close the database connection
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
?> 
  
<html>
<head><title>Properties </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		hr {
            border: 1px solid red;
        }
	.dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: red;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-item {
            padding: 12px;
            text-decoration: none;
            display: block;
            color: #fff;
        }

        .dropdown-item:hover {
            background-color: #f9f9f9;
        }
	.head{
	background-color:#ffffff;
	height:30px;
	
	
	}
	
	.header{
	background-color:#ffffff;

	
	
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
		.logo
{
margin-top:15px;

}

.mob{
margin-top:20px;
font-size:20px;
color:white;
}
.page-link:hover{

background-color:#428bca;


}


.foot1{
	background-color:#ffffff;
	height:30px;
	
	}
	
.footer{
		background-color:#ffffff;
		
	
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
		<br>
		<div class="row">
			<div class="col-sm-2">
			<nav class="sidebar" style="background:red; height:100%;">
				<div class="sidebar">
								<ul class="nav flex-column">
								  <li class="nav-item text-center">
								  <h3 class="text-center" style="color:white;"><b><br>SELECT LOCATION</b></h3>
								  <form method="post"> 
							 
        			<select id="selected_location" name="selected_location"> 
					<?php
					// Iterate over the array and create options
					foreach ($dropdownValues as $value) {
						echo "<option class='dropdown' value='$value'>$value</option>";
					}
					?>
							</select>
							<br>
							<br>
					<center><button class="dropdown" type="submit">Filter</button><center>
								  </form>	
								</ul>
				
								
								
								
				</div>
			</nav>
			</div>
				
			<div class="col-sm-8">

				<div class="card-deck">
					<?php
					
					// Retrieve property data from the database
					
			
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							$image_url=$row['property_images'];

							echo '<div class="card">';
							
							echo "<img src='$image_url' class='card-img-top' alt=''>";
							echo '<div class="card-body">';
							echo '<p class="card-text text-center">';
							echo '<table>';

							echo '<tr><th>Location</th><td>' . $row["location"] . '</td></tr>';
							echo '<tr><th>Rooms</th><td>' . $row["rooms"] . '</td></tr>';
							echo '<tr><th>Price</th><td>$' . number_format($row["price"], 2) . '</td></tr>';
							echo '<tr><th>Contact</th><td>' . $row["email"] . '</td></tr>';
							echo '</table>';
							echo '</p>';
							echo '</div>';
							echo '</div>';
						}
					} else {
						echo "<p>No properties found in the database.</p>";
					}
			
					// Close the database connection
					$conn->close();
					?>
				</div>
			</div>
			
			<div class="col-sm-2">
			<nav class="sidebar" style="background:red; height:100%;">
				<p style="color:white; font-size:40px;" class="text-center"><br><br><b>DownTown <br>Estate<br> THE REAL ONE!</b></p>
			</nav>
			</div>
			
			
		</div>
		
		<div class="row">
			<div class="col-sm-5">
			</div>
			<div class="col-sm-3">
			<br><br>
				<nav aria-label="Page navigation example">
				  <ul class="pagination">
					<li class="page-item">
					  <a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					  </a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
					  <a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					  </a>
					</li>
				  </ul>
				</nav>
			</div>
			<div class="col-sm-4">
			</div>
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
			
				
	</div>
	
	
	
	
	
	
	
	
	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

</html>