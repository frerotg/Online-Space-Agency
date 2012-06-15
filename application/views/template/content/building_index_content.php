<div class="building_index">
	<h1>De quel type de bâtiment voulez-vous des infos ?</h1>
	<ul><!--
		<?php foreach ($types as $type): ?>
			--><li>
					<?= anchor('c_building/typeList/'.$type->id_type_building, $type->name_type_building, array('title' => $type->description_type_building, 'class' => 'title-typebuilding')); ?>
					<p class="description-typebuilding"><?= $type->description_type_building ?></p>
			   </li><!--
		<? endforeach; ?>
	
	--></ul>
</div>