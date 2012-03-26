<ul class="nav nav-pills">
	<?php foreach ($types as $type) {
		echo '<li>'.anchor('c_building/typeList/'.$type->id_type_building, $type->name_type_building, array('title' => $type->description_type_building, 'class' => '')).'</li>';
	} ?>

</ul>