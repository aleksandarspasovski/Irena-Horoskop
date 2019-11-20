<?php 
// require 'config/db.php';
// $sql = 'select first_letter, content from sanovnik';
// // $sql = 'select first_letter, content from sanovnik where first_letter like "a%" ';
// $res = $db->query($sql);
// print_r($this->sanovnik);
// var_dump($this->sanovnik['first_letter']);die;
?>
<div class="s-head">
	<h1>Tumačenje snova <br><span style="color: darkred; text-decoration: underline; font-size: smaller;">Marije Lenorman</span></h1>
</div>
<div class="find-word">
	<div class="abeceda">
		<ul>
			<li><a href="#a">A</a></li>
			<li><a href="#b">B</a></li>
			<li><a href="#v">V</a></li>
			<li><a href="#g">G</a></li>
			<li><a href="#d">D</a></li>
			<li><a href="#dj">Dj</a></li>
			<li><a href="#e">E</a></li>
			<li><a href="#ž">Ž</a></li>
			<li><a href="#z">Z</a></li>
			<li><a href="#i">I</a></li>
			<li><a href="#j">J</a></li>
			<li><a href="#k">K</a></li>
			<li><a href="#l">L</a></li>
			<li><a href="#lj">Lj</a></li>
			<li><a href="#m">M</a></li>
			<li><a href="#n">N</a></li>
			<li><a href="#nj">Nj</a></li>
			<li><a href="#o">O</a></li>
			<li><a href="#p">P</a></li>
			<li><a href="#r">R</a></li>
			<li><a href="#s">S</a></li>
			<li><a href="#t">T</a></li>
			<li><a href="#ć">Ć</a></li>
			<li><a href="#u">U</a></li>
			<li><a href="#f">F</a></li>
			<li><a href="#h">H</a></li>
			<li><a href="#c">C</a></li>
			<li><a href="#č">Č</a></li>
			<li><a href="#dž">Dž</a></li>
			<li><a href="#š">Š</a></li>
		</ul>
	</div>
	<div class="second-desc">
		<p>Da li ste se mozda zapitali kakvo znacenje ima san koji se sanjali? Sanovnik koji je napisala <strong>Marija Lenorman</strong> mozda vam moze pomoci u odgovoru za kojim tragate.</p>
		<p class="question-img">Ukoliko ste sanjali: </p>
	</div>
	<div class="name-box">
		<p>Pretrazi sanovnik</p>
		<form action="<?php echo URL; ?>sanovnik/search" method="post" class="inner-search" autocomplete="on">
			<input type="search" name="search" id="search" placeholder="npr: Pas">
		</form>
	</div>	
</div>

<div class="sanovnik">
	<h2 id="a">A</h2>

		<?php foreach ($this->sanovniklist as $sanlist) :?>
			<?php $sanlists = $sanlist['first_letter']; 
				$sanlists = str_replace(' ', '_', $sanlists);
				$sanlists = trim(strtolower($sanlists));
			 ?>
			<p id="<?php echo $sanlists;?>"><?php echo $sanlist['first_letter']; ?> - <?php echo $sanlist['content']; ?></p>
		<?php endforeach; ?>


	<p id="bara">Bara</p>
</div>
<div class="maria-lenorman-bio">
	<img src="<?php echo SIGN; ?>picture/maria-lenorman.jpg">
	<p><strong>Marija Lenorman</strong> bila je vracarica u pocetku proslog veka, ona je rodjena u Parizu pred veliku Francusku revoluciju, ime njeno cuveno je po citavnom svetu, jer ona nije bila prosta vracara, nego prirodom obdareno stvorenje, koja je svojim proricanjem i samih careva paznju na se obracala. <br><br> Jos kao dete u jednom manastiru prorekla je svojoj igumaniji da ce biti otpustena, i nije proslo neko vreme igumanija je bila proterana. <br> Sami carevi Napoleon I i Aleksandar I ruski car dolazili su njoj da im pogadja. Napoleonu je jos kao oficiru prorekla, da ce veliki i cuveni svetski covek postati, samo da se severnog vetra cuva.</p>
</div>
