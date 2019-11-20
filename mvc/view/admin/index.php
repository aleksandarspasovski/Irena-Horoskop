<?php 
$hsh = 'o 23e23e iu23cfweif4fcw fe t';
$hash = hash('md5', $hsh);
 ?>
<h1 class="h1">Korisnici</h1>
<p class="access">Only admin have access to this page</p>
<div class="form-box">
	<h2>Add new users into database</h2>
	<form action="<?php echo URL; ?>admin/create" method="post">

		<label>First name <span style="color: red;">*</span></label> <br>
		<input type="text" name="first_name">
		<br>
		<label>Last name <span style="color: red;">*</span></label> <br>
		<input type="text" name="last_name">
		<br> 
		<label>Email <span style="color: red;">*</span></label> <br>
		<input type="email" name="email"> 
		<br>
		<label>Password <span style="color: red;">*</span></label> <br>
		<input type="Password" name="password">
		<br>
		<label>Nickname <span style="color: red;">*</span></label> <br>
		<input type="text" name="nickname" maxlength="17">
		<br><br>
		<label>Select role /</label> <select name="role" class="role">
			<option value="default">Default</option>
			<option value="admin">Admin</option>
		</select>
		<br>
		<br>
		<input type="submit" value="Submit">
	</form>
</div>
<div class="table-user">
	<table border="1px" cellpadding="10" cellspacing="0">
		<thead>
			<tr class="table">
				<th>id</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Nickname</th>
				<th>Role</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($this->userList as $val): ?>
				<tr class="table-color">
					<td><?php echo $val['id']; ?></td>
					<td><?php echo $val['first_name']; ?></td>
					<td><?php echo $val['last_name']; ?></td>
					<td><?php echo $val['email']; ?></td>
					<td><?php echo $val['password']; ?></td>
					<td><?php echo $val['nickname']; ?></td>
					<td><?php echo $val['role']; ?></td>
					<td class="edit"><?php echo '<a href="'.URL.'admin/edit/'.$val['id'].'?='.$hash.'">Edit</a>'?></td>
					<td class="del"><?php echo '<a href="'.URL.'admin/delete/'.$val['id'].'">Delete</a>'?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>