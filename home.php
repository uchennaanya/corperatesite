<?php require_once'header.php'; ?>
<?php

/*$name = "Uchenna Martins Anya.";
$address = "Aba Ngwa No. 12";

echo "My name is " . $name . "Address " . $address;

$x = 5 /* + 15  + 5;
echo $x."<br>";

/*	$x = 5985;
	var_dump($x);
	
	$cars = array("Volvo","BMW","Toyota");
	
	var_dump($cars);
	
	class car{
		
		public $name;
		
		public function getMyName($name){
		echo $this->name = $name;
			
		}
	}
		$objMyName = new car();
		
		$objMyName->getMyName('Uchenna');
		
		$x = "Hello world!";
		$x = null;
		var_dump($x);
		
		define("ruby", "Ruby is a small girl", true);
		
		echo ruby;
	*/
	
	/*if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$age = $_POST['age'];
		if ($age == "") {
			echo 'Field cannot be empty';
		} else if ( $age < 18 ) {
			
			echo 'your not eligable!';
		} else {
			echo 'Your eligable!';
		}
	}
	
	
	if (ISSET($_POST['submit'])){
		
		$grade = $_POST['grade'];
		
		if ($grade =="") {
			
			echo 'Grade must not be a null value!';
			
		} else {
			
			switch($grade) {
				
			case $grade >= 75:
				echo 'Excellent';
			break;
			case $grade >= 65:
				echo 'Good';
			break;
			case $grade >= 55:
				echo 'credit';
			break;
			
			default:
				echo 'You failed!';
		}
			
		}
	}
	*/
	    
	/*function factorial($number) { 
	 
		if ($number < 2) { 
			return true; 
		} else { 
			return ($number * factorial($number-1)); 
		} 
	}
	 
	echo factorial(4)*5;
*/
	/*
	function factorial($n){

		if ($n < 2 ){

			return 1;

		} else {

			return ($n * factorial($n - 1));

		}
	}
	*/
		$car = array("BMW","BENZ","VOLVO");

		$len = count($car);
		
		for($i = 0; $i <= $len; $i++) {
			echo $car[$i];
		}

		$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
		//echo "Peter is " . $age['Ben'] . " years old.";

		foreach($age as $myAge=>$key){
			echo $myAge .' '.' '. $key;
		}

		$numbers = array(4, 6, 2, 22, 11);
		//echo sort($numbers);

        function factorial($number){
		 $result = 1;
		 if($number > 1){
		  for($i=2; $i<=$number; $i++){
			  echo "<br>".$result;
		  $result *= $i;
		  }
		 }
			return $result;
		}
		
echo "<br><br><br><br>".factorial(4);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
<html>
	<head>
		<title>My Page</title>
	</head>
	<body>
		<form method ="POST">
			<input type = "number" name="grade" placeholder="Your age here!">
			<input type="submit" name="submit" >
		</form>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		  Name: <input type="text" name="fname">
		  <a href = "contact.php ? name= uchenna Anya&address= Aba">send</a>
		</form>
		
		<form action="welcome_get.php" method="get">
			Name: 
			<input type="text" name="name"><br>
			E-mail: 
			<input type="email" name="email"><br>
			Gender:
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male

			<input type="submit">
		</form>
		
		
		
	</body>

</html>
<?php require_once'header.php'; ?>