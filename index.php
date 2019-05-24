<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Soundboard FIPA</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Soundboard FIPA</a>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Features -->
    <div class="row text-center">
	<?php
	$files = scandir('audio/');
		foreach($files as $file) { 
		if ($file == '.' || $file == '..') 
			continue;
		
		echo('
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">'.$file.'</h5>
					</div>
					<div class="card-footer">
						<audio controls src="audio/'.$file.'"/>
					</div>
				</div>
			</div>');
	}
	?>
      
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>
