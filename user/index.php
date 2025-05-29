<?php 
	include 'include/header.php'; 
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		// User is logged in, show user-specific content
		
		// Handle the confirmation dialog display
		if(isset($_POST['date'])){
			$showform = "
<div class='alert alert-danger alert-dismissible fade show' role='alert' style='background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; text-align: center; padding: 20px;'>
    <strong>Are you sure to update your record?</strong>
    <form target='' method='post' style='margin-top: 15px;'>
        <input type='hidden' name='userID' value='{$_SESSION['user_id']}'>
        <button type='submit' name='updateSave' class='btn btn-danger' style='background-color: #dc3545; border-color: #dc3545; margin-right: 10px; padding: 8px 20px; border-radius: 20px;'>Yes</button>
        <button type='button' class='btn btn-info' data-dismiss='alert' style='background-color: #17a2b8; border-color: #17a2b8; padding: 8px 15px; border-radius: 20px;'>
            Oops! No
        </button>      
    </form>
</div>";
		}
		
		// Handle the actual update when "Yes" is clicked
		if(isset($_POST['updateSave']) && isset($_POST['userID'])){
			$userID = $_POST['userID'];
			$crntDate = date_create();
			$crntDate = date_format($crntDate,'Y-m-d');
			$sql = "UPDATE donor SET save_life_date = '$crntDate' WHERE id = '$userID'";
			
			if(mysqli_query($connection, $sql)){
				$_SESSION['save_life_date'] = $crntDate;
				header('Location: index.php');
				exit();
			} else {
				$submitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Data not inserted. Try again.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>';
			}
		}
?>

<style>
	h1, h3 {
		display: inline-block;
		padding: 10px;
	}
	.name {
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data {
		background-color: white;
		border-radius: 5px;
		margin: 20px 5px 0px 5px;
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
	.confirmation-dialog {
		background-color: #f8d7da;
		border: 1px solid #f5c6cb;
		border-radius: 10px;
		padding: 20px;
		text-align: center;
		margin: 20px 0;
	}
	.btn-rounded {
		border-radius: 20px;
		padding: 8px 20px;
		margin: 0 5px;
	}
</style>

<div class="container" style="padding: 60px 0;">
	<div class="row">
		<div class="col-md-12 col-md-push-1">
			<div class="panel panel-default" style="padding: 20px;">
				<div class="panel-body">
					<?php if(isset($submitError)) echo $submitError; ?>
					
					<div class="heading text-center">
						<h3>Welcome</h3> 
						<h1><?php if (isset($_SESSION['name'])) echo htmlspecialchars($_SESSION['name']); ?></h1>
					</div>
					<p class="text-center">Here you can manage your account and update your profile.</p>
					
					<div class="test-success text-center" id="data" style="margin-top: 20px;">
						<?php if(isset($showform)) echo $showform; ?>
					</div>
					
					<?php 
						$safeDate = $_SESSION['save_life_date'];
						
						if ($safeDate == '0') {
							// Show Save The Life button
							echo '<div class="text-center">';
							echo '<form method="post">';
							echo '<button style="margin-top: 20px;" name="date" id="save_the_life" type="submit" class="btn btn-lg btn-danger center-aligned">Save The Life</button>';
							echo '</form>';
							echo '</div>';
						} else {
							$start = date_create("$safeDate");
							$end   = date_create();
							$diff  = date_diff($start, $end);
						
							$diffMonth = $diff->m;
						
							if($diffMonth >= 3){
								echo '<div class="text-center">';
								echo '<form method="post">';
								echo '<button style="margin-top: 20px;" name="date" id="save_the_life" type="submit" class="btn btn-lg btn-danger center-aligned">Save The Life</button>';
								echo '</form>';
								echo '</div>';
							} else {
								echo '<div class="donors_data">
								<span class="name">Congratulation!</span>
								<span>You already saved a life. You will be able to donate blood after three months. We are very thankful to you.</span>
								</div>';
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	} else {
		header('Location: ../index.php');
		exit();
	}
	include 'include/footer.php'; 
?>