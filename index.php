<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Website</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body class="index" style="font-family: 'ElgocThin'">
	<?php require('navbar.php'); ?>
	<div class="container-fluid">
		<div class="hero d-flex justify-content-center text-center mt-5">	
			<h1 class=" text-light top" style="mix-blend-mode: exclusion;"><span class="first">Jessiline</span><br><span class="last">Imanuela</span></h1>
			<img src="images/image.png" class="img-fluid blkg position-absolute d-lg-block" style="z-index: -2;" alt="Jessiline">
			<img src="images/profile-nobg.png" class="img-fluid depan" style="z-index: 2;opacity:0" alt="Jessiline">
			<img src="images/profile-nobg-bnw.png" class="img-fluid replace d-lg-block" style="z-index: 2;" alt="Jessiline">
			
		</div>
		<div class="lh row justify-content-center introduction">
			<div class="col-8 col-md-6 col-lg-4 ">
				<p><h3>Hello ! I'm Jessiline from Indonesia  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 36 36"><path fill="#DC1F26" d="M32 5H4a4 4 0 0 0-4 4v9h36V9a4 4 0 0 0-4-4z"/><path fill="#FFF" d="M36 27a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4v-9h36v9z"/></svg></h3><br> I am a second-year Information Systems student aspiring to become a web/app developer. My education has provided me with expertise in critical-thinking, database management, several programming languages, and systems analysis, which I am excited to apply in a professional setting to contribute to the success of a business.</p>
			</div>
		</div>
		<div class="d-flex justify-content-center align-items-center align-items-lg-start skillSection">
			<div class="text-center isip">
				<p class="python text-light rounded-pill py-1 p-md-2" style="background-color: #FF6C72;" >Python</p>
				<p class="js text-light rounded-pill p-1 p-md-2" style="background-color: #FF6C72;" >JavaScript</p>
				<p class="css text-light rounded-pill py-1 px-2 px-md-4 py-md-2" style="background-color: #FF6C72;">HTML&CSS</p>
				<p class="php text-light rounded-pill py-1 p-md-2" style="background-color: #FF6C72;" >PHP</p>
				<p class="cSharp text-light rounded-pill py-1 p-md-2" style="background-color: #FF6C72;" >C#</p>
				<p class="sql text-light rounded-pill py-1 p-md-2" style="background-color: #FF6C72;" >SQL</p>
			</div>
			<h1 class="skills text-center position-absolute t-0">SKILLS?</h1>
		</div>
		<div class="lh row justify-content-center abt">
			<div class="col-8 col-md-6 col-lg-4 ">
				<p>I have experience in some languages such as C#, Python, SQL, JavaScript, and I can also work with GitHub, HTML5 & CSS. <br><br> Interests : UI/UX design , Web/Application Development, Data Science</p><br>
				<p>Besides that, I have several hobbies, such as playing sports, listening to music, playing games, and also eating😁. I also enjoy interacting with people and trying new things because I like to take on challenges.</p>
			</div>
		</div>

		<!-- Loader -->
		<div id="unslate_co--overlayer"></div>
		<div class="site-loader-wrap">
		<div class="site-loader"></div>
		</div>
		<?php require('footer.php'); ?>
	</div>
	<script src="scripts-dist.js"></script>
	<script src="main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
	<script src="script.js"></script>
</body>
</html>
