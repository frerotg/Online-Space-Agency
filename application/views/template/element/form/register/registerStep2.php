<?php $attributes = array('class' => 'register', 'id' => 'registerStep2'); ?>
<?= form_open_multipart('c_user/registerEnd', $attributes); ?>
	<?= form_fieldset('Informations concernant votre pays'); ?>
		<div class="clearfix">
    		<?= form_label('Nom du pays :', 'country_name'); ?>
    		<div class="input">
	        	<?= form_input(array('name' => 'country_name',
	                             	 'id' => 'country_name',
	                            	 'value' => set_value('country_name'))); ?>
	            <?= form_error('country_name', '<span class="help-inline">', '</span>'); ?>                	 
        	</div>
        </div>
		<div class="clearfix">
	        <?= form_label('Continent :'); ?>
	        <div class="input">       
		        <?= form_dropdown('country_continent', array(
		                          'europe'  => 'Europe',
		                          'amerique_nord'    => 'Amérique du Nord',
		                          'amerique_sud'   => 'Amérique du Sud',
		                          'asie' => 'Asie',
		                          'afrique'   => 'Afrique',
		                          'oceanie'   => 'Océanie')); ?>
			</div>
		</div>
		<div class="clearfix">        
	        <?= form_label('Capitale :', 'country_capital'); ?>
	        <div class="input">
		        <?= form_input(array('name' => 'country_capital',
		                             'id' => 'country_capital',
		                            'value' => set_value('country_capital'))); ?>
		        <?= form_error('country_capital', '<span class="help-inline">', '</span>'); ?>     
			</div>
		</div>
			<div class="clearfix">        
	        <?= form_label('Gouvernement :'); ?>
	        <div class="input">        
		        <?= form_dropdown('country_government', array(
		                          'president'  => 'Présidentiel',
		                          'monarchie'    => 'Monarchique',
		                          'dictature'   => 'Dictature')); ?>
			</div>
		</div>                          
	    <?= form_hidden('step', '2') .
	        form_hidden('username', $username) .
	        form_hidden('password', $password) .
	        form_hidden('email', $email); ?>
		<?= form_submit(array('value' => 'Étape Suivante',
	               			  'class' => 'btn primary register-btn')); ?>
	<?= form_fieldset_close(); ?>
<?= form_close(); ?>