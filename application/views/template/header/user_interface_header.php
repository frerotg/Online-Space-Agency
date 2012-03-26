<h1>Online Space Agency</h1>
<br />
<p>
    Bienvenue Mr le Directeur.
</p>
<br />
<div class="well" style="padding: 8px 0;">
	<ul class="nav nav-list">
		<li class="nav-header">Mon compte</li>
		<li><?= anchor('c_message/index', '<i class="icon-envelope"></i> Boite de reception', array('title' => 'Accedez à la page de gestion des messages')); ?></li>
		<li class="nav-header">Mon agence</li>
		<li><?= anchor('c_personnel/index', '<i class="icon-user"></i> Personnel de l\'agence', array('title' => 'Accedez à la page de gestion du personnel')); ?></li>
		<li><?= anchor('c_building/index', '<i class="icon-home"></i> Batiment de l\'agence', array('title' => 'Accedez à la page de gestion des batiments')); ?></li>
		<li><?= anchor('c_technology/index', '<i class="icon-asterisk"></i> Technologie  de l\'agence', array('title' => 'Accedez à la page de gestion des technologies')); ?></li>
		<li><?= anchor('c_equipment/index', '<i class="icon-print"></i> Equipement de l\'agence', array('title' => 'Accedez à la page de gestion des equipements')); ?></li>
		<li class="divider"></li>
		<li><?= anchor('c_mission/index', '<i class="icon-ok"></i> Mission de l\'agence', array('title' => 'Accedez à la page de gestion des missions')); ?></li>
	</ul>
</div>
<?= anchor('c_user/disconnection', '<i class="icon-trash icon-white"></i> Se deconnecter', array('title' => 'S\'inscrire sur Online Space Agency', 'class' => 'btn btn-danger')); ?>