<!DOCTYPE html>
<html lang="en">
	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Website Font style -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>


		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">

		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Admin</title>

		<style type="text/css">
			#playground-container {
				height: 500px;
				overflow: hidden !important;
				-webkit-overflow-scrolling: touch;
			}
			body, html{
			     height: 100%;
			 	background-repeat: no-repeat;
			 	background:url(https://i.ytimg.com/vi/4kfXjatgeEU/maxresdefault.jpg);
			 	font-family: 'Oxygen', sans-serif;
				    background-size: cover;
			}

			.main{
			 	margin:50px 15px;
			}

			h1.title { 
				font-size: 50px;
				font-family: 'Passion One', cursive; 
				font-weight: 400; 
			}

			hr{
				width: 10%;
				color: #fff;
			}

			.form-group{
				margin-bottom: 15px;
			}

			label{
				margin-bottom: 15px;
			}

			input,
			input::-webkit-input-placeholder {
				font-size: 11px;
				padding-top: 3px;
			}

			.main-login{
				background-color: #fff;
				/* shadows and rounded borders */
				-moz-border-radius: 2px;
				-webkit-border-radius: 2px;
				border-radius: 2px;
				-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			}

			.form-control {
				height: auto!important;
				padding: 8px 12px !important;
			}

			.input-group {
				-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
				-moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
				box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
			}

			#button {
				border: 1px solid #ccc;
				margin-top: 28px;
				padding: 6px 12px;
				color: #666;
				text-shadow: 0 1px #fff;
				cursor: pointer;
				-moz-border-radius: 3px 3px;
				-webkit-border-radius: 3px 3px;
				border-radius: 3px 3px;
				-moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
				-webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
				box-shadow: 0 1px #fff inset, 0 1px #ddd;
				background: #f5f5f5;
				background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
				background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
				background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
				background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
				background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
			}

			.main-center{
				margin-top: 30px;
				margin: 0 auto;
				max-width: 400px;
				padding: 10px 40px;
				background:#009edf;
				color: #FFF;
				text-shadow: none;
				-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
				-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
				box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

			}

			span.input-group-addon i {
				color: #009edf;
				font-size: 17px;
			}

			.login-button{
				margin-top: 5px;
			}

			.login-register{
				font-size: 11px;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Formulaire de création de question</h5>
					<form class="" method="POST" action="../admin">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Votre question</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-question fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="question" id="question"  placeholder="Entrer votre question"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">La réponse</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-info fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="reponse" id="reponse"  placeholder="Votre réponse"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">TAG</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-tag fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control tm-input tm-input-info"  name="tag" id="tag" value="" />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Categorie</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-menu-right fa-lg" aria-hidden="true"></i></span>
									<select type="password" class="form-control" name="categorie" id="categorie">
  										<option></option>
  										<option value="1">Communiti</option>
  										<option value="2">Inscription</option>
  										<option value="3">Contact</option>
  										<option value="4">Réseau</option>
  										<option value="5">Autres</option>
  										<option value="6">évolution</option>
  										<option value="7">Fonctionnalité</option>
  										<option value="8">API</option>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Valider">
						</div>
						
					</form>
				</div>
			</div>
		</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>

	<script type="text/javascript">
		$(".tm-input").tagsManager();
	</script>

	</body>
</html>