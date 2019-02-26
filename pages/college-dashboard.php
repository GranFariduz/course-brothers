<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="..\assets\images\favicon.png" type="image/png" />

	<!-- NORMALIZE CSS -->
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' />

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700" rel="stylesheet">

	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- ANIMATE CSS -->
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' />

	<!-- CUSTOM CSS -->
	<link rel='stylesheet' href='../styles/style.css' />

	<title>CourseBrother.com | College Dashboard</title>
</head>
<body>


	<!-- COLLEGE_DASHBOARD -->
	<div class="college_dashboard">

		<div class="college_dashboard__navbar">

			<div class="college_dashboard__navbar__left">
				<div class="college_dashboard__navbar__left__toggle">
					<i class='fas fa-bars'></i>
				</div>
				<div class="college_dashboard__navbar__left__logo">
					<a href="../index.php">
						<img src="../assets/svg/cb-logo.svg" alt="CourseBrother Logo" />
					</a>
				</div>
			</div>

			<div class="college_dashboard__navbar__right">
				<div class="college_dashboard__navbar__right__title">
					<i class='fas fa-user'></i>
					<p>Welcome, <b>Rudbourne</b></p>
					<i class='fas fa-angle-down'></i>
					<div class="college_dashboard__navbar__right__account">
						<div class="college_dashboard__navbar__right__account__name">
							<h4>Rudbourne Chelute</h4>
							<h5>rudbournexecx@gmail.com</h5>
						</div>
						<div class="college_dashboard__navbar__right__account__buttons">
							<button class='college_dashboard__navbar__right__account__cp'>Change Password</button>
							<button class="college_dashboard__navbar__right__account__logout">Logout</button>
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<div class="college_dashboard__body">

			<div class="college_dashboard__body__sidebar">
				<div class='college_dashboard__body__sidebar__container'>

					<a href="#">
						<div class="college_dashboard__body__sidebar__item">
							<i class="fas fa-clipboard"></i>
							<h3>Dashboard</h3>
						</div>
					</a>

					<a href="#">
						<div class="college_dashboard__body__sidebar__item">
							<i class="fas fa-file-alt"></i>
							<h3>Student Documents</h3>
						</div>
					</a>
					
				</div>
			</div>

			<div class='college_dashboard__container'>
				
				<div class="college_dashboard__main">
					<h3>Dashboard</h3>
					<div class="college_dashboard__main__appendix">
						<h5 class='college_dashboard__main__appendix__head'>Admission Count</h5>
						<button class='college_dashboard__main__appendix__export'>
							<i class='fas fa-download'></i>
							Download CSV
						</button>
					</div>
					<div id="chart__container" class='college_dashboard__main__chart'>
					</div>
					<div class="college_dashboard__main__table">
						<h5 class='college_dashboard__main__table__head'>Admission Summary</h5>
						<table>
							<tr>
								<th>Name</th>
								<th>Total Admissions</th>
								<th>Successful Admissions</th>
								<th>Unsuccessful Admissions</th>
								<th>Ongoing Admissions</th>
							</tr>
							<tr>
								<td>Rudbourne Chelute</td>
								<td>10</td>
								<td>7</td>
								<td>2</td>
								<td>1</td>
							</tr>
						</table>
					</div>
				</div>

			</div>

		</div>

	</div>
	<!-- /COLLEGE_DASHBOARD -->


<!-- jQuery -->
<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous">
</script>
<!-- WOW JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>
<!-- CANVAS JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js'></script>
<!-- CUSTOM JS -->
<script src='../js/collegeDashboard.js'></script>

</body>
</html>