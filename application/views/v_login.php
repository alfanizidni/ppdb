<html>
	<head>
		<title>Form Login</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

		<style>  
			.loader-wrapper{
			width: 100%;
			height:100%;
			position: absolute;
			top:0;
			left:0;
			display: flex;
			justify-content: center;
			align-items:center;
			background-color: #fff;
			z-index: 100000;
			}
			body {
			background-image : url(''); 
			}
		</style>
	</head>

	<body>
		
	<div class="container ">
		<div class="card loader-wrapper" >
			<div class="card-header mt-6">
				Form Login
			</div>
		
			<div class="card-body">
				<?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>

				<?php 
				if($this->session->flashdata('success_register') !='')
				{
					echo '<div class="alert alert-info" role="alert">';
					echo $this->session->flashdata('success_register');
					echo '</div>';
				}
				?>
				<form action="<?php echo base_url();?>login/aksi_login" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
                    <button type="submit" id="btnlogin" class="btn btn-primary">Login</button>
                    <a href="<?php echo base_url('register');?>">Need an account? Sign up!</a></div>
                    <!-- <button type="submit" class="btn btn-primary">Register</button> -->
				</form>
			</div>
		</div>
	</div>		
	</body>
</html>


