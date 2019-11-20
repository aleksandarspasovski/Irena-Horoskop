<nav class="hr-nav">
	<ul>
		<li id="dnevni-horoskop" class="blink"><a href="daily/ovan">Dnevni horoskop</a>
			<ul class="sub-nav">
				<li><a href="daily/ovan">Ovan</a></li>
				<li><a href="daily/bik">Bik</a></li>
				<li><a href="daily/blizanci">Blizanci</a></li>
				<li><a href="daily/rak">Rak</a></li>
				<li><a href="daily/lav">Lav</a></li>
				<li><a href="daily/devica">Devica</a></li>
				<li><a href="daily/vaga">Vaga</a></li>
				<li><a href="daily/skorpija">Škorpija</a></li>
				<li><a href="daily/strelac">Strelac</a></li>
				<li><a href="daily/jarac">Jarac</a></li>
				<li><a href="daily/vodolija">Vodolija</a></li>
				<li><a href="daily/ribe">Ribe</a></li>
			</ul>
			<span class="arrow">&#9660;</span>
		</li>
		<li id="nedeljni-horoskop" class="blink"><a href="weekly/ovan">Nedeljni horoskop</a>
			<ul class="sub-nav">
				<li><a href="weekly/ovan">Ovan</a></li>
				<li><a href="weekly/bik">Bik</a></li>
				<li><a href="weekly/blizanci">Blizanci</a></li>
				<li><a href="weekly/rak">Rak</a></li>
				<li><a href="weekly/lav">Lav</a></li>
				<li><a href="weekly/devica">Devica</a></li>
				<li><a href="weekly/vaga">Vaga</a></li>
				<li><a href="weekly/skorpija">Škorpija</a></li>
				<li><a href="weekly/strelac">Strelac</a></li>
				<li><a href="weekly/jarac">Jarac</a></li>
				<li><a href="weekly/vodolija">Vodolija</a></li>
				<li><a href="weekly/ribe">Ribe</a></li>
			</ul>
			<span class="arrow">&#9660;</span>
		</li>
		<li id="mesecni-horoskop" class="blink"><a href="monthly/ovan">Mesečni horoskop</a>
			<ul class="sub-nav">
				<li><a href="monthly/ovan">Ovan</a></li>
				<li><a href="monthly/bik">Bik</a></li>
				<li><a href="monthly/blizanci">Blizanci</a></li>
				<li><a href="monthly/rak">Rak</a></li>
				<li><a href="monthly/lav">Lav</a></li>
				<li><a href="monthly/devica">Devica</a></li>
				<li><a href="monthly/vaga">Vaga</a></li>
				<li><a href="monthly/skorpija">Škorpija</a></li>
				<li><a href="monthly/strelac">Strelac</a></li>
				<li><a href="monthly/jarac">Jarac</a></li>
				<li><a href="monthly/vodolija">Vodolija</a></li>
				<li><a href="monthly/ribe">Ribe</a></li>
			</ul>
			<span class="arrow">&#9660;</span>
		</li>
		<li id="godisnji-horoskop" class="blink"><a href="yearly/ovan">Godišnji horoskop</a>
			<ul class="sub-nav">
				<li><a href="yearly/ovan">Ovan</a></li>
				<li><a href="yearly/bik">Bik</a></li>
				<li><a href="yearly/blizanci">Blizanci</a></li>
				<li><a href="yearly/rak">Rak</a></li>
				<li><a href="yearly/lav">Lav</a></li>
				<li><a href="yearly/devica">Devica</a></li>
				<li><a href="yearly/vaga">Vaga</a></li>
				<li><a href="yearly/skorpija">Škorpija</a></li>
				<li><a href="yearly/strelac">Strelac</a></li>
				<li><a href="yearly/jarac">Jarac</a></li>
				<li><a href="yearly/vodolija">Vodolija</a></li>
				<li><a href="yearly/ribe">Ribe</a></li>
			</ul>
			<span class="arrow">&#9660;</span>
		</li>
		<li><a href="#">&rarr; Izracunaj horoskopski znak &larr;</a></li>
	</ul>
</nav>
<div class="first-slider">
	<div class="pre-slide">1</div>
	<img class="astro" src="<?php echo SIGN; ?>picture/astrology-1.jpg" style="display: block;">
	<img class="astro" src="<?php echo SIGN; ?>picture/astrologija.jpg">
	<img class="astro" src="<?php echo SIGN; ?>picture/astrologija-1.jpg">
	<img class="astro" src="<?php echo SIGN; ?>picture/astrologija-2.jpg">
	<img class="astro" src="<?php echo SIGN; ?>picture/astrologija-3.jpg">
	<div class="next-slide">2</div>
