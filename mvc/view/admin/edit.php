<?php 
	print_r($this->admin);
	$this->admin['id'];
 ?>

<h1 style="text-align: center;">Edit korisnika</h1>
<form action="<?php echo URL; ?>admin/editSave/<?php echo $this->admin['id']; ?>" method="post">

	<label>First name</label>
	<input type="text" name="first_name" value="<?php echo $this->admin['first_name']; ?>"> <br>

	<label>Last name</label>
	<input type="text" name="last_name" value="<?php echo $this->admin['last_name']; ?>"> <br>

	<label>Email</label>
	<input type="email" name="email" value="<?php echo $this->admin['email']; ?>"> <br>

	<label>Password</label>
	<input type="Password" name="password"><br>

	<label>Nickname</label>
	<input type="text" name="nickname" value="<?php echo $this->admin['nickname']; ?>">

	<select name="role">
		<option value="default">Default</option>
		<option value="admin">Admin</option>
	</select>
	<input type="submit" value="Submit">

</form>
<a href="../">Back</a>