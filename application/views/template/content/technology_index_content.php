<div class="technology_index">
	<hr />
	<p class="label-technology">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non orci nisi. Maecenas commodo molestie sapien a scelerisque. Cras ultricies, erat id semper volutpat, velit urna semper orci, in fringilla purus quam non lorem. Etiam at leo sit amet erat varius tempus vitae sed nibh. Aliquam erat volutpat. Phasellus tincidunt molestie lectus </p>
	<hr />
	<ul>
		<?php foreach ($types as $type): ?>
			<li>
				<a href="<?=base_url(); ?>index.php/c_technology/typeList/<?=$type->id_type_technology ?>">
					<div class="image-technology <?= $type->name_type_technology ?>">
						<p><?= $type->name_type_technology ?></p>
					</div>
				</a>
				<span class="info-technology"></span>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non orci nisi. Maecenas commodo molestie sapien a scelerisque. Cras ultricies, erat id semper volutpat, velit urna semper orci, in fringilla purus quam non lorem. Etiam at leo sit amet erat varius tempus vitae sed nibh. Aliquam erat volutpat. Phasellus tincidunt molestie lectus </p>
			</li>
		<?php endforeach; ?>
	</ul>
</div>