<?php $attributes = array('class' => 'register', 'id' => 'registerStep1'); ?>
<?= form_open_multipart('c_user/registerEnd', $attributes); ?>
	<?= form_fieldset('Informations de connexion'); ?>
		<?= form_label("Nom d\'Utilisateur :", 'username'); ?>
		<?= form_input(array(	'name' => 'username',
								'id' => 'username',
								'value' => set_value('username'))); ?>                              
		<?= form_label('Mot de passe :', 'password'); ?>
		<?= form_password(array('name' => 'password',
								'id' => 'password')); ?>
		<?= form_label('Adresse Email :', 'email'); ?>
		<?= form_input(array(	'name' => 'email',
								'id' => 'email',
								'value' => set_value('email'))); ?>					 
		<?= form_label('J\'accepte les règles de O.S.A :', 'rules'); ?>

		<?= form_checkbox(array('name' => 'rules',
								'id' => 'accept',
								'value' => 'accept')); ?>
		<?= form_hidden('step', '1'); ?>
		<?= form_submit(array('value' => 'Étape Suivante',
							  'class' => 'btn primary register-btn')); ?>
	<?= form_fieldset_close(); ?>
<?= form_close(); ?>