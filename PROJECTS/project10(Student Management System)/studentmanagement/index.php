<?php 

error_reporting(0);
session_start();
session_destroy();

if ($_SESSION['message']) {
	$message = $_SESSION['message'];

	echo "<script type='text/javascript'>
	alert('$message');
	</script>";
}

$host = "localhost";
$user = "root";
$password = "grefdsaqw";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

$sql = "SELECT * FROM teacher";

$result = mysqli_query($data, $sql);

 ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
	<nav>
		<label class="logo">W-School</label>
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Admission</a></li>
			<li><a href="login.php" class="btn btn-success">Login</a></li>
		</ul>
	</nav>

	<div class="section1">
		<label class="img_text" for="">We Teach Students With Care</label>
		<img class="main_img" src="images/school_management.jpg" alt="school_management">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="welcome_img" src="images/school2.jpg" alt="">
			</div>
			<div class="col-md-8">
				<h1>Welcome to W-School</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, ad consectetur? Sequi ullam harum vero culpa esse, vitae ad possimus ex laudantium quaerat nihil alias modi ducimus cupiditate eos provident! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error consectetur exercitationem sapiente nulla ut eveniet maiores nihil quos ea, distinctio fuga necessitatibus nesciunt, iure optio vitae id, incidunt consequatur culpa.</p>
			</div>
		</div>
	</div>

	<center>
		<h1>Our Teachers</h1>
	</center>

	<div class="container">
		<div class="row">

			<?php 
			while ($info = $result->fetch_assoc()) {
			?>

			<div class="col-md-4">
				<img class="teacher" src="<?php echo "{$info['image']}"; ?>">
				<h3><?php echo "{$info['name']}"; ?></h3>
				<h5><?php echo "{$info['description']}"; ?></h5>
			</div>

			<?php 
			}
			 ?>
		</div>
	</div>

	<center>
		<h1>Our Courses</h1>
	</center>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="teacher" src="images/web.jpg" alt="teacher image 1">
				<h3>Web Development</h3>
			</div>
			<div class="col-md-4">
				<img class="teacher" src="images/graphic.jpg" alt="teacher image 1">
				<h3>Graphic Design</h3>
			</div>
			<div class="col-md-4">
				<img class="teacher" src="images/marketing.png" alt="teacher image 1">
				<h3>Marketing</h3>
			</div>
		</div>
	</div>

	<center>
		<h1 class="adm">Admission Form</h1>
	</center>

	<div align="center" class="admission_form">
		<form action="data_check.php" method="POST">
			<div class="adm_int">
				<label class="label_text" for="">Name</label>
				<input class="input_deg" type="text" name="name" id="">
			</div>
			<div class="adm_int">
				<label class="label_text" for="">Email</label>
				<input class="input_deg" type="text" name="email" id="">
			</div>
			<div class="adm_int">
				<label class="label_text" for="">Phone</label>
				<input class="input_deg" type="text" name="phone" id="">
			</div>
			<div class="adm_int">
				<label class="label_text" for="">Message</label>
				<textarea class="input_txt" name="message" id="" cols="23" rows="3"></textarea>
			</div>
			<div class="adm_int">
				<input class="btn btn-primary" type="submit" name="apply" id="submit" value="apply">
			</div>
		</form>
	</div>

	<footer>
		<h3 class="footer_text">All @copyright reserved by web tech knowledge</h3>
	</footer>

</body>

</html>