
	    		<?php $attributes = array('class' => 'createMission'); ?>
                            <?= form_open_multipart('c_mission/create', $attributes); ?>
                                <?= form_fieldset('Etape 1'); ?> 
                                            <?php
                                            foreach ($zones as $zone){
                                                    $data = array(
                                                    'name'        => 'zone',
                                                    'id'          => $zone->name_zone_space,
                                                    'value'       => $zone->id_zone_space,
                                                    'checked'     => FALSE,
                                                    );?>         
                                                <?= form_label($zone->name_zone_space, $zone->name_zone_space); ?> 
                                                <?= form_radio($data); ?>
                                           <?php
                                           }
                                           ?>
                                           <?= form_error('zone', '<span class="help-inline">', '</span>'); ?>
                                <?= form_fieldset_close(); ?>
                                <?= form_fieldset('Etape 2'); ?>
                                    <div class="clearfix">
                                        <div class="input">   
                                            <?php
                                            foreach ($objects as $object){
                                                    $data = array(
                                                    'name'        => 'object',
                                                    'id'          => $object->name_space_object,
                                                    'value'       => $object->id_space_object,
                                                    'checked'     => FALSE,
                                                    );?>         
                                                <?= form_label($object->name_space_object, $object->name_space_object); ?> 
                                                <?= form_radio($data); ?>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('object', '<span class="help-inline">', '</span>'); ?>
                                        </div>
                                    </div>
                                <?= form_fieldset_close(); ?>
                                <?= form_fieldset('Etape 3'); ?>
                                    <div class="clearfix">
                                        <div class="input">   
                                            <?php
                                            foreach ($coques as $coque){
                                                    $data = array(
                                                    'name'        => 'coque',
                                                    'id'          => $coque->name_equipment,
                                                    'value'       => $coque->id_equipment,
                                                    'checked'     => FALSE,
                                                    );?>         
                                                <?= form_label($coque->name_equipment, $coque->name_equipment); ?> 
                                                <?= form_radio($data); ?>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('coque', '<span class="help-inline">', '</span>'); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">   
                                            <?php
                                            foreach ($lances as $lance){
                                                    $data = array(
                                                    'name'        => 'lance',
                                                    'id'          => $lance->name_equipment,
                                                    'value'       => $lance->id_equipment,
                                                    'checked'     => FALSE,
                                                    );?>         
                                                <?= form_label($lance->name_equipment, $lance->name_equipment); ?> 
                                                <?= form_radio($data); ?>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('lance', '<span class="help-inline">', '</span>'); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">   
                                            <?php
                                            foreach ($modules as $module){
                                                    $data = array(
                                                    'name'        => 'module',
                                                    'id'          => $module->name_equipment,
                                                    'value'       => $module->id_equipment,
                                                    'checked'     => FALSE,
                                                    );?>         
                                                <?= form_label($module->name_equipment, $module->name_equipment); ?> 
                                                <?= form_radio($data); ?>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('module', '<span class="help-inline">', '</span>'); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">   
                                            <?php
                                            foreach ($combinaisons as $combinaison){
                                                    $data = array(
                                                    'name'        => 'combinaison',
                                                    'id'          => $combinaison->name,
                                                    'value'       => $combinaison->id_equipment,
                                                    'checked'     => FALSE,
                                                    );?>         
                                                <?= form_label($combinaison->name, $combinaison->name); ?> 
                                                <?= form_radio($data); ?>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('combinaison', '<span class="help-inline">', '</span>'); ?>
                                        </div>
                                    </div>
                                <?= form_fieldset_close(); ?>                    
                                <?= form_fieldset('Etape 4'); ?>
                                    <div class="clearfix">
                                        <div class="input">   
                                            <?php
                                            foreach ($pilotes as $pilote){
                                                    $data = array(
                                                    'name'        => 'pilote',
                                                    'id'          => $pilote->name_personnel,
                                                    'value'       => $pilote->id_personnel,
                                                    'checked'     => FALSE,
                                                    );?>         
                                                <?= form_label($pilote->name_personnel, $pilote->name_personnel); ?> 
                                                <?= form_radio($data); ?>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('pilote', '<span class="help-inline">', '</span>'); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">   
                                            <?php
                                            foreach ($spationautes as $spationaute){
                                                    $data = array(
                                                    'name'        => 'spationaute',
                                                    'id'          => $spationaute->name_personnel,
                                                    'value'       => $spationaute->id_personnel,
                                                    'checked'     => FALSE,
                                                    );?>         
                                                <?= form_label($spationaute->name_personnel, $spationaute->name_personnel); ?> 
                                                <?= form_radio($data); ?>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('spationaute', '<span class="help-inline">', '</span>'); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="input">   
                                            <?php
                                            foreach ($spationautes as $spationaute2){
                                                    $data = array(
                                                    'name'        => 'spationaute2',
                                                    'id'          => $spationaute2->name_personnel,
                                                    'value'       => $spationaute2->id_personnel,
                                                    'checked'     => FALSE,
                                                    );?>         
                                                <?= form_label($spationaute2->name_personnel, $spationaute2->name_personnel); ?> 
                                                <?= form_radio($data); ?>
                                           <?php
                                           }
                                           ?>
                                            <?= form_error('spationaute2', '<span class="help-inline">', '</span>'); ?>
                                        </div>
                                    </div>
                                <?= form_fieldset_close(); ?>
                                <?= form_fieldset('Etape2'); ?>
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
                                <?= form_submit(array('value' => 'S\'inscrire', 'class' => 'btn primary register-btn')); ?>
                            <?= form_close(); ?>

