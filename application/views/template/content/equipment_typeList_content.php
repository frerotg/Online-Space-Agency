<?= serialize(array(10 => 11)) ?>
<div class="equipment_list">
	<?php if($fabrique->level_building == 0): ?>
		<p class="nothing">Vous devez construire la "Fabrique de <?= $type->name_type_equipment ?>"  afin de pouvoir construire cet équipement</p>
	<?php else: ?>
	<div class="description-type">
		<div class="image-type">
			<img src="<?=base_url(); ?>/data/image-equipment/<?=$type->id_type_equipment ?>-type.png" />
		</div>
		<h1><?=$type->name_type_equipment ?></h1>
		<p>
			<span><?=$type->skill1_type_equipment ?> : </span><?=$type->description_skill1_type_equipment ?>
		</p>
		<?php if(($type->id_type_equipment == 1) OR ($type->id_type_equipment == 3)): ?>
			<p>
				<span><?=$type->skill2_type_equipment ?> : </span><?=$type->description_skill2_type_equipment ?>
			</p>
		<?php endif; ?>
	</div>
	<ul>
		<?php foreach($equipments AS $equipment):
			$requiredsBuilding = !empty($equipment->building_required)?unserialize($equipment->building_required):unserialize('a:0:{}');
			$requiredsTechnology = !empty($equipment->technology_required)?unserialize($equipment->technology_required):unserialize('a:0:{}');
		
			$ok = 1;
			foreach($requiredsBuilding AS $id => $level){
				if($user_buildings[$id] >= $level){}else{$ok = 0;}
			}
			foreach($requiredsTechnology AS $id => $level){
				if($user_technologys[$id] >= $level){}else{$ok = 0;}
			}?>
			<li <?php if($ok !== 1): ?>class="noEnable"<?php endif; ?>>
				<div class="alert"><div class="success"><p></p></div><div class="fail"><p></p></div></div>
				<div class="photo-equipment">
					<img class="img-1" src="<?=base_url(); ?>/data/image-equipment/<?=$equipment->id_equipment ?>-mini.jpg" />
					<img class="img-2" src="<?=base_url(); ?>/data/image-equipment/<?=$equipment->id_equipment ?>-mini.jpg" />
					<img class="img-3" src="<?=base_url(); ?>/data/image-equipment/<?=$equipment->id_equipment ?>-mini.jpg" />
				</div>
				<div class="equipment">
				<div class="term-equipment">
					<p class="name-equipment"><?= $equipment->name_equipment ?></p>
					<p class="level-equipment"><?= $equipment->amount_equipment ?> unités(s)</p>
					<div class="status-equipment">
						<?php if($equipment->status_equipment == 1):?>
							<p id="countdown" class="<?php echo($equipment->date_end_equipment - now()) ?>"></p>
						<?php else: ?>
							<?php if($underConstruction !== 1): ?>
					            	<?php if($ok == 1): ?>
					                	<span class="icon-ok"></span>
					                	<?= anchor('c_equipment/build/'.$equipment->id_equipment,'Construire', array('title' => 'Construire le'.$equipment->name_equipment, 'class' => 'build', 'id' => $equipment->id_equipment)) ?>
									<?php else: ?>
										<span class="icon-lock"></span>
					                	<p>Vous ne repondez pas au(x) critères pour ce bâtiment</p>
					                <?php endif; ?>
							<?php else: ?>
								<span class="icon-lock"></span>
								<p>Bâtiment déjà en construction</p>
							<?php endif; ?>
				        <?php endif; ?>
					</div>
				</div>
				<span class="display-info-equipment"></span>
				<div class="info-equipment">
					<div class="required-equipment">
						<p class="time"><?= $equipment->time_equipment ?> sec.</p>
						<?php if($equipment->id_type_equipment == 1): ?>
						<p class="argent"><?= $equipment->argent_equipment ?></p>
						<p class="metal"><?= $equipment->metal_equipment ?></p>
						<?php elseif($equipment->id_type_equipment == 2): ?>
						<p class="metal"><?= $equipment->metal_equipment ?></p>
						<?php elseif($equipment->id_type_equipment == 3): ?>
						<p class="argent"><?= $equipment->argent_equipment ?></p>
						<?php elseif($equipment->id_type_equipment == 4): ?>
						<p class="argent"><?= $equipment->argent_equipment ?></p>
						<p class="oxygene"><?= $equipment->oxygene_equipment ?></p>
						<?php endif; ?>
					</div>
					<div class="description-equipment">
						<?php if($equipment->id_type_equipment == 1): ?>
							<p><span>Vitesse : </span> <?= $equipment->skill1_equipment ?></p>
							<p><span>Consommation : </span> <?= $equipment->skill2_equipment ?></p>
						<?php elseif($equipment->id_type_equipment == 2): ?>
							<p><span>Résistance : </span> <?= $equipment->skill1_equipment ?></p>
						<?php elseif($equipment->id_type_equipment == 3): ?>
							<p><span>Autonomie : </span> <?= $equipment->skill1_equipment ?></p>
							<p><span>Communication : </span> <?= $equipment->skill2_equipment ?></p>
						<?php elseif($equipment->id_type_equipment == 4): ?>
							<p><span>Facilité : </span> <?= $equipment->skill1_equipment ?></p>
						<?php endif; ?>
					</div>
				</div>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>
</div>