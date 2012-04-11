
	    		<?php $attributes = array('class' => 'createMission form-horizontal'); ?>
                            <?= form_open_multipart('c_mission/create', $attributes); ?>
                                <?= form_fieldset('Etape 1'); ?>
                                    <div class="controls">
                                            <?php
                                            foreach ($zones as $zone){
                                                    $data = array(
                                                    'name'        => 'zone',
                                                    'id'          => $zone->name_zone_space,
                                                    'value'       => $zone->id_zone_space,
                                                    'checked'     => FALSE,
                                                    );?>
                                                <label class="radio">         
                                                <?= form_radio($data); ?><?= $zone->name_zone_space ?>
                                                </label>
                                           <?= form_error('zone', '<span class="help-inline">', '</span>'); ?>
                                	
                                <?php } ?>
                                </div>
                                <?= form_fieldset_close(); ?>
                                <?= form_fieldset('Etape 2'); ?>
                                    <div class="controls">  
                                            <?php
                                            foreach ($objects as $object){
                                                    $data = array(
                                                    'name'        => 'object',
                                                    'id'          => $object->name_space_object,
                                                    'value'       => $object->id_space_object,
                                                    'checked'     => FALSE,
                                                    );?>
                                                <label class="radio">
                                                <?= form_radio($data); ?><?= $object->name_space_object ?>
                                                </label>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('object', '<span class="help-inline">', '</span>'); ?>
                                    </div>
                                <?= form_fieldset_close(); ?>
                                <?= form_fieldset('Etape 3'); ?>
                                <?php if(empty($coques)){
                                	echo('Vous n\'avez aucun lanceur actuellement');
                                }
                                else{ ?>
                                    <div class="controls">   
                                            <?php
                                            foreach ($coques as $coque){
                                                    $data = array(
                                                    'name'        => 'coque',
                                                    'id'          => $coque->name_equipment,
                                                    'value'       => $coque->id_equipment,
                                                    'checked'     => FALSE,
                                                    );?>
                                                <label class="radio">
                                                <?= form_radio($data); ?><?= $coque->name_equipment ?>
                                                </label>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('coque', '<span class="help-inline">', '</span>'); ?>
                                    </div>
                                    <?php } ?>
                                    <?php if(empty($lances)){
                                	echo('Vous n\'avez aucun lanceur actuellement');
                                }
                                else{ ?>
                                <div class="controls">
                                            <?php
                                            foreach ($lances as $lance){
                                                    $data = array(
                                                    'name'        => 'lance',
                                                    'id'          => $lance->name_equipment,
                                                    'value'       => $lance->id_equipment,
                                                    'checked'     => FALSE,
                                                    );?>  
                                                <label class="radio"> 
                                                <?= form_radio($data); ?><?= $lance->name_equipment ?>
                                                </label>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('lance', '<span class="help-inline">', '</span>'); ?>
                                    </div>
                                    <?php } ?>
                                    <?php if(empty($modules)){
                                	echo('Vous n\'avez aucun lanceur actuellement');
                                }
                                else{ ?>
                                    <div class="controls">   
                                            <?php
                                            foreach ($modules as $module){
                                                    $data = array(
                                                    'name'        => 'module',
                                                    'id'          => $module->name_equipment,
                                                    'value'       => $module->id_equipment,
                                                    'checked'     => FALSE,
                                                    );?> 
                                                <label class="radio"> 
                                                <?= form_radio($data); ?><?= $module->name_equipment ?>
                                                </label>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('module', '<span class="help-inline">', '</span>'); ?>
                                    </div>
                                    <?php } ?>
                                    <?php if(empty($combinaisons)){
                                	echo('Vous n\'avez aucun lanceur actuellement');
                                }
                                else{ ?>
                                    <div class="controls">   
                                            <?php
                                            foreach ($combinaisons as $combinaison){
                                                    $data = array(
                                                    'name'        => 'combinaison',
                                                    'id'          => $combinaison->name,
                                                    'value'       => $combinaison->id_equipment,
                                                    'checked'     => FALSE,
                                                    );?>
                                                <label class="radio"> 
                                                <?= form_radio($data); ?><?= $combinaison->name ?>
                                                </label>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('combinaison', '<span class="help-inline">', '</span>'); ?>
                                    </div>
                                    <?php } ?>
                                <?= form_fieldset_close(); ?>                    
                                <?= form_fieldset('Etape 4'); ?>
                                    <?php if(empty($pilotes)){
                                	echo('Vous n\'avez aucun lanceur actuellement');
                                }
                                else{ ?>
                                    <div class="controls">   
                                            <?php
                                            foreach ($pilotes as $pilote){
                                                    $data = array(
                                                    'name'        => 'pilote',
                                                    'id'          => $pilote->name_personnel,
                                                    'value'       => $pilote->id_personnel,
                                                    'checked'     => FALSE,
                                                    );?>
                                                <label class="radio"> 
                                                <?= form_radio($data); ?><?= $pilote->name_personnel ?>
                                                </label>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('pilote', '<span class="help-inline">', '</span>'); ?>
                                    </div>
                                    <?php } ?>
                                    <?php if(empty($spationautes)){
                                	echo('Vous n\'avez aucun lanceur actuellement');
                                }
                                else{ ?>
                                    <div class="controls">   
                                            <?php
                                            foreach ($spationautes as $spationaute){
                                                    $data = array(
                                                    'name'        => 'spationaute',
                                                    'id'          => $spationaute->name_personnel,
                                                    'value'       => $spationaute->id_personnel,
                                                    'checked'     => FALSE,
                                                    );?>   
                                                <label class="radio">
                                                <?= form_radio($data); ?><?= $spationaute->name_personnel ?>
                                                </label>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('spationaute', '<span class="help-inline">', '</span>'); ?>
                                    </div>
                                    <?php } ?>
                                    <?php if(empty($spationautes)){
                                	echo('Vous n\'avez aucun lanceur actuellement');
                                }
                                else{ ?>
                                   <div class="controls">   
                                            <?php
                                            foreach ($spationautes as $spationaute2){
                                                    $data = array(
                                                    'name'        => 'spationaute2',
                                                    'id'          => $spationaute2->name_personnel,
                                                    'value'       => $spationaute2->id_personnel,
                                                    'checked'     => FALSE,
                                                    );?>
                                                <label class="radio"> 
                                                <?= form_radio($data); ?><?= $spationaute2->name_personnel ?>
                                                </label>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('spationaute2', '<span class="help-inline">', '</span>'); ?>
                                    </div>
                                    <?php } ?>
                                <?= form_fieldset_close(); ?>
                                <?= form_fieldset('Etape 5'); ?>
                                    <div class="clearfix">
                                        <?= form_label('Date de départ :', 'date_start'); ?>
                                        <div class="input">
                                                <?= form_input(array('name' => 'date_start',
                                                                     'id' => 'date_start',
                                                                     'value' => set_value('date_start'))); ?>
                                                <?= form_error('date_start', '<span class="help-inline">', '</span>'); ?>
                                        </div>
                                   </div>
                                   <div class="clearfix">
                                        <?= form_label('Nombre de phase de test :', 'phase_test'); ?>
                                        <div class="input">
                                                <?= form_input(array('name' => 'phase_test',
                                                                     'id' => 'phase_test',
                                                                     'value' => set_value('phase_test'))); ?>
                                                <?= form_error('phase_test', '<span class="help-inline">', '</span>'); ?>
                                        </div>
                                   </div>
                                <?= form_fieldset_close(); ?>
                                <?php if(empty($coques) OR empty($lances) OR empty($modules) OR empty($combinaisons) OR empty($pilotes) OR empty($spationautes)){
                                	echo('Vous ne pouvez pas lancer la mission sans avoir l\'effectif/matériel nécessaire');
                                }
                                else{?>
                                <?= form_submit(array('value' => 'Valider la mission', 'class' => 'btn primary register-btn')); ?>
                                <?php } ?>
                            <?= form_close(); ?>