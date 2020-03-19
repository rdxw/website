<!DOCTYPE html>
<html>
	<head>
		<style>
			#fiv{
				padding: 1%;
				}
				.rkc{
					margin-top: 15px;
					margin-right: -14px;
					margin-left: -20px;
					background-color: #343a40;
					color: white;
				}
				nav {
					margin-bottom: 15px;
				}
		</style>
		<title>File Upload Status</title>
		<link rel="shortcut icon" href="https://1.bp.blogspot.com/-OJyRiPQaLS8/Xj7H1bJDZZI/AAAAAAAAAIA/87CuW0cP4Lk3KtFeWX-fYe1ySC99VcUKgCLcBGAsYHQ/s1600/file%2Bupload.png"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="./">File Upload</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="./">Home<span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>
		<?php
		if (move_uploaded_file($_FILES["myfile"]["tmp_name"], "photos/".$_FILES
		["myfile"]["name"])){
		echo "File Uploaded";
		}
		else{
		echo "File Not Uploaded";
		}
		?>
		<!-- Footer -->
		<div class="rkc">
			<footer class="page-footer font-small blue">
				<!-- Copyright -->
				<div class="footer-copyright text-center py-3">© 2020 Copyright:
					<a href="./"> uploadfile.chouhan.ml</a>
				</div>
			</div>
			<!-- Copyright -->
		</footer>
		<!-- Footer -->
		<!-- Bootstap file -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<!-- Bootstap file -->
	</div>
</body>
</html>
