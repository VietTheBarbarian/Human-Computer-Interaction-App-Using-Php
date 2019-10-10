


<html>
  <head>
    <h1>Example of taking data from a form and insert into a database table</h1>
	<form action="insert.php" method="post">
	  Email<input type="text" name="email"><br/>
	  First Name:<input type="text" name="fname"><br/>
	  Last Name:<input type="text" name="lname"><br/>


	  <input type="submit">
	</form>
	
  </body>
</html>



<?php
/*
  An illustration of connecting to a mysql database an query some data
*/
  //obtaining user input
    //database information
  $servername = "localhost";
  $username = "HCI"; //put in the appropriate values
  $password = "9635372437";
  $dbname = "HCI";//database you want to use
 $conn =  mysqli_connect($servername, $username, $password, $dbname);
 
  $email = $_POST['email'];
  $firstName = $_POST['fname'];
  $lastName = $_POST['lname'];
  

$query = "INSERT INTO user_profile(email, fname, lname) " .
            "values('$email', '$firstName', '$lastName')";	
			
  //display the assembled query for verification purpose
  echo "<br/>My Insert Query:<br/>" . $query  . "<br/>"; 

  //display the assembled query for verification purpose
  echo "<br/>My Insert Query:<br/>" . $query  . "<br/>";
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  
  //execute the insert query
  $result = $conn->query($query);
  if($result === true)
    echo "<br/> A new record is added!";
  else 
      echo "<br/> A email already exist. Try again:" . $conn->error . "<br/>";
  
  //build a select query  
  $query = "select * from user_profile";
  
  //display the assembled query for verification purpose
  echo "<br/>My Select Query:<br/>" . $query  . "<br/>";
 
  
  ////////////////////////////////////////////////////////
  // Retrieving data from a database to verify the insertion of user inputs

  $result = $conn->query($query);

  //display the result
  // output data of each row
  if ($result->num_rows > 0) {
    echo"<h2>Content of database </h2><br/>";
    while($row = $result->fetch_assoc()) {
      echo "Name: " . $row["fname"]. "<br/> Email: " . 
        $row["email"] . "<br/> Created:" . $row["created_on"]. "<br/><br/>";
    }
  }else {
    echo "0 results";
  }
   
  //all done
  echo "Connected successfully";
  $conn->close(); // close connection

?>