<?php
// This function displays a message when the user inputs their age
	// get user input from textfields
	$age = $_POST['age'];

		// if the age is greater than or equal to 18, display "You can see an R-rated movie alone!"
	if ($age >= 18) {
		echo "You can see an R-rated movie alone!";
	} 
	// otherwise, if the age is greater than or equal to 13, display "You can see a PG-13 rated movie alone!"
  else if ($age >= 13) {
	  echo "You can see a PG-13 rated movie alone!";
  }
	// otherwise, if the age is greater than or equal to 10, display "You can see a G or PG rated movie alone!"
  else if ($age >= 10) {
	  echo "You can see a G or PG rated movie alone!";
  }
	// otherwise, if the age is less than 3, display "You are too young to see any movies alone."
  else {
	  echo "You are too young to see any movies alone.";
  }
?>