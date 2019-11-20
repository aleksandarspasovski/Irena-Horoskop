<div>
	<h1>Zdravo <?php echo $this->profile['first_name'];?> <?php echo $this->profile['last_name'];?></h1>
	<div class="nav-bar">
		<ul>
			<li><a href="<?php echo URL; ?>profile/index/<?php echo $_SESSION['id']; ?>">Update account</a>
			<a href="<?php echo URL; ?>profile/index/<?php echo $_SESSION['id']; ?>" class="setting">da</a></li>

			<li><a href="<?php echo URL; ?>profile/index/<?php echo $_SESSION['id']; ?>?info">About your account</a><a href="<?php echo URL; ?>profile/index/<?php echo $_SESSION['id']; ?>?info" class="account">da</a></li>

			<li><a href="<?php echo URL; ?>profile/deleteAccount/<?php echo $_SESSION['id']; ?>">Delete Account</a><a href="<?php echo URL; ?>profile/index/<?php echo $_SESSION['id']; ?>?info" class="delete-acc">da</a></li>
		</ul>
		</div>
	</div>
	<?php if (isset($_GET['info'])): ?>
		<div class="userimg">
			<div id="form-1" class="form-1">
				<div class="form-controll">
					<p class="created-prof">First Name: <?php echo $this->profile['first_name']; ?></p>
					<hr>
				</div> <br>
				<div class="form-controll">
					<p class="created-prof">Last Name: <?php echo $this->profile['last_name']; ?></p>
					<hr>
				</div> <br>
				<div class="form-controll">
					<p class="created-prof">Nickname: <?php echo $this->profile['nickname']; ?></p>
					<hr>
				</div> <br>
				<div class="form-controll">
					<p class="created-prof">Profile created: <?php echo $this->profile['profile_created']; ?></p>
					<hr>
				</div> <br>
				<div class="form-controll">
					<?php if ($this->profile['active'] != 0): ?>
						<p class="created-prof">Status: <span style="color: green;"><?php echo 'Online'; ?></span></p>
					<?php else: ?>
						<p class="created-prof">Status: <span style="color: red;"><?php echo 'Offline'; ?></p>
					<?php endif; ?>
					<hr>
				</div> <br>
			</div>
			<div class="userinfo">
				<div class="form-controll">
					<?php if (isset($this->profile['country'])): ?>
						<p class="created-prof">Country: <?php echo $this->profile['country']; ?></p>
					<?php else: ?>
						<p class="created-prof">Country: <?php echo '/' ?></p>
					<?php endif ?>
					<hr>
				</div> <br>
				<div class="form-controll">
					<?php if (isset($this->profile['city'])): ?>
						<p class="created-prof">City: <?php echo $this->profile['city']; ?></p>
					<?php else: ?>
						<p class="created-prof">City: <?php echo '/' ?></p>
					<?php endif ?>
					<hr>
				</div> <br>
				<div class="form-controll">
					<?php if (isset($this->profile['address'])): ?>
						<p class="created-prof">Address: <?php echo $this->profile['address']; ?></p>
					<?php else: ?>
						<p class="created-prof">Address: <?php echo '/' ?></p>
					<?php endif ?>
					<hr>
				</div> <br>
				<div class="form-controll">
					<?php if (isset($this->profile['phone_number'])): ?>
						<p class="created-prof">Phone number: <?php echo $this->profile['phone_number']; ?></p>
					<?php else: ?>
						<p class="created-prof">Phone number: <?php echo '/'; ?></p>
					<?php endif ?>
					<hr>
				</div> <br>
				<div class="form-controll">
					<?php if (isset($this->profile['gender'])): ?>
						<p class="created-prof">Gender: <?php echo $this->profile['gender']; ?></p>
					<?php else: ?>
						<p class="created-prof">Gender: <?php echo '/' ?></p>
					<?php endif ?>
					<hr>
				</div> <br>
			</div>
		</div>
		<?php else: ?>
			<!-- <h1>This information will be available to other users</h1> -->
			<div class="userimg">
				<form action="<?php echo URL; ?>profile/usersProfile/<?php echo $_SESSION['id']; ?>" method="post" id="form-1">
					<?php if (isset($_GET['err'])) : ?>
						<div class="err-pop">

							<?php foreach($_GET['err'] as $err) : ?>

								<p class="err-notify"><?php echo $err; ?> |</p>

							<?php endforeach; ?>

						</div>
						<hr>
					<?php endif; ?>

					<?php if (isset($_GET['succ'])) : ?>
						<div class="succ-pop">
							<?php foreach($_GET['succ'] as $succ) : ?>

								<p class="succ-notify"><?php echo $succ; ?></p>

							<?php endforeach; ?>
						</div>
						<hr>
					<?php endif; ?>
					<div class="first-part">
						<div class="form-controll">
							<label>First name <span style="color: red;">*</span></label>
							<input type="text" name="first_name" value="<?php echo $this->profile['first_name']; ?>">
						</div> <br>
						<div class="form-controll">
							<label>Last name <span style="color: red;">*</span></label>
							<input type="text" name="last_name" value="<?php echo $this->profile['last_name']; ?>">
						</div> <br>
						<div class="form-controll">
							<label>Nickname <span style="color: red;">*</span></label>
							<input type="text" name="nickname" maxlength="20" value="<?php echo $this->profile['nickname']; ?>">
						</div> <br>
						<div class="form-controll">
							<p class="hint">You can use current password or new one</p>
							<label>Change Password <span style="color: red;">*</span></label>
							<input type="password" name="password">
						</div> <br>
						<div class="form-controll">
							<label>Confirm Password <span style="color: red;">*</span></label>
							<input type="password" name="re_password">
						</div> <br>
					<input type="submit" value="Update Profile">
					</div>
				</form>

				<form action="<?php echo URL; ?>profile/usersProfileInfo/<?php echo $_SESSION['id']; ?>" method="post" id="form-2">
					<p class="optional">This is optional form</p>
					<?php if (isset($_GET['errin'])) : ?>
						<div class="err-pop">

							<?php foreach($_GET['errin'] as $err) : ?>

								<p class="err-notify"><?php echo $err; ?> |</p>

							<?php endforeach; ?>

						</div>
						<hr>
					<?php endif; ?>

					<?php if (isset($_GET['succin'])) : ?>
						<div class="succ-pop">
							<?php foreach($_GET['succin'] as $succ) : ?>

								<p class="succ-notify"><?php echo $succ; ?></p>

							<?php endforeach; ?>
						</div>
						<hr>
					<?php endif; ?>

					<div class="second-part">
						<div class="form-controll">
							<label>Country <span style="color: red;">*</span></label>
							<input type="text" name="country">
						</div> <br>
						<div class="form-controll">
							<label>City <span style="color: red;">*</span></label>
							<input type="text" name="city">
						</div> <br>
						<div class="form-controll">
							<label>Address <span style="color: red;">*</span></label>
							<input type="text" name="address">
						</div> <br>
						<div class="form-controll">
							<label>Phone number <span style="color: red;">*</span></label>
							<input type="text" name="phone_number">
						</div> <br>
						<div class="form-controll">
							<label>Gender <span style="color: red;">*</span></label>
							<br>
							Male<input type="radio" name="gender" value="male" checked> /
							Female<input type="radio" name="gender" value="female"> /
							Other<input type="radio" name="gender" value="other">
						</div> <br>
						<input type="submit" value="Update Profile Info">
					</div>
				</form>
			</div>
	<?php endif; ?>