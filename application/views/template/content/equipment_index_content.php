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
		<p class="type-default display">Les équipements sont les outils pour une mission satisfaisante. Il existe quatre types d’équipements : les lanceurs, les coques, les combinaisons et les modules de commande. </p>
		<?php foreach ($types as $type): ?>
			<p class="type-<?= $type->id_type_equipment ?>"><?= $type->name_type_equipment ?></p>
		<?php endforeach; ?>
	</div>
</div>
