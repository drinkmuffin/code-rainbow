<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="./lib/magnific-popup.css">
		<link rel="stylesheet" href="code-rainbow.css">
		<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
		<script src="./lib/jquery.cookie-1.4.1.min.js"></script>
		<script src="./lib/jquery.scrollstop.min.js"></script>
		<script src="./lib/jquery.lazyload.min.js"></script>
		<script src="./lib/jquery.magnific-popup.min.js"></script>
		<script src="code-rainbow.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="navbar-inner">
				<div class="container">
					<select id="account-select" class="selectpicker" data-width="20%" data-style="btn-green">
						<option >alvoturk9000</option>
						<option>3amotor_com</option>
						<option>d2_sport</option>
					</select>
					<select id="display-limit" class="selectpicker" data-width="20%" data-style="btn-green">
						<option >10</option>
						<option>30</option>
						<option>60</option>
						<option>100</option>
						<option value="all">Unlimited</option>
					</select>
					<select id="category-select" class="selectpicker" data-width="20%"  data-style="btn-green"></select>	
					<form id="nav-search" class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" name="search-tag" id="search-tag" >
						</div>
						<button class="btn btn-green hidden-xs" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</form>
				</div>
			</div>
		</nav>
		<div class="container content-wrapper">
			<div id ="tag-cloud"></div>
			<div id="item-display" class="row"></div>
			
			<div class="upload-drop-zone" id="drop-zone">
				<b><i class="fa fa-cloud-upload"></i></b>
			</div>
			<form action="/file-upload"  role="form"  class="hidden">
				<input id="file-uploader"  name="file" type="file" />
			</form>
			
		</div>
		<script >initializer();</script>
	</body>
</html>