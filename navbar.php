
<style>
	
</style>
<nav id="sidebar" style = "background: url(assets/img/Backkk.png); background-size: cover;">
<div class="col-md-1 float-left pt-3" >
  			
			  <img src="assets/img/g5 core logo.png" alt="" srcset="">
					
				</div><br><br><br><br>
		<div class="sidebar-list ">

				<a style = "background:none;"href="index.php?page=home" class="nav-item nav-home"><i class="fa fa-home"></i> Home</a>
				<a style = "background:none;" href="index.php?page=loans" class="nav-item nav-loans"><i class="fa fa-file-invoice-dollar"></i> Loans</a>	
				<a style = "background:none;" href="index.php?page=payments" class="nav-item nav-payments"><i class="fa fa-money-bill"></i> Payments</a>
				<a style = "background:none;" href="index.php?page=borrowers" class="nav-item nav-borrowers"><i class="fa fa-user-friends"></i> Borrowers</a>
				<a style = "background:none;" href="index.php?page=plan" class="nav-item nav-plan"><span class='icon-field'><i class="fa fa-list-alt"></i> Loan Plans</a>	
				<a style = "background:none;" href="index.php?page=loan_type" class="nav-item nav-loan_type"><i class="fa fa-th-list"></i> Loan Types</a>		
				<?php if($_SESSION['login_type'] == 1): ?>
				<a style = "background:none;" href="index.php?page=users" class="nav-item nav-users"><i class="fa fa-users"></i> Users</a>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<a style = "background:none;" href="ajax.php?action=logout" class="nav-item nav-users">Logout <i class="fa fa-power-off"></i></a>
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
