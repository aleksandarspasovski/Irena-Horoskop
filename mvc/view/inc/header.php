<?php 
Session::init();
if (isset($_SESSION['id'])) {
	require 'config/db.php';
	$query = 'select * from users where id = '.$_SESSION['id'].'';
	$res = $db->query($query);
	$result = $res->fetch_assoc();
}
?><!DOCTYPE html>
<html>
<head>
	<title>AS-Project</title>
	<link rel="shortcut icon" href="<?php echo SIGN; ?>picture/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>view/admin/css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<script type="text/javascript" src="<?php echo URL; ?>public/js/main.js"></script>
	
	<?php if (isset($this->css)): ?>
		
	<?php foreach ($this->css as $css): ?>
	<?php echo '<link rel="stylesheet" type="text/css" href="'.URL.'view/'.$css.'">' ?>
	<?php endforeach ?>

	<?php endif ?>
	<?php if (isset($this->js)): ?>
		
	<?php foreach ($this->js as $js): ?>
	<?php echo '<script type="text/javascript" src="'.URL.'view/'.$js.'"></script>' ?>
	<?php endforeach ?>

	<?php endif ?>

</head>
<body>
<div class="wrapp">
	<div id="header">
		<div class="first-nav">
			<div class="first-p">
				<div class="pic-over-main">
					<p class=" pic-over">
						<?php echo 'Horoskop || Astrologija || Sanovnik || Saznajte sve o znaku';?>	
					</p>
				</div>
			</div>
			<div class="second-p">
			</div>
		</div>
		<nav class="navigation clearfix">
			<div class="header-logo">
				<a href="<?php echo URL; ?>main">
					<img src="<?php echo SIGN; ?>picture/logo.png" alt="logo">
				</a>
			</div>
			<ul class="main-nav">
					<li><a href="<?php echo URL; ?>main">Pocetna</a></li>
					<li><a href="<?php echo URL; ?>sanovnik">Sanovnik</a></li>
					<li><a href="<?php echo URL; ?>about">O Znaku</a></li>
					<li><a href="<?php echo URL; ?>contact">Kontakt</a></li>
					
				<?php if (Session::get('logged_in') == true) :?>

					<li><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>

					<?php endif; ?>
				</ul>
		</nav>
	</div>
	<div class="wrapper">
		<div class="hide side-arrow"></div>
		<aside class="aside-hide">
			<div class="aside-scroll">
				<div class="art-side-1 login">
					<?php if (Session::get('logged_in') == false) : ?>
						<form action="<?php echo URL; ?>login/users" method="post" autocomplete="on">
							<h3>Login</h3>
							<div>
								<label for="email">Email</label>
								<br>
								<input type="email" name="email" placeholder="john@gmail.com" id="email">
							</div>
							<div>
								<label for="password">Password</label>
								<br>
								<input type="password" name="password" id="password">
								<a href="forgot-pswd?" class="forgot-psw">Forgot account?</a>
							</div>
							<div>
								<br>
								<input type="hidden" name="fn" value="login">
								<input type="submit"  value="Login">
							</div>
						</form>

						<?php else: ?>
							<form action="<?php echo URL; ?>dashboard/logout" method="post">
								<a href="<?php echo URL; ?>profile/index">
									<img src="<?php echo SIGN; ?>picture/profile-pic.png" class="image-ufnln" title="<?php echo $result['nickname']; ?>">
								</a>
								<p class="ufnln"><?php echo $result['first_name']; ?> <?php echo $result['last_name']; ?></p>
								<input type="hidden" name="fn" value="logout">
								<li class="lobtnli"><a href="<?php echo URL; ?>dashboard/logout" class="lobtn">Sign out</a></li>
							</form>
						<?php endif; ?>
					</div>
					<?php if (Session::get('role') == 'admin') : ?>
						<div class="art-side-inadm">
							<li><a href="<?php echo URL; ?>admin/index">Logged as: Administrator</a></li>
						</div>
					<?php endif; ?>

					<?php if (Session::get('logged_in') == false) : ?>
						<div class="art-side-1 reg">
							<ul>
								<li><a href="<?php echo URL; ?>register">Register</a></li>
							</ul>
						</div>
					<?php endif; ?>
					<div class="art-side-1 order">
						<p>Želite da saznate kako su vam poređane i šta vam poručuju zvezde za naredne 2 godine - <span style="color: #770f0f">Poručite vašu natalnu kartu <a href="./homepage/contact?#address">SADA<svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
							<path d="M5 0v2h-5v1h5v2l3-2.53-3-2.47z" transform="translate(0 1)" />
						</svg></a></span></p>
					</div>
					<div class="art-side-1 first-block">
						<p>Da biste dobijali dnevni horoskop na vašem email-u, potebno je da se registrujete na nasem sajtu.</p>
					</div>
					<div class="art-side-2">
						<a href="daily/ovan"><img src="<?php echo SIGN; ?>picture/daily-horoscope.jpg" title="Dnevni Horoskop"></a>
					</div>
				</div>
			</aside>
			<main>