	<div class="alert">
		<div class="success">
			<p></p>
		</div>
		<div class="fail">
			<p></p>
		</div>
	</div>
<table class="table">
	<thead>
		<tr>
			<th>Image</th>
			<th>Nom du bâtiment</th>
			<th>Status du bâtiment</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($buildings AS $building):
		$requiredsBuilding = !empty($building->building_required)?unserialize($building->building_required):unserialize('a:0:{}');
		$requiredsTechnology = !empty($building->technology_required)?unserialize($building->technology_required):unserialize('a:0:{}');
		
		$ok = 1;
		foreach($requiredsBuilding AS $id => $level){
			if($user_buildings[$id] >= $level){}else{$ok = 0;}
		}
		foreach($requiredsTechnology AS $id => $level){
			if($user_technologys[$id] >= $level){}else{$ok = 0;}
		}
		?>
		<tr>
			<td><img src="<?=base_url(); ?>/data/image-batiment/<?=$building->id_building ?>-mini.jpg" /></td>
			<td><?= $building->name_building ?></td>
		<?php if($building->status_building == 1):?>
        	<td>Votre batiment est en construction et il reste <span id="countdown" class="<?= $building->date_end_building - now() ?>"></span> sec</td>
        <?php else: ?>
        	<?php if($underConstruction !== 1): ?>
	        	<?php if($building->level_building == 0): ?>
	            	<?php if($ok == 1): ?>
	                	<td><?= anchor('c_building/build/'.$building->id_building,'Construire', array('title' => 'Construire le'.$building->name_building, 'class' => 'build', 'id' => $building->id_building)) ?></td>
					<?php else: ?>
	                	<td>Vous ne répondez pas aux conditions nécéssaire pour construire se batiment</td>
	                <?php endif; ?>
				<?php else: ?>
	               		<td><?= anchor('c_building/evolve/'.$building->id_building.'/'.(($building->level_building) +1),'Evoluer au niveau suivant', array('title' => 'Evoluer le batiment'.$building->name_building, 'class' => 'evolve'))?></td>
				<?php endif; ?>
			<?php else: ?>
				<td>Vous avez déjà un bâtiment en construction</td>
			<?php endif; ?>
        <?php endif; ?>
        </tr>
	<?php endforeach; ?>
	</tbody>
</table>