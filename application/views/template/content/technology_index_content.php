<div class="technology_index">
	<?php if($recherche->level_building == 0): ?>
		<p class="nothing">Vous devez construire le "Centre de Recherche"  afin de pouvoir developper de nouvelles technologies</p>
	<?php else: ?>
	<hr />
	<p class="label-technology">Les technologies vous permettent d'améliorer le fonctionnement de votre agence. Chaque technologie est présente dans un arbre. Pour débloquer les technologies inférieures, débloquez tout d'abord les technologies supérieures.</p>
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
				<p><?= $type->description_type_technology ?></p>
			</li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>
</div>