<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Loan Management System</title>
 	

<?php include('./header.php'); ?>
<?php include('./db_connect.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
	html{
    height: 100px;
}

.login-box{
	background: url(assets/img/new.png);
    position:absolute;
    top: 50%;
    left:50%;
    width: 400px;
    padding:40px;
    transform:translate(-50%, -50%);
    background:(0,0,0,.5);
    box-sizing:border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius:10px;
	height:70vh;
}
.login-box h2{
    margin: 0 0 30px;
    padding:0;
    color:#000;
    text-align: center;
    font-style:initial;
    font-size:230%;
     

}
.login-box .user-box{
    position: relative;
}
.login-box .user-box input{
    width: 100%;
    padding: 10px 0;
    font: size 16px;
    color:#0000;
    margin-bottom: 30px;
    border: none;
    border-bottom:1px solid #000 ;
    outline: none;
    background: transparent;
    -webkit-text-fill-color: black ;
    font-style:calc(0, 0, 12px);
    font-size: larger;
    font-weight: 400;
}
.login-box .user-box label{
    position: absolute;
    top:0;
    left: 0;
    padding: 10px 0;
    font-size:  16px;
    color: #000;
    pointer-events: none;
    transition: .5s;
    font-style: calc(0, 0, 12px);
    font-size: larger;
    font-weight: 400;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~label{
    top: -20px;
    left:0;
    color:#000
    ;
    font-size: 12px;
}

.login-box form input.submit{
	border-radius:40%;
		Background-color:#ff5100;
		border:none;
    border: none;
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color:#000;
    font-size: 16px;
    text-decoration:none;
    text-transform: uppercase;
    overflow:hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px;
}
/*.login-box input.submit:hover{
    background: #03e9f4;
    background: black;
    color: white;
    border-radius: 5px;
    
}*/
.login-box input span{
    position: absolute;
    display: block;
}
.login-box input span:nth-child(1){
    top:0;
    left:-100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #03e9f4);
    animation: btn-anim1 is linear infinite;
} 
@keyframes btn-anim1{
    0% {
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}
.login-box a span:nth-child(2){
    top: -100%;
    right:0%;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #000);
    animation: btn-anim2 is linear infinite;
    animation-delay: .25s;

}
@keyframes btn-anim2{
    0%{
        top: -100%;
    }
    50%,100%{
        top: 100%;
    }
}
.login-box a span:nth-child(3){
    bottom: 0;
    right:-100%;
    width:100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #03e9f4);
    animation:btn-anim3 is linear infinite;
    animation-delay: .5s;
}
@keyframes btn-anim3{
    0%{
        right:-100%;

    }
    50%,100%{
        right: 100%;
    }
}
.login-box a span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent,#03e9f4);
    animation: btn-anim4 is linear infinite;
    animation-delay: .75s;
}
@keyframes btn-anim4{
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom:100%;
    }
}

	body{
		/*width: 100%;
	    height: calc(100%);*/
		margin:0;
    padding:0;
		background:url(assets/img/background.png);
		background-size:cover;
		background-repeat:no-repeat;
	    /*background: #007bff;*/
	}
	
	
	#login .card{
		margin: auto;
		z-index: 1
	}
	#login{
		background: url(assets/img/new.png);
		background-size:cover;
		background-repeat:no-repeat;
		margin:auto;
		height:100vh;
	}
	


</style>

<body>


  
  		

  		<!----<div id="login">
		   
  			<div class="card ">
			  <div class="col-md-2" >
			  <img src="assets/img/g5 core logo.png" alt="" srcset="">
			</div>
  				<div class="card-body">
				  
  					<form id="login-form" >
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button>
  					</form>
  				</div>
  			</div>
  		</div>--->
		 
		  <div class="login-box">
		  <div class="col-md-2" >
			  <img src="assets/img/g5 core logo.png" alt="" srcset="">
			</div>
        <h2 style="color:#ffffff;">Admin panel</h2>
        <p style="color:#ffffff; text-align:center;">Loan management System</p>
        <form id="login-form">
           <div class="user-box">
            <input type="text" id="username" name="username" required="">
            <label>Name</label>
           </div>
            <div class="user-box">
                <input type="Password"id="password" name="password" required="">
                <label>Password</label>
            </div>
            <input type="submit" class="submit" value="Login" name="Signin">
        </form>
    </div>
   

 

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form input[type="submit"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form input[type="submit"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>