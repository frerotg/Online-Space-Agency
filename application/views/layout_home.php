<!DOCTYPE html>
<head>
    <meta charset="UTF-8">

    <title>Online Space Agency</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="stylesheet" href="<?=base_url(); ?>css/bootstrap.min.css">-->
    <!-- <link rel="stylesheet" href="<?=base_url(); ?>css/bootstrap-responsive.min.css"> -->
    <link rel="stylesheet" href="<?=base_url(); ?>css/jquery.css">
    <link rel="stylesheet" href="<?=base_url(); ?>css/style_home.css">
</head>
<body>
	<section class="home">
		<header><a href="">S'inscrire &<br />monter vers les etoiles</a></header>
		<div class="content">
			<div class="description">
				<div class="description-left">
					<h1><span class="little-h1">Un jeu</span><br /><span class="big-h1">amusant</span></h1>
					<p>
					Online Space Agency est jeu qui vous met dans la peu d’un directeur d’agence spatiale, vous gerer le personnel, les batiments, les priorité de recherche et l’équipement. Assemblez cet équipement afin de lancer vos propres missions dans l’espace et ainsi entrer dans la course à l’espace.
					</p>
				</div>
				<div class="description-right">
					<h1><span class="little-h1">Un jeu</span><br /><span class="big-h1">educatif</span></h1>
					<p>
					Online Space Agency est jeu qui vous met dans la peu d’un directeur d’agence spatiale, vous gerer le personnel, les batiments, les priorité de recherche et l’équipement. Assemblez cet équipement afin de lancer vos propres missions dans l’espace et ainsi entrer dans la course à l’espace.
					</p>
				</div>
				<div class="logo">
					<img src="<?=base_url(); ?>img/layout/logo.png" alt="Online Space Agency" />
				</div>
			</div>
			<div class="connection">
					<?= form_open('c_user/connection'); ?>
						<?= form_fieldset('<span>Informations de connexion</span>'); ?>
							<div class="contener-username">
							<?= form_input(array('name' => 'username','id' => 'username')); ?>
							</div>
							<div class="contener-password">
							<?= form_password(array('name' => 'password','id' => 'password')); ?>
							</div>
							<?= form_submit(array('value' => 'Se Connecter','class' => 'input-connection')); ?>
						<?= form_fieldset_close(); ?>
					<?= form_close(); ?>
				<?php
				if($error): ?>
				<p><?= $error ?></p>
				<?php endif; ?>

			</div>
		</div>
	</section>
</body>
<script src="<?=base_url(); ?>js/jquery.js"></script>
<script src="<?=base_url(); ?>js/jquery-ui.js"></script>
<script src="<?=base_url(); ?>js/bootstrap.min.js"></script>
<?php
if(isset($script)):
    echo ($script);
endif; 
?>
</html>