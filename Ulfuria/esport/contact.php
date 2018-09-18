<!DOCTYPE html>
<html lang="en">
<?php 
include 'header.html';
?>
<title>Ulfuria - Nous contacter</title>
</head>

<body>
	<?php
		include 'menu.html';
	?>

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Nous contacter</h1>
				</header>
				
				<p>
					Vous avez un problème sur la communauté ou sur les differentes applications ? N'hésitez pas à nous contacter via le formulaire ci-dessous 
				</p>
				<br>
					<form>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Nom / Pseudo">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Email">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Votre message" class="form-control" rows="9"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>
							</div>
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Envoyer votre message">
							</div>
						</div>
					</form>
				<br>
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Email :</h4>
					<address>
						ulfuria@gmail.com
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->

	<?php
		include 'footer.php';
	?>
	

