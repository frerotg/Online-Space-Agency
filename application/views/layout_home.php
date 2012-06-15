<!DOCTYPE html>
<head>
    <meta charset="UTF-8">

    <title>Online Space Agency</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="<?=base_url(); ?>css/jquery.css">
    <link rel="stylesheet" href="<?=base_url(); ?>css/style_home.css">
</head>
<body>
	<section class="register">
		<div class="contener-form-register">
			<div class="corner-top-left corner"></div>
			<div class="corner-top-right corner"></div>
			<div class="title-register">
				<h1><span class="little-h1">à toi de creer ton</span><br /><span class="big-h1">Agence Spatiale</span></h1>
			</div>
			<?php $attributes = array('class' => 'register', 'autocomplete' => 'off'); ?>
			<?= form_open_multipart('c_user/register', $attributes); ?>
				<div class="form-register1 form-register">
					<?= form_label("Nom d'Utilisateur : <span class='error'></span>", 'username'); ?>
					<?= form_input(array(	'name' => 'username',
											'id' => 'username',
											'value' => '')); ?>  
					<div class="add-info"><p>Nom d'utilisateur utilisé pour se connecter</p></div>                            
					<?= form_label('Mot de passe : <span class="error"></span>', 'password'); ?>
					<?= form_password(array('name' => 'password',
											'id' => 'password')); ?>
					<div class="add-info"><p>Mot de passe utilisé pour se connecter</p></div>     
					<?= form_label('Adresse Email : <span class="error"></span>', 'email'); ?>
					<?= form_input(array(	'name' => 'email',
											'id' => 'email')); ?>
					<div class="add-info"><p>Email utilisé pour vous contacter (aucun spams ou publicités)</p></div>
					<div class="contener-radio">				 
					<?= form_label("J'accepte les regles de O.S.A :", 'rules'); ?>
					
					<label for="accept" class="label-accept">
					<?= form_radio(array('name' => 'rules',
											'id' => 'accept',
											'value' => 'accept')); ?>J'accepte</label>
					<label for="refuse" class="label-refuse">
					<?= form_radio(array('name' => 'rules',
											'id' => 'refuse',
											'value' => 'refuse')); ?>Hors de question</label> 
					</div>
					<a href="#" class="next-register1 register-btn">Etape suivante --></a>
				</div>
				<div class="form-register2 form-register">
					<?= form_label('Nom du pays : <span class="error"></span>', 'country_name'); ?>
					<?= form_input(array('name' => 'country_name',
		                             	 'id' => 'country_name')); ?>
		            <div class="add-info"><p>Nom du pays où est situé votre agence</p></div>           	 
		            <?= form_label('Continent :'); ?>
		            <?= form_dropdown(	'country_continent', array(
		                          		'europe'  => 'Europe',
		                          		'amerique_nord'    => 'Amérique du Nord',
		                          		'amerique_sud'   => 'Amérique du Sud',
		                          		'asie' => 'Asie',
		                          		'afrique'   => 'Afrique',
		                          		'oceanie'   => 'Océanie')); ?>
		            <?= form_label('Capitale : <span class="error"></span>', 'country_capital'); ?>
		            <?= form_input(array('name' => 'country_capital',
		                             'id' => 'country_capital')); ?>
		            <div class="add-info"><p>Capitale du pays et ville où est situé votre agence</p></div>
		            <a href="#" class="next-register2 register-btn">Etape suivante --></a>
				</div>
				<div class="form-register3 form-register">
				    <?= form_label('Nom de l\'agence : <span class="error"></span>', 'agency_name'); ?>
					<?= form_input(array('name' => 'agency_name',
					                     'id' => 'agency_name')); ?>
					<div class="add-info"><p>Nom de votre agence spatiale</p></div>
			        <?= form_label('Initiale de l\'agence : <span class="error"></span>', 'agency_initial'); ?>
				    <?= form_input(array('name' => 'agency_initial',
				                         'id' => 'agency_initial')); ?>
				    <div class="add-info"><p>Initiale de votre agence spatiale</p></div>
			        <?= form_label('Nom du directeur : <span class="error"></span>', 'director_first_name'); ?>
				    <?= form_input(array('name' => 'director_first_name',
				                         'id' => 'director_first_name')); ?>
				    <div class="add-info"><p>Nom de votre personnage</p></div>
			        <?= form_label('Prenom du directeur : <span class="error"></span>', 'director_last_name'); ?>
				    <?= form_input(array('name' => 'director_last_name',
				                         'id' => 'director_last_name')); ?>
				    <div class="add-info"><p>Prénom de votre personnage</p></div>
				    <?= form_submit(array('value' => 'S\'inscrire',
               			  	  			  'class' => 'btn primary register-btn')); ?>
				</div>
			<?= form_close(); ?>
			<div class="success-register">
				<div class="message-success-register">
					<p>Bravo !<br />Ton agence est créée avec succès</p>
				</div>
				<div class="link-success-register">
					<a href="#">Redescend sur Terre & Commence à gérer ton agence</a>
				</div>
			</div>
			<div class="corner-bottom-left corner"></div>
			<div class="corner-bottom-right corner"></div>
	</section>
	<section class="home">
		<header><a href="">S'inscrire &<br />monter vers les étoiles</a></header>
		<div class="content">
			<div class="description">
				<div class="description-left">
					<h1><span class="little-h1">Un jeu</span><br /><span class="big-h1">amusant</span></h1>
					<p>
					Online Space Agency est jeu qui vous met dans la peau d’un directeur d’agence spatiale, vous gérez le personnel, les bâtiments, les priorités de recherche et l’équipement. Assemblez ces équipements afin de lancer vos propres missions dans l’espace et ainsi entrer dans la course à l’espace.
					</p>
				</div>
				<div class="description-right">
					<h1><span class="little-h1">Un jeu</span><br /><span class="big-h1">educatif</span></h1>
					<p>
					Online Space Agency est aussi un jeu éducatif où chacune des données du jeu est tirée de la réalité. Vous vous cultivez tout en jouant et en vous amusant. Découvrez les fusées, les missions, les combinaisons spatiales et les astres de notre système solaire exploré ces cinquantes dernières années.
					</p>
				</div>
				<div class="logo">
					<img src="<?=base_url(); ?>img/layout/logo.png" alt="Online Space Agency" />
				</div>
			</div>
			<div class="connection">
					<?php $attributes = array('autocomplete' => 'off'); ?>
					<?= form_open('c_user/connection', $attributes); ?>
						<?= form_fieldset('<span>Informations de connexion</span>'); ?>
							<div class="contener-username <?php if($error): ?>error<?php endif; ?>">
							<?= form_input(array('name' => 'username','id' => 'username')); ?>
							</div>
							<div class="contener-password <?php if($error): ?>error<?php endif; ?>">
							<?= form_password(array('name' => 'password','id' => 'password')); ?>
							</div>
							<?php if($error): ?><p class="error">Mauvais nom d'utilisateur/mot de passe</p><?php endif; ?>
							<div class="contener-connection">
							<?= form_submit(array('value' => 'Se Connecter','class' => 'input-connection')); ?>
							</div>
						<?= form_fieldset_close(); ?>
					<?= form_close(); ?>

			</div>
		</div>
	</section>
	<section class="stat">
		<div class="contener-stat-link">
			<a href="">Etat d'avancement<br />de l'avancee spatiale</a>
		</div>
		<div class="contener-stat">
			<div class="stat1 stat-box">
				<p class="description-stat">Agences créées</p>
				<p class="value-stat"><?= $countAgency ?></p>
			</div><!--
			--><div class="stat2 stat-box">
				<p class="description-stat">Astres à explorer</p>
				<p class="value-stat">9</p>
			</div><!--
			--><div class="stat3 stat-box">
				<p class="description-stat">Missions lancées</p>
				<p class="value-stat"><?= $countMission ?></p>
			</div><!--
			--><div class="stat4 stat-box">
				<p class="description-stat">Plus grosse fortune</p>
				<p class="value-stat"><?= $countMaxArgent->argent ?></p>
			</div>
		</div>
	</section>
	<footer>
		<p class="left"><a href="#" class="toRegister">S'inscrire</a> - <a href="#" class="toConnection">Se connecter</a> - <a href="#" class="toStat">Statistiques du jeu</a></p><!--
		--><p class="right">Copyright © 2011-2012 Online Space Agency</p>
	</footer>
</body>
<script src="<?=base_url(); ?>js/jquery.js"></script>
<script src="<?=base_url(); ?>js/jquery-ui.js"></script>

<?php
if(isset($script)):
    echo ($script);
endif; 
?>
</html>