<div class="equipment_list">
	<div class="alert">
		<div class="success">
			<p></p>
		</div>
		<div class="fail">
			<p></p>
		</div>
	</div>
	<h1>Equipement</h1>
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
			<li>
				<div class="photo-equipment">
					<img class="img-1" src="<?=base_url(); ?>/data/image-equipment/<?=$equipment->id_equipment ?>-mini.jpg" />
					<img class="img-2" src="<?=base_url(); ?>/data/image-equipment/<?=$equipment->id_equipment ?>-mini.jpg" />
					<img class="img-3" src="<?=base_url(); ?>/data/image-equipment/<?=$equipment->id_equipment ?>-mini.jpg" />
				</div>
				<div class="equipment">
				<div class="term-equipment">
					<p class="name-equipment"><?= $equipment->name_equipment ?></p>
					<p class="level-equipment"><?= $equipment->amount_equipment ?> exemplaire(s)</p>
					<div class="status-equipment">
						<?php if($equipment->status_equipment == 1):?>
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
						<p class="argent"><?= $equipment->argent_equipment ?></p>
						<p class="pierre"><?= $equipment->oxygene_equipment ?></p>
						<p class="metal"><?= $equipment->metal_equipment ?></p>
					</div>
					<div class="description-equipment">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porttitor massa. Aenean vestibulum suscipit arcu, vitae convallis felis interdum congue. Suspendisse ultricies congue sodales.</p>
					</div>
				</div>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
</div>