</div>
<!-- zameni u h1 tag ------->
<!-- <p class="name-box"></p> -->
<div class="name-box">
	<p>Pretrazi sanovnik</p>
	<form action="sanovnik/search" method="post" class="inner-search" autocomplete="off">
		<input type="search" name="search" id="search" placeholder="Pretrazi...">
	</form>
</div>
<div id="left-part">
	<div class="first-box">
		<section class="horoscope-zodiac">
			<p class="tab-name">Dnevni horoskop: <?php echo date('d-M-Y'); ?></p>

			<div class="horoscope-sign grid">
				<a href="daily/ovan">
					<img src="<?php echo SIGN; ?>sign-images/aries">
					<h3>Ovan</h3>
				</a>
				<a href="daily/bik">
					<img src="<?php echo SIGN; ?>sign-images/taurus">
					<h3>Bik</h3>
				</a>
				<a href="daily/blizanci">
					<img src="<?php echo SIGN; ?>sign-images/gemini">
					<h3>Blizanci</h3>
				</a>
				<a href="daily/rak">
					<img src="<?php echo SIGN; ?>sign-images/cancer">
					<h3>Rak</h3>
				</a>
				<a href="daily/lav">
					<img src="<?php echo SIGN; ?>sign-images/leo">
					<h3>Lav</h3>
				</a>
				<a href="daily/devica">
					<img src="<?php echo SIGN; ?>sign-images/virgo">
					<h3>Devica</h3>
				</a>
				<a href="daily/vaga">
					<img src="<?php echo SIGN; ?>sign-images/libra">
					<h3>Vaga</h3>
				</a>
				<a href="daily/skorpija">
					<img src="<?php echo SIGN; ?>sign-images/scorpio">
					<h3>Škorpija</h3>
				</a>
				<a href="daily/strelac">
					<img src="<?php echo SIGN; ?>sign-images/sagittarius">
					<h3>Strelac</h3>
				</a>
				<a href="daily/jarac">
					<img src="<?php echo SIGN; ?>sign-images/capricorn">
					<h3>Jarac</h3>
				</a>
				<a href="daily/vodolija">
					<img src="<?php echo SIGN; ?>sign-images/aquarius">
					<h3>Vodolija</h3>
				</a>
				<a href="daily/ribe">
					<img src="<?php echo SIGN; ?>sign-images/pisces">
					<h3>Ribe</h3>
				</a>
			</div>
		</section>
		<div class="main-div">
			<span class="image-load">PLEASE WAIT</span>
			<span class="dots-load">...</span>
		</div>
		<div class="a-down">
			<p>Horoskopski znak poznate ličnosti</p>
			<button class="next-fam">Next</button>
		</div>
	</div>
	<hr class="hr-box">
	<div class="second-box">
		<h2>Uvod u astrologiju</h2>
		<p>Verujemo da Astrologija se može koristiti kao moćno sredstvo za razumevanje nas samih i sveta oko nas, saznajte više &rarr; <a href="" style="text-decoration: none;"> Read more...</a></p>
		<img src="<?php echo SIGN; ?>picture/book-cover.png">

		<blockquote>Pre nego sto ugledamo svetlost, prvo moramo proci kroz dolinu "mrtvih" kako bismo pripremili nase misli i srce za svesnu nadogradnju</blockquote>

		<h2>Odakle krenuti?</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<hr class="hr-box">
	<div class="third-box">
		<h2>Mesec u znaku Vaga</h2>
		<img src="<?php echo SIGN;?>sign-images/libra.png">
		<p><strong>Vage</strong> su najstrastveniji čitaoci ljubavnih romana. Budući da psiholozi ističu da ljudi izborom literature nadoknađuju ono što im nedostaje u životu, čini se da su one željne ljubavi i romantike. Teško osvojive tvrđave, zaljubljene Device... <a href="" style="text-decoration: none;">Read more</a></p>
	</div>
	<hr class="hr-box">
</div>
<!---Desna strana gre ce se prikazivati tekstovi--->
<div id="right-part">
	<div class="right-part-one">
		<h2>&rarr; Motivacioni citat &larr;</h2>
		<p><span style="color: brown; font-weight: bold; font-size: x-large;">"</span> Danas je dan kada smo svesni svoga postojanja i potrebe da proživimo datu nam priliku što je zabavnije moguće! <strong>Život je samo jedan, ne zaboravite to</strong> <span style="color: brown; font-weight: bold; font-size: x-large;">"</span><br><br>
		</p>
	</div>
	<hr>
	<div class="rozdanik">
		<h2>Rozdanik / Stari kalendar</h2>
		<img src="<?php echo SIGN; ?>picture/rozdanik.jpg" alt="rozdanik" title="Calendar">
		<p>Saznajte sve o mesecu u kojem se rodjeni, od cega cete bolovati - <a href="">Predskazivac od rodjenja do smrti po mesecima.</a></p>
	</div>
</div>