<head>
	<title>Home page</title>
	<meta charset = "Utf-8">
	<meta name=" author" content="Anya Martins Uchenna">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href ="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/animate.css">
</head>
<nav class="navbar navbar-expand-md bg-light navbar-light nav-color fixed-top" id="myHeader">
  <!-- Brand -->
  <a class="navbar-brand nav-text" href="index.php">
	  <img src="assets/images/logoss.png" class="image" />
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler nav-text" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	<span class="navbar-toggler-icon toggling "></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
		<a class="nav-link nav-text" href="index.php"><i class="fa fa-home" ></i>Home</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link nav-text" href="service.php">Projects</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link nav-text" href="about.php">About</a>
	  </li>
		<li class="nav-item">
		<a class="nav-link nav-text" href="contact.php"> Contact</a>
	  </li>
	  <li class="nav-item">
		  <button type="button" class="btn btn-primary btns"  data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> Donate </button>
	  </li>
	</ul>
  </div>
</nav>
<!-- The Modal -->
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="modal fade modal-dialog modal-dialog-centered ml-auto" id="myModal">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <!-- Modal Header -->
				  <div class="modal-header">
					<h4 class="modal-title">Help us to reach more Kids </h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				  </div>
				  <!-- Modal body -->
				  <div class="modal-body">
					 <div class="form-group">
					  <label for="name">Name:</label>
					  <input type="text" class="form-control" id="usr">
					</div>
					<div class="form-group">
					  <label for="phone">Phone</label>
					  <input type="text" class="form-control" id="pwd">
					</div>
					  <div class="form-group">
					  <label for="pwd">Email</label>
					  <input type="email" class="form-control" id="pwd">
					</div>
				  </div>
				  <!-- Modal footer -->
				  <div class="modal-footer">
					  <button type="button" class="btn btn-danger" data-dismiss="modal"> Close </button>
					  <button type="button" class="btn btn-success" data-dismiss="modal"> Next <i class="fa fa-arrow-right"></i></button>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
	    </div>
      </div>