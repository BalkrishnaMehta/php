<?php	
	//phpinfo();
	/*echo "Hello World!<br>"; // br won't work in terminal \n can be used br will work on browser
	eCho "Hello World!<br>"; //keyward are not case sensitive variable are case sensitive
	ECHO "Hello World!<br>";
	$ab=5; // variable declare by $ symbol and no declaration of data type.
	echo "number is ". $ab ."<br>"; // this will work and show output and other two will not work
	echo "number is ". $Ab ."<br>";
	echo "number is ". $AB ."<br>";*/

	$num = 5; // global scope
	function work(){
		$num2 = 10; // local variable scope is limited to only this function.
		//echo "Variable num value inside the function: " . $num ."<br>" ;
		global $num; // global variable is used to access global variable otherwise global variable won't work in function.
		echo "Variable num value inside the function: " . $num ."<br>" ;
	}
	work();
	echo "Variable num value outside function: " . $num;

	function myTest(){
		static $num = 0; // static variable is only onced declare and then skipped.
		echo $num . "<br>";
		$num++;
	}
	myTest();
	myTest();
	myTest();
	
?>
