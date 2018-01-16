index.html
DÉTAILS
ACTIVITÉ
index.html
Informations de partage
H
a

Informations générales
Type
HTML
Taille
4 Ko (4 019 octets)
Espace de stockage utilisé
0 octetVous n'êtes pas le propriétaire
Emplacement
form
Propriétaire
Henry Barontini
Modifié
le 11:19 par Henry Barontini
Créé le
11:19
Description
Ajouter une description
Autorisations de téléchargement
Les lecteurs peuvent télécharger
Tous les éléments ont été désélectionnés.

<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>


		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">


		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Formulaire de création de question</h5>
					<form class="" method="post" action="#">
						
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
  										<option value="communiti">Communiti</option>
  										<option value="signup">Inscription</option>
  										<option value="contact">Contact</option>
  										<option value="network">Réseau</option>
  										<option value="other">Autres</option>
  										<option value="evolution">évolution</option>
  										<option value="function">Fonctionnalité</option>
  										<option value="api">API</option> 										
									</select>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<a href="http://deepak646.blogspot.in" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Valider</a>
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