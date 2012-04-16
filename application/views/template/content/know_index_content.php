<ul class="nav nav-pills">
	<?php foreach ($types as $type) {
		echo '<li>'.anchor('c_know/listUserKnow/'.$type->id_know_type, $type->name_know_type, array('title' => $type->description_know_type, 'class' => '')).'</li>';
	} ?>

</ul>