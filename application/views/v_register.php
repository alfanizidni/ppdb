<html>
	<head>
		<title>Form Register</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<style>  
			.loader-wrapper{
			width: 100%;
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
	<div class="container loader-wrapper">
		<div class="card mt-4" style="width: 45rem;">
			<div class="card-header text-center">
				<h5>Form Register</h5>
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
				<form method="post" action="<?php echo base_url(); ?>index.php/register/proses">
					<div class="form-group col-md-12">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
					</div>
					<div class="form-group col-md-12">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                    </div>
                    <div class="form-group col-md-12">
						<label for="nama">Email</label>
						<input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
						<label for="nama">Phone</label>
						<input type="text" class="form-control" name="phone" id="phone" placeholder="Number">
                    </div>
                    <div class="form-group col-md-12">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="form-group col-md-6">
						<label for="inputState">Daftar Sebagai :</label>
						<select id="inputState" class="form-control text-center">
							<option selected>--Pilih--</option>
							<option>Siswa</option>
							<option>Tamu</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary col-md-2">Register</button>
				</form>
			</div>
		</div>
	</div>		
	</body>
</html>