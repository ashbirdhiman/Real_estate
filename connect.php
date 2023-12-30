<?php
					// Connect to your database (replace with your actual database credentials)
					$dbHost = 'localhost';
					$dbUser = 'root';
					$dbPass = '';
					$dbName = 'real_estate';
					$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
			
					// Check the connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					
?>