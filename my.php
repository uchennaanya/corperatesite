<?php 

class person {
	
	private $name;
	private $age;
	
	public function setProfile($name, $age) {
		
		$this->name = $name;
		$this->age = $age;
		
	}
	
	public function getProfile() {
		
		return "My name is " . $this->name . " and I am  " . $this->age;
	}
}

$outPut = $response = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$name = $_POST['name'];
	$age = $_POST['age'];
	
	if (!empty($name) || !empty($age)) {
		
		$objPro = new person();
		$objPro->setProfile($name, $age);
		$outPut = $objPro->getProfile();

	} else {
		
		$response = "User profile needed please! ";
		
	}	
}

?>
<html>
	<head>
		<title>Home page</title>
	</head>
	<body>
		<?php
			echo $outPut;
			echo $response;
		?>
		<form method="post">
			<input type="text" name="name">
			<input type="number" name="age">
			<a href="receive.php?outPut=<?= $outPut; ?>"> Test GET </a>
		</form>
	</body>
</html>