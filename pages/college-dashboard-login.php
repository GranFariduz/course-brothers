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

	<title>Login | College Dashboard</title>
</head>
<body>


	<!-- COLLEGE_DASHBOARD_LOGIN -->
  <div class="college_dashboard__login">

		<div class="college_dashboard__login__container">
			<div class="college_dashboard__login__header">
				<div class="college_dashboard__login__header__logo">
					<img src="../assets/svg/cb-logo.svg" alt="CourseBrother Logo" />
				</div>
				<div class="college_dashboard__login__header__title">
					<h4>institute login</h4>
				</div>
			</div>
			<div class="college_dashboard__login__form">
				<form action="#">
					<input type="email" placeholder='Enter your email' />
					<input type="password" placeholder='Enter your password' />
					<button type='submit'>log in</button>
					<div class="college_dashboard__login__form__showpw">
						<i class='fas fa-eye'></i>
					</div>
				</form>
			</div>
		</div>

  </div>
  <!-- /COLLEGE_DASHBOARD_LOGIN -->

<!-- CUSTOM JS -->
<script>

	// For show password in college login page
	const collegeLoginPassword = document.querySelector('.college_dashboard__login__form form input[type="password"]');
	const collegeLoginEye = document.querySelector('.college_dashboard__login__form__showpw');

	let eyeOfAgamotto3 = 0;

	collegeLoginEye.addEventListener('click', () => {
		if (eyeOfAgamotto3 === 0) {
			collegeLoginPassword.type = 'text';
			eyeOfAgamotto3 = 1;
		} else if (eyeOfAgamotto3 === 1) {
			collegeLoginPassword.type = 'password';
			eyeOfAgamotto3 = 0;
		}
	});

</script>

</body>
</html>