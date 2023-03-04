<?php
	$a=5;
	$b=10.45;
	$c="hello";
	$d='world';
	$e= null;
	$f=true;
	$g=false;
	$arry=array($c,$d,"ghfhvfhvghvgfh");
	var_dump($a);
	var_dump($b);
	var_dump($c);
	var_dump($d);
	var_dump($e);
	var_dump($f);
	var_dump($g);
	var_dump($arry);
	
	define("hvhv","hello");
	echo constant("hvhv");
	echo "\n";
	
	class student{
		private $name;
		public $enrollment;
		const class_name = "CS1";
		public function __construct($name,$enrollment){
			$this -> name = $name;
			$this -> enrollment = $enrollment;
			echo "name of the function: ",__FUNCTION__,"\n";
		}
		public function display(){
			echo "name of the class: ",__CLASS__,"\n";
			echo "name of the method: ",__METHOD__,"\n";
			return student::class_name." 's student name: ".$this->name." and enrollment: ". $this->enrollment."\n";
		}
	}
	$std = new student("Amyush",202103103510253);
	echo $std -> display() , "\n";
	echo "Line number is: ". __LINE__ ."\n";
	echo "File name and path is: ". __FILE__ ."\n";
	echo "Php version is: ". PHP_VERSION ."\n";
	echo "Php os is: ". PHP_OS ."\n";
	
?>
