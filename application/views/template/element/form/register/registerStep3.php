<?php $attributes = array('class' => 'register', 'id' => 'registerStep3'); ?>
<?= form_open_multipart('c_user/registerEnd', $attributes); ?>
	<?= form_fieldset('Informations sur l\'agence spatiale'); ?>
		<div class="clearfix">
		    <?= form_label('Nom de l\'agence :', 'agency_name'); ?>
		    <div class="input">
			    <?= form_input(array('name' => 'agency_name',
			                         'id' => 'agency_name',
			                         'value' => set_value('agency_name'))); ?>
			    <?= form_error('agency_name', '<span class="help-inline">', '</span>'); ?>                     
		    </div>
	    </div>
        <div class="clearfix">
	        <?= form_label('Initiale de l\'agence :', 'agency_initial'); ?>
	        <div class="input">
		        <?= form_input(array('name' => 'agency_initial',
		                             'id' => 'agency_initial',
		                             'value' => set_value('agency_initial'))); ?>
		        <?= form_error('agency_initial', '<span class="help-inline">', '</span>'); ?>                     
            </div>
        </div>
        <div class="clearfix">
	        <?= form_label('Nom du directeur :', 'director_first_name'); ?>
	        <div class="input">
		        <?= form_input(array('name' => 'director_first_name',
		                             'id' => 'director_first_name',
		                             'value' => set_value('director_first_name'))); ?>
		        <?= form_error('director_first_name', '<span class="help-inline">', '</span>'); ?>                     
            </div>
        </div>
        <div class="clearfix">
	        <?= form_label('Prénom du directeur :', 'director_last_name'); ?>
	        <div class="input">
		        <?= form_input(array('name' => 'director_last_name',
		                             'id' => 'director_last_name',
		                             'value' => set_value('director_last_name'))); ?>
		        <?= form_error('director_last_name', '<span class="help-inline">', '</span>'); ?>
		    </div>
		</div>
		<div class="clearfix">
	        <?= form_label('Conviction :'); ?>
	        <div class="input">        
		        <?= form_dropdown('director_conviction', array('richesse'  => 'Richesse',
		                          							   'relationnel'    => 'Relationnel',
		                          							   'developement'   => 'Developpement')); ?>
	        </div>
	    </div>
	    <?= form_hidden('step', 'end') .
	        form_hidden('username', $username) .
	        form_hidden('password', $password) .
	        form_hidden('email', $email) .
	        form_hidden('country_name', $country_name) .
	        form_hidden('country_continent', $country_continent) .
	        form_hidden('country_capital', $country_capital) .
	        form_hidden('country_government', $country_government); ?>
        
        <?= form_submit(array('value' => 'S\'inscrire',
               			  	  'class' => 'btn primary register-btn')); ?>
	<?= form_fieldset_close(); ?>
<?= form_close(); ?>