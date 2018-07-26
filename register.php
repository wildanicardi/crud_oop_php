<?php 
	include 'layout/header.php';
	include 'function/function.php';

	#membuat object
	$db = new Crud;

	if ($_POST['tambahdata']) {
		$namadepan=$_POST['namadepan'];
		$namabelakang=$_POST['namabelakang'];
		$namaku=$namadepan.$namabelakang;
		$email=$_POST['email'];
		$alamat=$_POST['alamat'];
		$kota=$_POST['kota'];
		$provinsi=$_POST['provinsi'];
		$zip=$_POST['zip'];
		$jk=$_POST['jk'];
		$nomerhp=$_POST['hp'];
		$password = $_POST['password'];
		#memasukkan data kedalam array
		$data = array(
			'namadepan' => $namadepan,
			'namabelakang' => $namabelakang,
			'email' => $email,
			'alamat' => $alamat,
			'kota' => $kota,
			'provinsi' => $provinsi,
			'zip' => $zip,
			'kelamin' => $jk,
			'nomerhp' => $nomerhp,
			'password' =>$password
		);

		$db->tambahdata($data);

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Register </title>
</head>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-4.0.0/dist/css/bootstrap.min.css">
<style type="text/css">
	body{
		color: #fff;
		background: #2ecc71;
		font-family: 'Roboto', sans-serif;
	}
	.form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 58%;
		margin: 0 auto;
		padding: 51px 0;
	}
	.signup-form .btn1{        
        font-size: 16px;
        font-weight: bold;
        margin-left: 62px;	
		min-width: 281px;
        outline: none !important;
    }
    .submit{
    	background:#2980b9;
    	color: white;
    	padding: 10px;
    	font-weight: bold;
    	font-size: 15px; 
    	border: none;
    	border-bottom: 2px solid rgba(0,0,0,0.21);
    }
    .reset{
    	background: #e67e22;
    	color: white;
    	font-weight: bold;
    	font-size: 15px; 
    	border: none;
    	padding: 10px;
    	border-bottom: 2px solid rgba(0,0,0,0.21);
    }
    .back,.back:hover{
    	background: #f39c12;
    	color: white;
    	font-weight: bold;
    	font-size: 15px; 
    	border: none;
    	padding: 10px;
    	border-bottom: 2px solid rgba(0,0,0,0.21);
    	text-decoration: none;
    }
</style>
<body>
	<div class="signup-form">
		<form action="" method="POST">
			<hr>
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <input type="text" placeholder="Nama Depan"  name="namadepan" id="namadepan" class="form-control " >
			    </div>
			    <div class="form-group col-md-6">
					<input type="text" placeholder="Nama Belakang" name="namabelakang" id="namabelakang" class="form-control " >
			    </div>
			 </div>
			<div class="form-group">
				<label for="email" class="control-label "></label>
					<div >	
						<input type="text" placeholder="email" name="email" id="email" class="form-control " >
					</div>
			</div>
			<div class="form-group">
				<label for="alamat" class="control-label " ></label>
					<div >
						<textarea type="text" placeholder="alamat" name="alamat" class="form-control " id="alamat" ></textarea>
					</div>
			</div>
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <input type="text" class="form-control" id="inputCity" name="kota" placeholder="Kabupaten/Kota">
			    </div>
			    <div class="form-group col-md-4">
			      <select id="inputState" class="form-control" name="provinsi">
			        <option selected>Provinsi</option>
			        <option>Jawa Timur</option>
			        <option>Jawa Barat</option>
			        <option>Jawa Tengah</option>
			        <option>Jakarta</option>
			        <option>Yogyakarta</option>
			        <option>Bali</option>
			      </select>
			    </div>
			    <div class="form-group col-md-2">
			      <input type="text" class="form-control" id="inputZip" name="zip" placeholder="Zip">
			    </div>
			</div>
			<div>
				<label for="jk" class="control-label "></label>
					<div >	
						<select class="form-control " id="jk" name="jk">
							<option >laki-laki</option>
							<option>perempuan</option>
						</select>
					</div>
			</div>
			<div>
				<label for="nomerhp" class="control-label "></label>
					<div >	
						<input type="text" placeholder="nomer hp" id="nomerhp"  class="form-control " name="hp" >
					</div>
			</div>
			<div>
				<label for="password" class="control-label "></label>
					<div>	
						<input type="password" placeholder="password" id="password" class="form-control" name="password" > 
					</div>
					<div >	
						<button type="button" onclick="show(this)" class="btn">Show</button>
					</div>
			</div>
			<br>
			<div class="btn-group col-md-4">
				<input type="submit" class="submit" name="tambahdata">
				<input type="reset" class="reset" name="reset">
				<a href="index.php" class="back">Kembali</a>
				<!-- <button type="submit" name="submit" class="btn btn-primary ">Register</button>
				<button type="button" name="reset" class="btn btn-primary"><a href=""></a>Reset</button>
				<button type="reset" name="kembali" class="btn btn-primary"><a href=""></a>Kembali</button> -->
			</div>
		</form>
	</div>
	<script type="text/javascript">
		function show(x) {
		    var y = document.getElementById("password");
		    if ( y.type === "password") {
		        y.type = "text";
		    } else {
		        y.type = "password";
		    }
	    }
	</script>
</body>

</html>