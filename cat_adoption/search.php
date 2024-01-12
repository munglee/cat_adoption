<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search -- Cat Adoption Center</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>

	<!-- NAVBAR -->
	<nav class="py-5 display-6 navbar navbar-expand-lg mx-auto">
		<div class="container-fluid">
			<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
				<ul class="navbar-nav">
					<a class="btn bg-info-subtle text-primary p-3 mx-2 btn-lg " href="/cat_adoption/index.php"
						role="button">Our mission</a>
					<a class="btn bg-info-subtle text-primary p-3 mx-2 btn-lg" href="/cat_adoption/gallery.php"
						role="button">Adopt now🐾</a>
				</ul>
			</div>
		</div>
	</nav>
	<!-- NAVBAR -->

	<!-- Search -->
	<div class="w-25 mx-auto">
		<form class="d-flex" role="search" action="search.php" method="GET">
			<input class="form-control me-2" name="query" type="search" placeholder="Find cats to adopt..."
				aria-label="Search">
			<button class="btn btn-outline-primary" type="submit">Search</button>
		</form>
	</div>
	<!-- Search -->

	<?php

	if (isset($_GET['query'])) {
		include("config.php");
		$query = $_GET['query'];

		$sql = "SELECT * FROM cats
				WHERE (`cat_name` LIKE '%" . $query . "%') OR (`age` LIKE '%" . $query . "%') OR (`sex` LIKE '%" . $query . "%') OR (`color` LIKE '%" . $query . "%') OR (`description` LIKE '%" . $query . "%')";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<div class='my-5 px-5'>
					<div class="row">
						<div class="col-lg-2">
							<img src=<?= $row["image"] ?> class="w-50" alt="cat" />
						</div>
						<div class="col-lg-10">
							<p class='text-start'>
								<?php echo "ID: " . $row["id"] . "<br>" . "Name: " . $row["cat_name"] . "<br>" . "Age: " . $row["age"] . "<br>" . "Sex: " . $row["sex"] . "<br>" . "Color: " . $row["color"] . "<br>" . "Description: " . $row["description"] . "<br>"; ?>
							</p>
							<a href="appointment.php?id=<?= $row["id"] ?>" class="btn btn-primary">Adopt me</a>
						</div>
					</div>
				</div>
				<hr class='hr' />

			<?php } ?>
		<?php } else { ?>

			<?php echo "We can't find any cat matched with your query. Go back and try another!<br>"; ?>

		<?php }
	} ?>
	<div class="text-center mx-auto">
		<button class='btn btn-outline-primary m-3' type='button' onclick='javascript:history.back()'>Back</button>
	</div>
</body>

</html>