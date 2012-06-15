<div class="technology_list">
	<h1 class="<?= $type->name_type_technology ?>"><?= $type->name_type_technology ?></h1>
	<div class="description-technologys">
		<div class="info-icon"></div>
		<p><?= $type->description_type_technology ?></p>
	</div>
	<div class="technology-list">
		<ul class="technology-palier1 technology-palier">
			<?php $count = 0; ?>
			<?php foreach ($users_technologys as $technology): ?>
				<?php if($technology->level_type_technology == 1): ?>
				<?php $count = $count + $technology->level_technology ?>
				<li>
					<img src="<?=base_url(); ?>/data/image-technologie/<?=$technology->id_technology ?><?php if($technology->level_technology == 0){echo('-black');} ?>.png" />
					<div class="description-technology">
						<div class="alert"><div class="success"><p></p></div><div class="fail"><p></p></div></div>
						<h2><?= $technology->name_technology ?></h2>
						<p><?= $technology->description_technology ?></p>
						<div class="status-technology">
							<?php if($technology->status_technology == 1):?>
								<p id="countdown" class="<?php echo($technology->date_end_technology - now()) ?>"></p>
							<?php else: ?>
								<?php if($underConstruction !== 1): ?>
									<?php if($technology->level_technology == 0): ?>
										<span class="icon-ok"></span>
										<?= anchor('c_technology/develop/'.$technology->id_technology,'Developper', array('title' => 'Construire le'.$technology->name_technology, 'class' => 'develop')); ?>
									<?php elseif(($technology->level_technology < $technology->levelmax_technology) AND ($technology->level_technology !== 0)): ?>
										<span class="icon-ok"></span>
										<?= anchor('c_technology/improve/'.$technology->id_technology.'/'.(($technology->level_technology) +1),'Evoluer au niveau suivant', array('title' => 'Evoluer le batiment'.$technology->name_technology, 'class' => 'improve')); ?>
									<?php elseif($technology->level_technology == $technology->levelmax_technology): ?>
										<span class="icon-lock"></span>
										<p>Vous avez atteint le niveau max pour cette technologie</p>
									<?php endif; ?>
				                <?php else: ?>
									<span class="icon-lock"></span>
									<p>Technologie déja en developpement</p>
								<?php endif; ?>
					        <?php endif; ?>
						</div>
					</div>
				</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
				<ul class="technology-palier2 technology-palier">
			<?php $count = 0; ?>
			<?php foreach ($users_technologys as $technology): ?>
				<?php if($technology->level_type_technology == 2): ?>
				<?php $count = $count + $technology->level_technology ?>
				<li>
					<img src="<?=base_url(); ?>/data/image-technologie/<?=$technology->id_technology ?><?php if($technology->level_technology == 0){echo('-black');} ?><?php if($count<5){echo('fail');} ?>.png" />
					<div class="description-technology">
						<h2><?= $technology->name_technology ?></h2>
						<p><?= $technology->description_technology ?></p>
						<div class="status-technology">
							<?php if($technology->status_technology == 1):?>
								<p id="countdown" class="<?php echo($technology->date_end_technology - now()) ?>"></p>
							<?php else: ?>
								<?php if($underConstruction !== 1): ?>
									<?php if($count>=5): ?>
										<?php if($technology->level_technology == 0): ?>
											<span class="icon-ok"></span>
											<?= anchor('c_technology/develop/'.$technology->id_technology,'Developper', array('title' => 'Construire le'.$technology->name_technology, 'class' => '')); ?>
										<?php elseif(($technology->level_technology < $technology->levelmax_technology) AND ($technology->level_technology !== 0)): ?>
											<span class="icon-ok"></span>
											<?= anchor('c_technology/improve/'.$technology->id_technology.'/'.(($technology->level_technology) +1),'Evoluer au niveau suivant', array('title' => 'Evoluer le batiment'.$technology->name_technology, 'class' => '')); ?>
										<?php elseif($technology->level_technology == $technology->levelmax_technology): ?>
											<span class="icon-lock"></span>
											<p>Vous avez atteint le niveau max pour cette technologie</p>
										<?php endif; ?>
									<?php else: ?>
										<span class="icon-lock"></span>
										<p>Vous devez avoir 5 niveaux dans les technologies du niveau précédent</p>
									<?php endif; ?>
				                <?php else: ?>
									<span class="icon-lock"></span>
									<p>Technologie déja en developpement</p>
								<?php endif; ?>
					        <?php endif; ?>
						</div>
					</div>
				</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
				<ul class="technology-palier3 technology-palier">
			<?php $count = 0; ?>
			<?php foreach ($users_technologys as $technology): ?>
				<?php if($technology->level_type_technology == 3): ?>
				<?php $count = $count + $technology->level_technology ?>
				<li>
					<img src="<?=base_url(); ?>/data/image-technologie/<?=$technology->id_technology ?><?php if($technology->level_technology == 0){echo('-black');} ?><?php if($count<5){echo('fail');} ?>.png" class="<?php if($technology->level_technology == 0){echo('black');} ?> <?php if($count<10){echo('fail');} ?>" />
					<div class="description-technology">
						<h2><?= $technology->name_technology ?></h2>
						<p><?= $technology->description_technology ?></p>
						<div class="status-technology">
							<?php if($technology->status_technology == 1):?>
								<p id="countdown" class="<?php echo($technology->date_end_technology - now()) ?>"></p>
							<?php else: ?>
								<?php if($underConstruction !== 1): ?>
									<?php if($count>=10): ?>
										<?php if($technology->level_technology == 0): ?>
											<span class="icon-ok"></span>
											<?= anchor('c_technology/develop/'.$technology->id_technology,'Developper', array('title' => 'Construire le'.$technology->name_technology, 'class' => '')); ?>
										<?php elseif(($technology->level_technology < $technology->levelmax_technology) AND ($technology->level_technology !== 0)): ?>
											<span class="icon-ok"></span>
											<?= anchor('c_technology/improve/'.$technology->id_technology.'/'.(($technology->level_technology) +1),'Evoluer au niveau suivant', array('title' => 'Evoluer le batiment'.$technology->name_technology, 'class' => '')); ?>
										<?php elseif($technology->level_technology == $technology->levelmax_technology): ?>
											<span class="icon-lock"></span>
											<p>Vous avez atteint le niveau max pour cette technologie</p>
										<?php endif; ?>
									<?php else: ?>
										<span class="icon-lock"></span>
										<p>Vous devez avoir 10 niveaux dans les technologies des niveaux précédent</p>
									<?php endif; ?>
				                <?php else: ?>
									<span class="icon-lock"></span>
									<p>Technologie déja en developpement</p>
								<?php endif; ?>
					        <?php endif; ?>
						</div>
					</div>
				</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
				<ul class="technology-palier4 technology-palier">
			<?php $count = 0; ?>
			<?php foreach ($users_technologys as $technology): ?>
				<?php if($technology->level_type_technology == 4): ?>
				<?php $count = $count + $technology->level_technology ?>
				<li>
					<img src="<?=base_url(); ?>/data/image-technologie/<?=$technology->id_technology ?><?php if($technology->level_technology == 0){echo('-black');} ?><?php if($count<5){echo('fail');} ?>.png" class="<?php if($technology->level_technology == 0){echo('black');} ?> <?php if($count<15){echo('fail');} ?>" />
					<div class="description-technology">
						<h2><?= $technology->name_technology ?></h2>
						<p><?= $technology->description_technology ?></p>
						<div class="status-technology">
							<?php if($technology->status_technology == 1):?>
								<p id="countdown" class="<?php echo($technology->date_end_technology - now()) ?>"></p>
							<?php else: ?>
								<?php if($underConstruction !== 1): ?>
									<?php if($count>=15): ?>
										<?php if($technology->level_technology == 0): ?>
											<span class="icon-ok"></span>
											<?= anchor('c_technology/develop/'.$technology->id_technology,'Developper', array('title' => 'Construire le'.$technology->name_technology, 'class' => '')); ?>
										<?php elseif(($technology->level_technology < $technology->levelmax_technology) AND ($technology->level_technology !== 0)): ?>
											<span class="icon-ok"></span>
											<?= anchor('c_technology/improve/'.$technology->id_technology.'/'.(($technology->level_technology) +1),'Evoluer au niveau suivant', array('title' => 'Evoluer le batiment'.$technology->name_technology, 'class' => '')); ?>
										<?php elseif($technology->level_technology == $technology->levelmax_technology): ?>
											<span class="icon-lock"></span>
											<p>Vous avez atteint le niveau max pour cette technologie</p>
										<?php endif; ?>
									<?php else: ?>
										<span class="icon-lock"></span>
										<p>Vous devez avoir 15 niveaux dans les technologies des niveaux précédent</p>
									<?php endif; ?>
				                <?php else: ?>
									<span class="icon-lock"></span>
									<p>Technologie déja en developpement</p>
								<?php endif; ?>
					        <?php endif; ?>

						</div>
					</div>
				</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
