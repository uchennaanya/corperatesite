<html>
	<head>
		<title> View </title>
	</head>
	<body>
		<h1> Registered members </h1>
		<?php

			require_once('server.php');
			$counter = 1;
			$msg = "";
			$sqlquery = $conn->query("SELECT * FROM tbl_pin3");
			$rows = mysqli_num_rows($sqlquery);
			
			if ($rows == 0){
				echo "No members yet";
			} else {
			echo 'We have '.$rows.' registered members';
			
		?>
		<div>
			<table>
				<tr>
					<th>s/n</th>
					<th>Fname</th>
					<th>sname</th>
					<th>Email</th>
					<th col="2">Actions</th>
				</tr>
				<?php while ($row = $sqlquery->fetch_assoc()) { ?>
				<tr>
					<td>
						<?= $counter++ ?>
					</td>
					<td>
						<?= $row['fname']; ?>
					</td>
					<td>
						<?= $row['sname']; ?>
					</td>
					<td>
						<?= $row['email']; ?>
					</td>
					<td col="2">
						<a href="update.php?id=<?=$row['id']; ?>"> Update </a>
						<a href="delete.php?id=<?=$row['id']; ?>"> Delete </a>
					</td>
				</tr>
				<?php } ?>
			</table>
			<?php } ?>
		</div>
	</body>
</html>