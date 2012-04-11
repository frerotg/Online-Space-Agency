<?php $attributes = array('class' => 'updateinfo'); ?>
<?= form_open_multipart('c_user/updateInfo', $attributes); ?>
	<?= form_fieldset('Informations du Compte'); ?>                               
		<div class="clearfix">                  
			<?= form_label('Mot de passe actuel :', 'password_old'); ?>
			<div class="input">
				<?= form_password(array('name' => 'password_old',
									   'id' => 'password_old')); ?>
				<?= form_error('password_old', '<span class="help-inline">', '</span>'); ?>
			</div>
		</div>
				<div class="clearfix">                  
			<?= form_label('Nouveau mot de passe :', 'password_new'); ?>
			<div class="input">
				<?= form_password(array('name' => 'password_new',
									   'id' => 'password_new')); ?>
				<?= form_error('password_new', '<span class="help-inline">', '</span>'); ?>
			</div>
		</div>
				<div class="clearfix">                  
			<?= form_label('Répétez nouveau mot de passe :', 'password_new2'); ?>
			<div class="input">
				<?= form_password(array('name' => 'password_new2',
									   'id' => 'password_new2')); ?>
				<?= form_error('password_new2', '<span class="help-inline">', '</span>'); ?>
			</div>
		</div>
		<div class="clearfix">
			<?= form_label('Adresse Email :', 'email'); ?>
			<div class="input">
				<?= form_input(array('name' => 'email',
									 'id' => 'email',
									 'value' => $email->email)); ?>
				<?= form_error('email', '<span class="help-inline">', '</span>'); ?>					 
			</div>
		</div>
		
		<?= form_submit(array('value' => 'Valider',
							  'class' => 'btn primary register-btn')); ?>
	<?= form_fieldset_close(); ?>
<?= form_close(); ?>