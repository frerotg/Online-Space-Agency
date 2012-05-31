<div class="building_list">
	<div class="alert">
		<div class="success">
			<p></p>
		</div>
		<div class="fail">
			<p></p>
		</div>
	</div>
	<h1>Bâtiment</h1>
	<ul>
		<?php foreach($buildings AS $building):
			$requiredsBuilding = !empty($building->building_required)?unserialize($building->building_required):unserialize('a:0:{}');
			$requiredsTechnology = !empty($building->technology_required)?unserialize($building->technology_required):unserialize('a:0:{}');
		
			$ok = 1;
			foreach($requiredsBuilding AS $id => $level){
				if($user_buildings[$id] >= $level){}else{$ok = 0;}
			}
			foreach($requiredsTechnology AS $id => $level){
				if($user_technologys[$id] >= $level){}else{$ok = 0;}
			}?>
			<li>
				<div class="photo-building">
					<img class="img-1" src="<?=base_url(); ?>/data/image-batiment/<?=$building->id_building ?>-mini.jpg" />
					<img class="img-2" src="<?=base_url(); ?>/data/image-batiment/<?=$building->id_building ?>-mini.jpg" />
					<img class="img-3" src="<?=base_url(); ?>/data/image-batiment/<?=$building->id_building ?>-mini.jpg" />
				</div>
				<div class="building">
				<div class="term-building">
					<p class="name-building"><?= $building->name_building ?></p>
					<p class="level-building">niv.<?= $building->level_building ?></p>
					<div class="status-building">
						<?php if($building->status_building == 1):?>
						<?php else: ?>
							<?php if($underConstruction !== 1): ?>
					        	<?php if($building->level_building == 0): ?>
					            	<?php if($ok == 1): ?>
					                	<span class="icon-ok"></span>
					                	<?= anchor('c_building/build/'.$building->id_building,'Construire', array('title' => 'Construire le'.$building->name_building, 'class' => 'build', 'id' => $building->id_building)) ?>
									<?php else: ?>
										<span class="icon-lock"></span>
					                	<p>Vous ne pouvez pas</p>
					                <?php endif; ?>
								<?php else: ?>
										<span class="icon-ok"></span>
					               		<?= anchor('c_building/evolve/'.$building->id_building.'/'.(($building->level_building) +1),'Evoluer au niveau suivant', array('title' => 'Evoluer le batiment'.$building->name_building, 'class' => 'evolve'))?>
								<?php endif; ?>
							<?php else: ?>
								<span class="icon-lock"></span>
								<p>Bâtiment déjà en construction</p>
							<?php endif; ?>
				        <?php endif; ?>
					</div>
				</div>
				<span class="display-info-building"></span>
				<div class="info-building">
					<div class="required-building">
						<p class="time">147 sec.</p>
						<p class="argent">9555</p>
						<p class="pierre">10000</p>
						<p class="metal">11000</p>
					</div>
					<div class="description-building">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porttitor massa. Aenean vestibulum suscipit arcu, vitae convallis felis interdum congue. Suspendisse ultricies congue sodales.</p>
					</div>
				</div>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
</div>