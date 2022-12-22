<?php include 'db_connect.php' ?>
<style>
   
</style>

<div class="container-fluid" >

	

	<div class="row ml-3 mr-3">
			<div class="col-lg-12">
			<div class="card" style = "border:none;">
				<div class="card-body" >
                <h2><b>Loan Management System</b></h2><br>
				<?php echo "Welcome back ".($_SESSION['login_type'] == 3 ? "Dr. ".$_SESSION['login_name'].','.$_SESSION['login_name_pref'] : $_SESSION['login_name'])."!"  ?>
									
				</div>
				<div class="row ml-2 mr-2">
				<div class="col-md-3">
                        <div class="card text-white mb-1" style = "Background-color:#306FC7; border-radius:25px">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-3">
                                        <div class="text-white-75 small">Payments Today</div>
                                        <div class="text-lg font-weight-bold">
                                        	<?php 
                                        	$payments = $conn->query("SELECT sum(amount) as total FROM payments where date(date_created) = '".date("Y-m-d")."'");
                                        	echo $payments->num_rows > 0 ? number_format($payments->fetch_array()['total'],2) : "0.00";
                                        	 ?>
                                        		
                                    	</div>
                                    </div>
                                </div> <br>
                                <div class=" d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="index.php?page=payments"></a>
                                <div class="small text-white">
                                	View <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                    </div>

                <div class="col-md-3">
                        <div class="card text-white mb-3" style = "Background-color:#ED7547; border-radius:25px">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-3">
                                        <div class="text-white-75 small">Borrowers</div>
                                        <div class="text-lg font-weight-bold">
                                        	<?php 
                                        	$borrowers = $conn->query("SELECT * FROM borrowers");
                                        	echo $borrowers->num_rows > 0 ? $borrowers->num_rows : "0";
                                        	 ?>
                                        		
                                    	</div>
                                    </div>
                                </div><br>
                                <div class=" d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="index.php?page=borrowers"></a>
                                <div class="small text-white">
                                	View  <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                    </div>

                  <div class="col-md-3">
                        <div class="card text-white mb-3" style = "Background-color:#60AD41; border-radius:25px">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-3">
                                        <div class="text-white-75 small">Active Loans</div>
                                        <div class="text-lg font-weight-bold">
                                        	<?php 
                                        	$loans = $conn->query("SELECT * FROM loan_list where status = 2");
                                        	echo $loans->num_rows > 0 ? $loans->num_rows : "0";
                                        	 ?>
                                        		
                                    	</div>
                                    </div>
                                </div> <br>
                                <div class=" d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="index.php?page=loans"></a>
                                <div class="small text-white">
                                	View  <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                            </div>
                           
                        </div>
                    </div>
                     <div class="col-md-3">
                        <div class="card text-white mb-3" style = "Background-color:#18213D; border-radius:25px">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-3">
                                        <div class="text-white-75 small">Total Receivable</div>
                                        <div class="text-lg font-weight-bold">
                                        	<?php 
                                        	$payments = $conn->query("SELECT sum(amount - penalty_amount) as total FROM payments where date(date_created) = '".date("Y-m-d")."'");
                                        	$loans = $conn->query("SELECT sum(l.amount + (l.amount * (p.interest_percentage/100))) as total FROM loan_list l inner join loan_plan p on p.id = l.plan_id where l.status = 2");
                                        	$loans =  $loans->num_rows > 0 ? $loans->fetch_array()['total'] : "0";
                                        	$payments =  $payments->num_rows > 0 ? $payments->fetch_array()['total'] : "0";
                                        	echo number_format($loans - $payments,2);
                                        	 ?>
                                        		
                                    	</div>
                                    </div>
                                </div> <br>
                                <div class="d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="index.php?page=loans"></a>
                                <div class="small text-white">
                                	View <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                            </div>
                           
                        </div>
                    </div>

				</div>
			</div>
			
		</div>
		</div>
	</div>

</div>
<script>
	
</script>