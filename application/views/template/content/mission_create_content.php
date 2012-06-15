<div class="create_mission">
	<?php if(empty($coques) OR empty($lances) OR empty($modules) OR empty($combinaisons) OR empty($pilotes) OR (count($spationautes) < 2)): ?>
	
	<?php else: ?>
	<div class="title-form">
		<h1><span class="little-h1">Crée ta propre mission !</span></h1>
	</div>
	<?php $attributes = array('class' => 'createMission form-horizontal'); ?>
    <?= form_open_multipart('c_mission/create', $attributes); ?>
    	<h2 class="error"></h2>
    	<h2>1.Choissisez quel astre explorer ! Et validez ci-dessous</h2>
     	<div class="container-spaceobject container spaceobject-type">
     	<div class="validation-space-object">
	     	<p>Choix de l'astre : <span class="choice-spaceobject"></span> <a href="#" title="Valider le choix de l'astre" class="validation">Valider</a></p>
     	</div><!--
	    <?php foreach ($objects as $object): ?>
	    	--><div class="spaceobject solo">
		        <?php 
		            $data = array(
		            'name'        => 'object',
		            'id'          => $object->name_space_object,
		            'value'       => $object->id_space_object,
		            'checked'     => FALSE);
		        ?>
		        <label class="radio" id="<?=$object->distance_space_object ?>">
		        <?= form_radio($data); ?>
		        <img class="mini-img-spaceobject" src="<?=base_url(); ?>/data/image-astre/<?=$object->id_space_object ?>.jpg" width="90" height="90" />
		        <span class="space-object-name"><?= $object->name_space_object ?></span>
		        </label>
		        <div class="container-detail-spaceobject">
			        <div class="detail detail-spaceobject">
						<div class="image-destination">
							<img class="img-1" src="<?=base_url(); ?>/data/image-astre/<?=$object->id_space_object ?>.jpg" />
							<img class="img-2" src="<?=base_url(); ?>/data/image-astre/<?=$object->id_space_object ?>.jpg" />
							<img class="img-3" src="<?=base_url(); ?>/data/image-astre/<?=$object->id_space_object ?>.jpg" />
						</div>
						<div class="description-destination">
							<ul>
							<li class="name">Nom de l'astre : <span><?=$object->name_space_object ?></span></li>
							<li class="type">Type d'astre : <span><?=$object->name_type_space ?></span></li>
							<li class="distance">Distance de la Terre : <span><?=$object->distance_space_object ?> millions de km</span></li>
							<li class="status">Status actuel de l'astre : <span><?=$object->name_space_object_status ?></span></li>
							</ul>
						</div>
						<?php 
							$pourcent = (($object->xp_space_object_status)/($next_status[$object->id_space_object]->step_space_object_status)*100);
							$width = $pourcent*6.3;						
						?>
						<div class="content-bar">
							<p><?=$object->xp_space_object_status ?> / <?=$next_status[$object->id_space_object]->step_space_object_status ?> (<?= $pourcent ?>%)</p>
							<div class="bar">
								<div class="bar-background"></div>
								<div class="bar-frontground" style="width: <?= $width ?>px;"></div>
							</div>
						</div>
			        </div>
		        </div>
	    	</div><!--
	   <?php endforeach; ?>
     	--></div>
	   
	   <h2>2.Construisez votre propre vaisseau en assemblant les quatre types d'équipement et validez chacun d'eux</h2>
	   <div class="container-coque container equipment-type">
	   <div class="validation-equipment validation-coque">
	     	<p>Choix de la coque : <span class="choice-spaceobject"></span> <a href="#" title="Valider le choix de l'astre" class="validation">Valider</a></p>
     	</div><!--
       		<?php foreach ($coques as $coque): ?>
       			--><div class="coque solo">
				    <?php
				        $data = array(
				        'name'        => 'coque',
				        'id'          => $coque->name_equipment,
				        'value'       => $coque->id_equipment,
				        'checked'     => FALSE);
				    ?>
				    <label class="radio">
				    <?= form_radio($data); ?>
				    <img class="mini-img-equipment" src="<?=base_url(); ?>/data/image-equipment/<?=$coque->id_equipment ?>-mini.jpg" width="70" height="100" />
				    <span class="equipment-name"><?= $coque->name_equipment ?></span>
				    </label>
				    <div class="container-detail-coque container-detail-equipment">
				    <div class="detail-equipment">
						<div class="photo-equipment">
							<img class="img-1" src="<?=base_url(); ?>/data/image-equipment/<?=$coque->id_equipment ?>-mini.jpg" width="140" height="200" />
							<img class="img-2" src="<?=base_url(); ?>/data/image-equipment/<?=$coque->id_equipment ?>-mini.jpg" width="140" height="200" />
							<img class="img-3" src="<?=base_url(); ?>/data/image-equipment/<?=$coque->id_equipment ?>-mini.jpg" width="140" height="200" />
						</div>
						<div class="equipment">
							<p class="name-equipment"><?= $coque->name_equipment ?></p>
							<div class="description-equipment">
								<p><span id="<?= $coque->skill1_equipment ?>">Résistance : </span> <?= $coque->skill1_equipment ?></p>
							</div>
						</div>
				    </div>
				    </div>
       			</div><!--
			<?php endforeach; ?>
	   --></div>
        
        
        
        <div class="container-lance container equipment-type">
        <div class="validation-equipment validation-lance">
	     	<p>Choix du lanceur : <span class="choice-spaceobject"></span> <a href="#" title="Valider le choix de l'astre" class="validation">Valider</a></p>
     	</div><!--
	       <?php foreach ($lances as $lance): ?>
		       	--><div class="lance solo">
		       		<?php
		                $data = array(
		                'name'        => 'lance',
		                'id'          => $lance->name_equipment,
		                'value'       => $lance->id_equipment,
		                'checked'     => FALSE);
		            ?>  
		            <label class="radio"> 
		            <?= form_radio($data); ?>
		            <img class="mini-img-equipment" src="<?=base_url(); ?>/data/image-equipment/<?=$lance->id_equipment ?>-mini.jpg" width="70" height="100" />
		            <span class="equipment-name"><?= $lance->name_equipment ?></span>
		            </label>
		            <div class="container-detail-lance container-detail-equipment">
		            <div class="detail-equipment">
						<div class="photo-equipment">
							<img class="img-1" src="<?=base_url(); ?>/data/image-equipment/<?=$lance->id_equipment ?>-mini.jpg" width="140" height="200" />
							<img class="img-2" src="<?=base_url(); ?>/data/image-equipment/<?=$lance->id_equipment ?>-mini.jpg" width="140" height="200" />
							<img class="img-3" src="<?=base_url(); ?>/data/image-equipment/<?=$lance->id_equipment ?>-mini.jpg" width="140" height="200" />
						</div>
						<div class="equipment">
							<p class="name-equipment"><?= $lance->name_equipment ?></p>
							<div class="description-equipment">
								<p class="1"><span id="<?= $lance->skill1_equipment ?>">Vitesse : </span> <?= $lance->skill1_equipment ?></p>
								<p class="2"><span id="<?= $lance->skill2_equipment ?>">Consommation : </span> <?= $lance->skill2_equipment ?></p>
							</div>
						</div>
					</div>
		            </div>
	       		</div><!--
	       <?php endforeach; ?>
        --></div>
        
       
       <div class="container-module container equipment-type">
       <div class="validation-equipment validation-module">
	     	<p>Choix du module de commande : <span class="choice-spaceobject"></span> <a href="#" title="Valider le choix de l'astre" class="validation">Valider</a></p>
     	</div><!--
       		<?php foreach ($modules as $module): ?>
       			--><div class="module solo">
		            <?php
		                $data = array(
		                'name'        => 'module',
		                'id'          => $module->name_equipment,
		                'value'       => $module->id_equipment,
		                'checked'     => FALSE);
		            ?> 
		            <label class="radio"> 
		            <?= form_radio($data); ?>
		            <img class="mini-img-equipment" src="<?=base_url(); ?>/data/image-equipment/<?=$module->id_equipment ?>-mini.jpg" width="70" height="100" />
		            <span class="equipment-name"><?= $module->name_equipment ?></span>
		            </label>
		            <div class="container-detail-module container-detail-equipment">
		            <div class="detail-equipment">
						<div class="photo-equipment">
							<img class="img-1" src="<?=base_url(); ?>/data/image-equipment/<?=$module->id_equipment ?>-mini.jpg" width="140" height="200" />
							<img class="img-2" src="<?=base_url(); ?>/data/image-equipment/<?=$module->id_equipment ?>-mini.jpg" width="140" height="200" />
							<img class="img-3" src="<?=base_url(); ?>/data/image-equipment/<?=$module->id_equipment ?>-mini.jpg" width="140" height="200" />
						</div>
						<div class="equipment">
							<p class="name-equipment"><?= $module->name_equipment ?></p>
							<div class="description-equipment">
								<p class="1"><span id="<?= $module->skill1_equipment ?>">Autonomie : </span> <?= $module->skill1_equipment ?></p>
								<p class="2"><span id="<?= $module->skill2_equipment ?>">Communication : </span> <?= $module->skill2_equipment ?></p>
							</div>
						</div>
					</div>
		            </div>
       			</div><!--
	       <?php endforeach; ?>
       --></div>
       	
       	
       	<div class="container-combinaison container equipment-type">
       	<div class="validation-equipment validation-combinaison">
	     	<p>Choix de la combinaison : <span class="choice-spaceobject"></span> <a href="#" title="Valider le choix de l'astre" class="validation">Valider</a></p>
     	</div><!--
       		<?php foreach ($combinaisons as $combinaison): ?>
       			--><div class="combinaison solo">
	                <?php
	                    $data = array(
	                    'name'        => 'combinaison',
	                    'id'          => $combinaison->name_equipment,
	                    'value'       => $combinaison->id_equipment,
	                    'checked'     => FALSE);
	                ?>
	                <label class="radio"> 
	                <?= form_radio($data); ?>
	                <img class="mini-img-equipment" src="<?=base_url(); ?>/data/image-equipment/<?=$combinaison->id_equipment ?>-mini.jpg" width="70" height="100" />
	                <span class="equipment-name"><?= $combinaison->name_equipment ?></span>
	                </label>
	                <div class="container-detail-combinaison container-detail-equipment">
	                <div class="detail-equipment">
						<div class="photo-equipment">
							<img class="img-1" src="<?=base_url(); ?>/data/image-equipment/<?=$combinaison->id_equipment ?>-mini.jpg" width="140" height="200" />
							<img class="img-2" src="<?=base_url(); ?>/data/image-equipment/<?=$combinaison->id_equipment ?>-mini.jpg" width="140" height="200" />
							<img class="img-3" src="<?=base_url(); ?>/data/image-equipment/<?=$combinaison->id_equipment ?>-mini.jpg" width="140" height="200" />
						</div>
						<div class="equipment">
							<p class="name-equipment"><?= $combinaison->name_equipment ?></p>
							<div class="description-equipment">
								<p><span id="<?= $combinaison->skill1_equipment ?>">Facilité: </span> <?= $combinaison->skill1_equipment ?></p>
							</div>
						</div>
					</div>
	                </div>
       			</div><!--
           <?php endforeach; ?>
       	--></div>
       	
       	<h2>3.Composez votre équipage en assemblant un pilote et deux spationautes issus de votre personnel</h2>
       	<div class="container-pilote container personnel-type">
       		<h3>Les pilotes :</h3>
	       	<?php foreach ($pilotes as $pilote): ?>
	       		<div class="pilote solo">
		            <?php
		                $data = array(
		                'name'        => 'pilote',
		                'id'          => $pilote->name_personnel,
		                'value'       => $pilote->id_personnel,
		                'checked'     => FALSE);
		            ?>
		            <label class="radio"> 
		            <?= form_radio($data); ?><span><?= $pilote->name_personnel ?></span>
		            </label>
		            <div class="description-personnel">
			            <p class="name"><?= $pilote->name_personnel ?></p>
			            <p class="label-skill">Sang-froid</p><!-- --><p class="label-skill">Rapidite</p>
			            <p class="skill skill1" id="<?= $pilote->skill1_personnel ?>"><?= $pilote->skill1_personnel ?></p><!-- --><p class="skill skill2" id="<?= $pilote->skill2_personnel ?>"><?= $pilote->skill2_personnel ?></p>
		            </div>
	       		</div>
	       <?php endforeach; ?>
       	</div>
	    
	    <div class="container-spationautes container personnel-type">
	    	<div class="container-spationaute container-spationaute1">
	    	<h3>Les spationautes :</h3>
		    <?php foreach ($spationautes as $spationaute): ?>
		    	<div class="spationaute solo">
		            <?php
		                $data = array(
		                'name'        => 'spationaute',
		                'id'          => $spationaute->id_personnel,
		                'value'       => $spationaute->id_personnel,
		                'checked'     => FALSE);
		            ?>   
		            <label class="radio">
		            <?= form_radio($data); ?><span><?= $spationaute->name_personnel ?></span>
		            </label>
		            <div class="description-personnel description-personnel1">
			            <p class="name"><?= $spationaute->name_personnel ?></p>
			            <p class="label-skill">Maitrise</p><!-- --><p class="label-skill">Reflexion</p>
			            <p class="skill skill1" id="<?= $spationaute->skill1_personnel ?>"><?= $spationaute->skill1_personnel ?></p><!-- --><p class="skill skill2" id="<?= $spationaute->skill2_personnel ?>"><?= $spationaute->skill2_personnel ?></p>
		            </div>
		    	</div>
	       <?php endforeach; ?>
	    	</div><!--
	    	--><div class="container-result-personnel">
	    			<h4 class="actual-pilote">Votre pilote :</h4>
	    			<h4 class="actual-spationaute">Vos spationautes</h4>
	    		</div><!--
	       --><div class="container-spationaute container-spationaute2">
	       	<h3>Les spationautes :</h3>
	       <?php foreach ($spationautes as $spationaute): ?>
	       		<div class="spationaute solo">
		            <?php
		                $data = array(
		                'name'        => 'spationaute',
		                'id'          => $spationaute->id_personnel,
		                'value'       => $spationaute->id_personnel,
		                'checked'     => FALSE);
		            ?>   
		            <label class="radio">
		            <?= form_radio($data); ?><span><?= $spationaute->name_personnel ?></span>
		            </label>
		            <div class="description-personnel description-personnel2">
			            <p class="name"><?= $spationaute->name_personnel ?></p>
			            <p class="label-skill">Maitrise</p><!-- --><p class="label-skill">Reflexion</p>
			            <p class="skill skill1" id="<?= $spationaute->skill1_personnel ?>"><?= $spationaute->skill1_personnel ?></p><!-- --><p class="skill skill2" id="<?= $spationaute->skill2_personnel ?>"><?= $spationaute->skill2_personnel ?></p>
		            </div>
	       		</div>
	       <?php endforeach; ?>
	       </div>
	    </div>
	    
	    <h2>4.Choisissez le nombre de phase de test avant le lancement de votre mission</h2>
	    <div class="container-test container">
	    <?= form_label('Nombre de phase de test :', 'phase_test'); ?>
	    <?= form_input(array('name' => 'phase_test',
                             'id' => 'phase_test',
                             'value' => set_value('phase_test'))); ?>
	    </div>
        
        <h2>5.Impacts de vos choix sur le coût et le temps.</h2>                     
        <div class="container-result">
	        <div class="result">
	        	<p class="vitesse">Durée du trajet : <span class="result-vitesse"></span></p>
	        	<p class="carburant">Carburant consommé : <span class="result-carburant"></span></p>
	        	<p class="echec">Réduction du taux d'échec : <span class="result-echec"></span></p>
	        	<p class="pointaction">Nombre de point d'action : <span class="result-pointaction"></span></p>
	        	<p class="coutaction">Réduction du coût des points d'action : <span class="result-coutaction"></span></p>
	        	<p class="test">Temps de test : <span class="result-test"></span></p>
	        </div>
        </div>
        <a href="#" title="Calcul des impacts" id="calcul-total">Calcul</a>
        <div class="valid">
	        <?= form_submit(array('value' => 'Valider la mission', 'class' => 'btn primary register-btn')); ?>
        </div>
    <?= form_close(); ?>
    <?php endif; ?>
</div>