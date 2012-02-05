<div class="page-header">
	<h1>Connectez vous <small> et explorer l'univers</small></h1>
</div>
	<?= form_fieldset('Informations de connexion'); ?>
	 
		<?= form_open('c_user/connection'); ?>
		
		<div class="clearfix">
			<?= form_label("Nom d\'Utilisateur :", 'username') ?>
			<div class="input">
				<?= form_input(array('name' => 'username',
								 'id' => 'username')); ?>
			</div>
		</div>	
		
		<div class="clearfix">			 
			<?=form_label('Mot de passe :', 'password'); ?>
			<div class="input">
				<?= form_password(array('name' => 'password',
									'id' => 'password')); ?>
			</div>
		</div>
		
			<?= form_submit(array('value' => 'Se Connecter',
							  'class' => 'btn primary connection-btn')); ?>
		<?= form_close(); ?>
		
	<?= form_fieldset_close(); ?>
<?php
if($error): ?>
<p><?= $error ?></p>
<?php endif; ?>
