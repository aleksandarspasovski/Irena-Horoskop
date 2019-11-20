<?php
require 'config/db.php';

$res_per_page = 10;
if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else{
	$page = 1;
}
$start_from = ($page-1)*$res_per_page;
/******************************This query is just to get records from db***************************/
$query = 'select users.id, users.first_name, users.last_name, users.nickname, users.profile_created, users.active, users_info.country, users_info.city, users_info.address, users_info.gender, comments.id, comments.date_cr, comments.content, comments.users_id from users join comments on users.id = comments.users_id left join users_info on users.id = users_info.id order by comments.id DESC limit '.$start_from.','.$res_per_page.'';
$res = $db->query($query);
$number_of_res = $res->num_rows;
/******************************This query is just to get records from db***************************/
$page_query = 'select * from comments order by date_cr';
$page_result = $db->query($page_query);
$total_record = $page_result->num_rows;
$total_page = ceil($total_record/$res_per_page);

$logged_time = time();
echo $logged_time - $_SESSION['time'],' seconds logged';


?>
<div id="wrapper">
	<p class="main-head">Dobrodosli nazad</p>
	<div>
		<div>
			<p>Strana je dostupna samo ulogovanim korisnicima</p>
		</div>
	</div>
	<?php if ($page > 1): ?>
		<?php else: ?>	
			<div class="com_1">
				<form action="<?php echo URL; ?>dashboard/insertComment/" method="post" id="usrcmnt" class="usrcmnt">
					<h1>Leave a comment</h1>
					<div class="text-info">
						<p>Maksimalan broj karaktera je 1000 po komentar</p>
					</div>
					<textarea placeholder="Message" maxlength="1000" form="usrcmnt" name="text"></textarea> <br>
					<p class="note"><strong>!</strong> Please note, comments must not contain <strong>offensive</strong> words, or your comment will not be posted<strong> !</strong></p>
					<input type="submit" value="Post comment" class="button">
				</form>
				<div class="stats">
					<p>Online users (<?php echo $this->status; ?>)</p>
				</div>
			</div>
		<?php endif; ?>
		<hr>
		<?php $cntr = 0; ?>
		<?php while($row = $res->fetch_assoc()): ?>
			<div id="comments">

				<span class="published-by">Published by: <span class="published-bys"><strong><?php echo $row['nickname']; ?></strong></span> </span> 

					<?php if ($row['active'] == 0): ?>
						<div class="circle"><?php echo $row['active']; ?></div>
					<?php else: ?>
						<div class="circle-on"><?php echo $row['active']; ?></div>
					<?php endif ?>

				<span class="published">Published on: <strong><?php echo $row['date_cr']; ?></strong></span>
				<hr>
	<!--?????--><form action="<?php echo URL; ?>dashboard/insertComment" method="post" id="usrcmnt"> <!--?????-->
					<div class="innercmnt">
						<img src="<?php echo SIGN; ?>picture/profile-pic.png" class="image-user">
						<p>
							<?php echo $row['content']; ?>
						</p>
					</div>
				</form>
				<?php if ($_SESSION['id'] == $row['users_id']): ?>
					<p class="delbtn"><?php echo '<a href="'.URL.'dashboard/deleteComment/'.$row['id'].'">Delete</a>'?></p>
				<?php else: ?>
					<p class="repbtn"><?php echo '<a href="'.URL.'dashboard/replyComment/'.$row['id'].'">Reply</a>'?></p>
				<?php endif; ?>
				
				<div class="display-blur <?php echo ++$cntr; ?>">
					<div class="exit-btn"></div> <!---exit button--->
						<div class="display-user">
								<p class="created-prof">First name: <?php echo $row['first_name']; ?></p>
								<p class="created-prof">Last name: <?php echo $row['last_name']; ?></p>
								<p class="created-prof">Nickname: <?php echo $row['nickname']; ?></p>
								<p class="created-prof">Joined on: <?php echo $row['profile_created']; ?></p>
								<?php if ($row['active'] == 1): ?>
									<p class="created-prof">Status :<span style="color: green;"><?php echo 'Online'; ?></span></p>
								<?php else: ?>
									<p class="created-prof">Status :<span style="color: red;"><?php echo 'Offline'; ?></p>
								<?php endif ?>

								<div class="l-d2">
									<?php if (isset($row['country'])): ?>
										<p class="created-profs">Country: <?php echo $row['country']; ?></p>
									<?php else: ?>
										<p class="created-profs">Country: <?php echo 'No info' ?></p>
									<?php endif ?>

									<?php if (isset($row['city'])): ?>
										<p class="created-profs">City: <?php echo $row['city']; ?></p>
									<?php else: ?>
										<p class="created-profs">Country: <?php echo 'No info' ?></p>
									<?php endif ?>

									<?php if (isset($row['address'])): ?>
										<p class="created-profs">Address: <?php echo $row['address']; ?></p>
									<?php else: ?>
										<p class="created-profs">Country: <?php echo 'No info' ?></p>
									<?php endif ?>

									<?php if (isset($row['gender'])): ?>
										<p class="created-profs">Gender: <?php echo $row['gender']; ?></p>
									<?php else: ?>
										<p class="created-profs">Country: <?php echo 'No info' ?></p>
									<?php endif ?>
								</div>
						</div>
					</div>
			</div>

		<?php endwhile; ?>
		<div class="pagination">
			<ul>
				<?php if ($page > 1): ?>
						<?php echo '<li class="backbtn bb"><a href="dashboard?page='.--$page.'">Back</a></li>'; ?>
					<?php else: ?>
						<button class="backbtn" disabled>Back</button>
				<?php endif ?>

				<?php for ($page=1; $page <= $total_page; $page++) :?>
					<?php echo '<li><a href="dashboard?page='.$page.' ">'.$page.'</a></li>'; ?>
				<?php endfor; ?>

				<?php if (!isset($_GET['page'])): ?>
					<?php echo '<li class="bb"><a href="dashboard?page='.$total_page.'">Last</a></li>'; ?>

					<?php else: ?>
							<?php if ($_GET['page'] == $total_page): ?>
								<button class="backbtn" disabled>Last</button>
							<?php else: ?>
								<?php echo '<li class="bb"><a href="dashboard?page='.$total_page.'">Last</a></li>'; ?>
							<?php endif; ?>
				<?php endif ?>

			</ul>
		</div>
		<p class="comments">Comments <?php echo $start_from;?> / <?php echo $total_record; ?></p>
	</div>