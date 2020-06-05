<?php
	
	require_once("server.php");
	
	$id = $_GET['id'];
	 
	$sql = $conn->query("SELECT * FROM tbl_pin3 WHERE id =$id");
	$row = $sql->fetch_assoc();
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$fname = $_POST['fname'];
		$sname = $_POST['sname'];
		$email = $_POST['email'];
		
		if ($query = $conn->query("UPDATE tbl_pin3 SET fname = '$fname',sname='$sname',email='$email' WHERE id = '$id'", LIMIT, 1)){
			
			header("location:view.php");
			
		} else {
			
			echo "Oops something went wrong";
		}
	}
?>

<!doctype html>
<html>
	<head>
		<title>Home page</title>
		<meta charset = "Utf-8">
		<meta name author = "Anya Martins U">
		<link href ="">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<header>
			<img src ="assets/images/Koala.jpg" width = "50px" height="40px">
			<nav>
				<a href = "index.html">Home</a>
				<a href = "about.html">About</a>
				<a href = "service.html">Service</a>
				<a href = "contact.html">Contact</a>
			</nav>
		</header>
	
		<main style="text-align: center;">
		<h1> Contact Us </h1>
			
			<section>
				<form name="myForm" method="post" action="" onsubmit="return validateForm()">
					<div>
						<label for = "fname">First name</label>
					</div>
					<div>
						<input type="text" name="fname" id="fname" value="<?php echo $row['fname']; ?>">
					</div>
					<div>
						<label for="sname">Second Name</label>
					</div>
					<div>
						<input type="text" name="sname" id="sname" value="<?php echo $row['sname']; ?>">
					</div>					
					<div>
						<label for="email">Email</label>
					</div>
					<div>
						<input type="text" name="email" id="email" value="<?php echo $row['email']; ?>" >
					</div>
					<div>
					<div>
						<label for="message">Leave a message:</label>
					</div>
						<textarea class='text' name="message"></textarea>
					</div>
					
					<button name="submit">Submit</button>
					
				</form>
			</section>
			</div>
		</main>
		<footer>
			<?php echo date("Y"); ?>
		</footer>
		<script src="assets/js/script.js"></script>
	</body>
</html>