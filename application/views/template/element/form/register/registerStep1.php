<?php $attributes = array('class' => 'register', 'id' => 'registerStep1'); ?>
<?= form_open_multipart('c_user/registerEnd', $attributes); ?>
	<?= form_fieldset('Informations de connexion'); ?>
	
		<div class="clearfix">
			<?= form_label("Nom d\'Utilisateur :", 'username'); ?>
			<div class="input">
				<?= form_input(array('name' => 'username',
				                               'id' => 'username',
				                               'value' => set_value('username'))); ?> 
				<?= form_error('username', '<span class="help-inline">', '</span>'); ?>                               
			</div>
		</div>                               
		<div class="clearfix">                  
			<?= form_label('Mot de passe :', 'password'); ?>
			<div class="input">
				<?= form_password(array('name' => 'password',
									   'id' => 'password')); ?>
				<?= form_error('password', '<span class="help-inline">', '</span>'); ?>
			</div>
		</div>
		<div class="clearfix">
			<?= form_label('Adresse Email :', 'email'); ?>
			<div class="input">
				<?= form_input(array('name' => 'email',
									 'id' => 'email',
									 'value' => set_value('email'))); ?>
				<?= form_error('email', '<span class="help-inline">', '</span>'); ?>					 
			</div>
		</div>
		<div class="clearfix">
				<?= form_label('J\'accepte les règles de O.S.A :', 'rules'); ?>
				<div class="input">
					<ul class="inputs-list">
						<li>
							<label>
								<?= form_checkbox(array('name' => 'rules',
											'id' => 'accept',
											'value' => 'accept')); ?>
								<span>J'accepte</span>
							</label>
						</li>
					</ul>	
                                        <?= form_error('rules', '<span class="help-inline">', '</span>'); ?>
				</div>
		</div>
		<?= form_hidden('step', '1'); ?>
		<?= form_submit(array('value' => 'Étape Suivante',
							  'class' => 'btn primary register-btn')); ?>
	<?= form_fieldset_close(); ?>
<?= form_close(); ?>