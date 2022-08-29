<!DOCTYPE html>
<html>
	<head>
	<title>Ashraff's Portfolio</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="viewBlog.php">Blog</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="wrapper">
			
			<!-- HEADER -->
			<header class="header">
				<span id="headerText">Ashraff's Blog</span>
			</header>
		    <article class="main">
			
			<!-- MAIN COLUMN -->
				<div class="card text-center">
					<div class="card-header">
						<h3>Blog Entries</h3>
					</div>
					<div class="card-body" style="font-size: 95%;">
						<h4 class="card-title"></h4>
					</div>
				</div>
		  	</article>
			
			<!-- LEFT SIDE ASIDE -->
			<aside class="aside aside-1">

				<div class="card" style="margin-bottom: 5em;">
					<div class="card-header">
						<h4 style="text-align: center;">Archive</h4>
						<p style="text-align: center; font-size: 95%;">Sort by month:</p>
					</div>
						<ul class="list-group list-group-flush" id="month">
							<li class="list-group-item" onclick="alert('Pressed')">March 2019</li>
							<li class="list-group-item">February 2019</li>
							<li class="list-group-item">January 2019</li>
							<li class="list-group-item">December 2018</li>
						</ul>
				</div>
				
				<div class="card">
						<h4 class="card-header" style="text-align: center;">Social Media</h4>
  						<div class="card-body">
							<p class="card-text" style="text-align: center;">Share my blog entries on your social media</p>
						</div>
				</div>
			</aside>
			
			<!-- RIGHT SIDE ASIDE -->
		  	<aside class="aside aside-2">
				<div class="card" style="margin-bottom: 5em;">
						<h4 class="card-header" style="text-align: center;">Blog Functions</h4>
  						<div class="card-body">
							<a href="addPost.html" class="btn btn-primary">Add Entry</a>
							<a href="login.html" class="btn btn-primary">Login</a>
						</div>
				</div>
			</aside>
		</div>
		<footer class="footer">
			<h5>Copyright Ashraff Hatz 2019 &copy;</h5>
		</footer>
	</body>
</html>