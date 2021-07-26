<?php

/***

	When Error arise then from the next line, execution will stopped that's why try catch
	try catch -> control run time error not syntax error
	error dhora poruk r na poruk sob somoy finally block ar code execute hobe
	throw keyword-> create custom error 

***/

	//create function with an exception
	function checkNum($number) {
	  if($number>1) {
	    throw new Exception("Value must be 1 or below");
	  }
	  return true;
	}

	//trigger exception in a "try" block
	try {
	  checkNum(2);
	  //If the exception is thrown, this text will not be shown
	  echo 'If you see this, the number is 1 or below';
	}

	//catch exception
	catch(Exception $e) {
	  echo 'Message: ' .$e->getMessage();
	}

?>