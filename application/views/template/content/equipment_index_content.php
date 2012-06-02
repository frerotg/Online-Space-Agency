<div class="equipment_index">
	<div class="visual-equipment">
		<ul>
			<?php foreach ($types as $type) {
				echo '<li class="type-'.$type->id_type_equipment.'">'.anchor('c_equipment/typeList/'.$type->id_type_equipment, $type->name_type_equipment, array('title' => $type->name_type_equipment)).'</li>';
			}?>
		</ul>
	</div>
	<span class="info-icon"></span>
	<div class="description-equipment">
		<p class="type-default display">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non orci nisi. Maecenas commodo molestie sapien a scelerisque. Cras ultricies, erat id semper volutpat, velit urna semper orci, in fringilla purus quam non lorem. Etiam at leo sit amet erat varius tempus vitae sed nibh. Aliquam erat volutpat. Phasellus tincidunt molestie lectus lobortis egestas. Maecenas venenatis rutrum nibh, id cursus ligula molestie in</p>
		<?php foreach ($types as $type): ?>
			<p class="type-<?= $type->id_type_equipment ?>"><?= $type->name_type_equipment ?></p>
		<?php endforeach; ?>
	</div>
</div>
