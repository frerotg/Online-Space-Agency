	<div class="welcome">
		<p>Bienvenue Mr/Mme <?= $this->session->userdata('username'); ?></p>
	</div>
	<div class="historicalDate">
		<p>Le 25 avril 1990, le télescope spatial Hubble fût lancé depuis Cap Canaveral</p>
	</div>
	<div class="mission">
		<h1><span>Mission en cours</span></h1>
		<?php if(count($missions)): ?>
			<?php foreach($missions AS $mission): ?>
			<pre><?php print_r($mission); ?></pre>
			<div class="way">
				<div class="earth"><h2>Terre</h2></div><!--
				--><div class="progress"></div><!--
				--><div class="destination"><h2><?= $mission->name_space_object ?></h2></div><!--
				--><div class="rocket">
					<div class="infobulle-rocket">
						<p><?= $mission->name_status ?></p>
					</div>
					<p class="235" id="countdown"></p>
				</div>
			</div>
			<?php endforeach; ?>
		<?php else: ?>
		<p class="nothing">Aucune mission actuellement</p>
		<?php endif; ?>
	</div>
	<div class="batiment-encours encours">
		<h3>Batiment</h3>
		<?php if(!empty($building)): ?>
		<img src="" alt="" width="120" height="80" />
		<time></time>
		<?php else: ?>
		<p class="nothing">Aucun batiment en construction</p>
		<?php endif; ?>
	</div><!--
	--><div class="technologie-encours encours">
		<h3>Technologie</h3>
		<?php if(!empty($technology)): ?>
		<img src="" alt="" width="120" height="80" />
		<time>215sec</time>
		<?php else: ?>
		<p class="nothing">Aucune technologie en developpement</p>
		<?php endif; ?>
	</div><!--
	--><div class="equipement-encours encours">
		<h3>Equipement</h3>
		<?php if(!empty($equipment)): ?>
		<img src="" alt="" width="120" height="80" />
		<time>215sec</time>
		<?php else: ?>
		<p class="nothing">Aucun equipement en construction</p>
		<?php endif; ?>
	</div>