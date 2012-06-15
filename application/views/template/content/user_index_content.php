<div class="user-updateinfo">	
		<div class="corner-top-left corner"></div>
		<div class="corner-top-right corner"></div>
		<div class="title-register">
			<h1><span class="little-h1">Modifie tes infos</span></h1>
		</div>	
		<?php $attributes = array('class' => 'updateinfo'); ?>
		<?= form_open_multipart('c_user/updateInfo', $attributes); ?>                 
				<?= form_label('Mot de passe actuel : <span class="error"></span>', 'password_old'); ?>
				<?= form_password(array('name' => 'password_old',
										'id' => 'password_old')); ?>
				<?= form_label('Nouveau mot de passe : <span class="error"></span>', 'password_new'); ?>
				<?= form_password(array('name' => 'password_new',
										'id' => 'password_new')); ?>
				<?= form_label('Répétez nouveau mot de passe : <span class="error"></span>', 'password_new2'); ?>
				<?= form_password(array('name' => 'password_new2',
										'id' => 'password_new2')); ?>
				<?= form_label('Adresse Email : <span class="error"></span>', 'email'); ?>
				<?= form_input(array('name' => 'email',
									 'id' => 'email',
									 'value' => $email->email)); ?>
				<?= form_submit(array('value' => 'Valider',
								  	  'class' => 'btn-change')); ?>
		<?= form_close(); ?>
		<div class="success-updateinfo">
			<div class="message-success-register">
				<p>Bravo !<br />Ton profil à été modifier avec succès</p>
			</div>
		</div>
		<div class="corner-bottom-left corner"></div>
		<div class="corner-bottom-right corner"></div>
</div>