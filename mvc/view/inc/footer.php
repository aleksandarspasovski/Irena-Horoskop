	
	</main>
	</div>
	<div id="footer">
		<div class="footer-main">
			<div class="footer-div fd-1">
				<a href="<?php echo URL; ?>main">
					<img src="<?php echo SIGN;?>picture/logo.png" title="I-Horoscope" alt="logo">
				</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="footer-div fd-2">
				<div class="inner-footer-div">
					<h2>Links</h2>
					<ul>
						<li><a href="<?php echo URL; ?>main">Pocetna</a></li>
						<li><a href="<?php echo URL; ?>about">Znaci</a></li>
						<li><a href="<?php echo URL; ?>contact">Kontakt</a></li>
						<li><a href="<?php echo URL; ?>sanovnik">Sanovnik</a></li>
						<li><a href="<?php echo URL; ?>main/chakras" class="li-cha">Čakre</a></li>
						<?php if (Session::get('logged_in') != false) : ?>
							<li><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="footer-div">
				<div class="inner-footer-div-2">
					<h2>Horoskop</h2>
					<div class="inner-links-1">
						<ul>
							<li><a href="<?php echo URL; ?>daily/ovan">Dnevni horoskop</a></li>
							<li><a href="<?php echo URL; ?>weekly/ovan">Nedeljni horoskop</a></li>
							<li><a href="<?php echo URL; ?>monthly/ovan">Mesečni horoskop</a></li>
							<li><a href="<?php echo URL; ?>yearly/ovan">Godišnji horoskop</a></li>
							<li><a href="<?php echo URL; ?>crystals">Kristali</a></li>
						</ul>
					</div>
					<div class="inner-links-2">
						<ul>
							<li><a href="<?php echo URL; ?>daily/ovan">Ovan</a></li>
							<li><a href="<?php echo URL; ?>daily/bik">Bik</a></li>
							<li><a href="<?php echo URL; ?>daily/blizanci">Blizanci</a></li>
							<li><a href="<?php echo URL; ?>daily/lav">Lav</a></li>
							<li><a href="<?php echo URL; ?>daily/devica">Devica</a></li>
							<li><a href="<?php echo URL; ?>daily/vaga">Vaga</a></li>
							<li><a href="<?php echo URL; ?>daily/skorpija">Škorpija</a></li>
							<li><a href="<?php echo URL; ?>daily/strelac">Strelac</a></li>
							<li><a href="<?php echo URL; ?>daily/jarac">Jarac</a></li>
							<li><a href="<?php echo URL; ?>daily/vodolija">Vodolija</a></li>
							<li><a href="<?php echo URL; ?>daily/ribe">Ribe</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-icon">
				<div class="inner-info">
					<p>Pratite nas na našoj Facebook i Instagram stranici.</p>
					<p>Za sva dodatna pitanje možete nam pisati na mail-u. Trudićemo se da odgovore dobijate u roku od 24h.</p>
				</div>
				<ul>
					<li><a class="btn-facebook" href="http://www.facebook.com" target="_blank" title="Facebook"></a></li>
					<li><a class="btn-instagram" href="http://www.instagram.com" target="_blank" title="Instagram"></a></li>
					<li><a class="btn-gmail" href="https://mail.google.com/mail/u/0/?tab=rm#inbox?compose=DmwnWtDqNRGbXZkklxkSpJJSGSRvMjSDkjlKHSRcbxfTCsllFgjsZGwfbCJGHhZwbpDsJQhWtFBv" target="_blank" title="Gmail"></a></li>
				</ul>
			</div>
		</div>
		<div class="caption">
			<p>By using this site, you agree with our <a href="<?php echo URL; ?>main/terms"><strong>Terms of Use</strong></a> here.</p>
			<p>Irena Spasovska © 2018-<?php echo date('Y'); ?></p>
		</div>
	</div>
	<!-- end of wrapper -->
</div>
</body>
</html>