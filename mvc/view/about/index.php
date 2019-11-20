<div class="horoscope-zodiac-about">
	<h2>Pozitivne i negativne osobine o Horoskopskim znacima</h2>
		<div class="hashtag">
			<ul>
				<li><a href="#1">Ovan</a></li>

				<li><a href="#2">Bik</a></li>

				<li><a href="#3">Blizanci</a></li>

				<li><a href="#4">Rak</a></li>

				<li><a href="#5">Lav</a></li>

				<li><a href="#6">Devica</a></li>

				<li><a href="#7">Vaga</a></li>

				<li><a href="#8">Škorpija</a></li>

				<li><a href="#9">Strelac</a></li>

				<li><a href="#10">Jarac</a></li>

				<li><a href="#11">Vodolija</a></li>

				<li><a href="#12">Ribe</a></li>
			</ul>
		</div>
		<?php while($res = $this->about->fetch_assoc()): ?>

		<div class="div-sign" id="<?php echo $res['id']; ?>">
			<div class="inner-txt">
				<img src="<?php echo SIGN; ?><?php echo $res['icon']; ?>">
				<h3 class="sign-name"><?php echo $res['sign']; ?></h3>
				<p class="month"><?php echo $res['length']; ?></p>
			</div>
			<div class="desc-sign">
				<p><?php echo $res['about_sign']; ?></p>
			</div>
		</div>
		<?php endwhile; ?>

	</div>