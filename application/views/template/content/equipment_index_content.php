<ul class="nav nav-pills">
	<?php foreach ($types as $type) {
		echo '<li>'.anchor('c_equipment/typeList/'.$type->id_type_equipment, $type->name_type_equipment, array('title' => $type->name_type_equipment, 'class' => '')).'</li>';
	}?>
</ul>