<html>
	<body>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "test";
			$conn = new mysqli($servername, $username, $password, $db);	
			if ($conn->connect_error) 
			{
  				die("Connection failed: <br>" . $conn->connect_error);
			}
			else
			{
				echo "Connected successfully<br>";
			}
			// $create = "CREATE TABLE animal (id int(2), name varchar(30), age int(2), gender varchar(2), type varchar(8))";
			// if($conn -> query($create) === TRUE)
			// {
			// 	echo "Table created succesfully<br>";
			// }
			// else
			// {
			// 	echo "Error creating table<br>".conn->error;
			// }


			// $insert = "INSERT INTO animal (id, name, age, gender, type) VALUES (01,'cat', 5, 'M', 'Maml')";
			// $insert = "INSERT INTO animal (id, name, age, gender, type) VALUES (02,'turtle', 10, 'F', 'Rept')";
			// $insert = "INSERT INTO animal (id, name, age, gender, type) VALUES (03,'frog', 12, 'M', 'Amphi')";
			// $insert = "INSERT INTO animal (id, name, age, gender, type) VALUES (04,'bee', 6, 'F', 'invrt')";
			// $insert = "INSERT INTO animal (id, name, age, gender, type) VALUES (05,'lizard', 20, 'F', 'Amphi')";
			// $insert = "INSERT INTO animal (id, name, age, gender, type) VALUES (06,'monkey', 8, 'M', 'Maml')";
			// $insert = "INSERT INTO animal (id, name, age, gender, type) VALUES (07,'rabbit', 5, 'M', 'Maml')";
			// $insert = "INSERT INTO animal (id, name, age, gender, type) VALUES (08,'snake', 20, 'F', 'Rept')";
			// $insert = "INSERT INTO animal (id, name, age, gender, type) VALUES (09,'butterfly', 3, 'F', 'invrt')";

			// if ($conn -> query($insert) === TRUE)
			// {
			// 	echo "Data Inserted successfully";
			// }
			// else
			// {
			// 	echo "Data Insertion failed".$conn->error;
			// }

			// $p_key = "ALTER TABLE animal ADD PRIMARY KEY (id)";
			// if ($conn -> query($p_key) === TRUE)
			// {
			// 	echo "Selected Primary Key successfully";
			// }
			// else
			// {
			// 	echo "Primary Key Selection failed".$conn->error;
			// }

			$u_key = "ALTER TABLE animal ADD UNIQUE KEY (name)";
			if ($conn -> query($u_key) === TRUE)
			{
				echo "Selected Unique Key successfully";
			}
			else
			{
				echo "Unique Key Selection failed".$conn->error;
			}
		?>
	</body>
</html>