<div class="technology_index">
	<p class="label-technology">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non orci nisi. Maecenas commodo molestie sapien a scelerisque. Cras ultricies, erat id semper volutpat, velit urna semper orci, in fringilla purus quam non lorem. Etiam at leo sit amet erat varius tempus vitae sed nibh. Aliquam erat volutpat. Phasellus tincidunt molestie lectus </p>
	<hr />
	<ul>
		<?php foreach ($types as $type): ?>
			<li><?= anchor('c_technology/typeList/'.$type->id_type_technology, $type->name_type_technology, array('title' => $type->description_type_technology, 'class' => '')); ?></li>
		<?php endforeach; ?>
	</ul>
</div>

