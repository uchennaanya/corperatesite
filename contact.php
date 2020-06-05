<?php require_once'header.php'; ?>
<?php

	function chck($txt) {
		$txt = trim($txt);
		$txt = htmlspecialchars($txt);
		$txt = stripslashes($txt);
		return $txt;
	}
	
	require_once("server.php");
	
	$errfname = $errmail = $errmessage = $errsname =$mailexsist="";
	if (ISSET($_POST['save'])) {
	//if ($_SERVER['REQUEST_METHOD'] == "POST"){
		
		$fname = chck($_POST['fname']);
		$sname = chck($_POST['sname']);
		$email = chck($_POST['email']);
		$message = chck($_POST['message']);
		
		$select = $conn->query("SELECT*FROM tbl_pin3 WHERE email = '$email'");
			
		if (empty($fname) || !preg_match("/^[a-zA-Z ]*$/", $fname)){
			
			$errfname = "Field required and must be all alphabet!";
		} else if (empty($sname) || !preg_match("/^[a-zA-Z ]*$/",$sname)){
			$errsname ="Field required and must be all alphabet!";
		
		} else if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
			
			$errmail ="Field required and must be a valid email!";
			
		} else if (empty($message) || !preg_match("/^[a-zA-Z ]*$/", $message)) {
			$errmessage ="Field required and must be all alphabet!";
			
		} else if ($select->num_rows == 0){
				
		if ($query = $conn->query("INSERT INTO tbl_pin3 (fname,sname,email,message) VALUES ('$fname', '$sname', '$email', '$message')")){
			
		header("location:view.php");
		} else {
			echo "Oops something went wrong!";
		}
		} else {
			
			$mailexsist = "Email address already exsist!";
	}	
}
?>

<script>
		function showHint(str) {
			if (str.length == 0) {
				document.getElementById("txtHint").innerHTML = "";
				return;
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("txtHint").innerHTML = this.responseText;
					}
				};
				xmlhttp.open("GET", "gethint.php?q=" + str, true);
				xmlhttp.send();
			}
		}
		</script>
	<body>
	<div id="example2"><h1 class="display-1 text-light">Contact Us</h1></div>
	<div class="container">
			
		<div class="row"><div class="col-md-12" style="height:80px"></div></div>
			
			<div class="row">
				<div class="col-md-6">
				<div class="contact">
					<form name="myForm" method="post" action="" onsubmit="return validateForm()">
						<div class="form-group">
						  <label for="usr">Name:</label>
							 <?php echo $errsname; ?>
						  <input type="text" name="name" class="form-control" id="usr" placeholder="Names">
						</div>
						<div class="form-group">
						  <label for="pwd">Email</label>
							<?php echo $errmail.$mailexsist; ?>
						  <input type="email" name="email" class="form-control" id="pwd" placeholder="Email">
						</div>
						 <div class="form-group">
						  <label for="comment">Comment:</label>
							 <?php echo $errmessage; ?>
						  <textarea class="form-control" rows="5" name="message" placeholder="Leave a message" id="comment"></textarea>
						</div>
						<button type="button" class="btn btn-primary" name="save">Submit</button>
						</form>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="contact" style="height:400px">
						<span class="glyphicon glyphicon-phone"></span>
						<i class="fa fa-map-marker"></i>
						<i class="fa fa-phone"></i>
						<i class="fa fa-envelope"></i>
<!--
						<p>
							Contact @ 7 Eziukwu Road Aba Abia State, Nigeria
						</p>
-->

					</div>
				</div>
			</div>
		<div class="row"><div class="col-md-12" style="height:100px"></div></div>
	</div>
		<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i> </button>
		<?php require_once'footer.php'; ?>