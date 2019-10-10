<?php
//Return the user result to see there schedule that they picked on the form. 
  echo "The excercise you chose was: " . $_GET["excercise"];


  echo "<br/> You will be " . $_GET["excercise"] ." for " .$_GET["duration"] ; 


  echo "<br/> You are schedule to do " . $_GET["excercise"] ." for " .$_GET["duration"]. " at: " 
 . $_GET["time"]; 
 

?>
   
<!-- Allow the user to see the form and remake there schedule if desire --> 

<form action="f1.php" method="GET">
<h2> Exercise </h2>
            <form action="f1.php" method="GET">
			<fieldset><legend> Running/Swimming Routines</legend>
			<p>Are you running or swimming?<br/>
  <input type="radio" name="excercise" value="Running" checked> Running<br>
  <input type="radio" name="excercise" value="Swimming"> Swimming<br>
		
			<p>How long do you want to do this excercise?<br/>
			<input name="duration" type="text" size="12" /></p>
			<p> What time do you want to do this excercise? <br/> 
			<input name="time" type="text" size="12" /></p>
  <input type="submit" value="Submit">



