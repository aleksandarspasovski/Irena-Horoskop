<?php if (Session::get('logged_in')): ?>

<?php header('location: dashboard'); ?>

<?php else: ?>	
	<div class="form">
		<form action="login/users" method="post" class="form-pop">

			<header>
				<h3 class="reg-text">Login</h3>
			</header>	

			<div class="form-control">
				<label for="email">Email <span class="sp-up" style="color: red;">*</span></label>
				<input type="email" name="email" placeholder="john@gmail.com" id="email">
			</div>
			<div class="form-control" >
				<label for="password">Password <span class="sp-up" style="color: red;">*</span></label>
				<input type="password" name="password" id="password">
			</div>
					<input type="hidden" name="fn" value="login">
					<input type="submit" value="Submit">
		</form>
	</div>
<?php endif; ?>