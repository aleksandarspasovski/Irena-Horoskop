<h1>Zdravo, prijavite se na nasem sajtu!</h1>
<div class="regcred">
	<form action="<?php echo URL; ?>register/createUser" method="post" id="form-2">
		<?php if (isset($_GET['err'])) : ?>
            <div class="err-pop">

                <?php foreach($_GET['err'] as $err) : ?>

                    <p><?php echo $err; ?></p>

                <?php endforeach; ?>

            </div>
        <?php endif; ?>

        <?php if (isset($_GET['succ'])) : ?>
            <div class="succ-pop">

                <?php foreach($_GET['succ'] as $succ) : ?>

                    <p><?php echo $succ; ?></p>

                <?php endforeach; ?>

            </div>
        <?php endif; ?>
		<div class="first-part">
			<div class="form-controll">
				<label>First name <span style="color: red;">*</span></label> <br>
				<input type="text" name="first_name">
			</div> <br>
			<div class="form-controll">
				<label>Last name <span style="color: red;">*</span></label> <br>
				<input type="text" name="last_name">
			</div> <br>
			<div class="form-controll">
				<label>Email <span style="color: red;">*</span></label> <br>
				<input type="email" name="email">
			</div> <br>
		</div>
		<div class="second-part">
			<div class="form-controll">
				<label>Nickname <span style="color: red;">*</span></label> <br>
				<input type="text" name="nickname" maxlength="17">
			</div> <br>
			<div class="form-controll">
				<label>Password <span style="color: red;">*</span></label> <br>
				<input type="Password" name="password">
			</div> <br>
			<div class="form-controll">
				<label>Confirm Password <span style="color: red;">*</span></label> <br>
				<input type="Password" name="re_password">
			</div> <br>
		</div>
		<input type="hidden" name="fnr" value="register">
		<input type="submit" value="Register">
	</form>
</div>