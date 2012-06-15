<a class="link-topbar link-home" href="<?=base_url(); ?>">Home</a><!--
--><ul class="ressources"><!--
	--><li><span class="icon icon-pierre">Pierre</span><span class="ressource"><?= $resource->pierre ?></span></li><!--
	--><li><span class="icon icon-metal">Metal</span><span class="ressource"><?= $resource->metal ?></span></li><!--
	--><li><span class="icon icon-oxygene">Oxygène</span><span class="ressource"><?= $resource->oxygene ?></span></li><!--
	--><li><span class="icon icon-carburant">Carburant</span><span class="ressource"><?= $resource->carburant ?></span></li><!--
	--><li><span class="icon icon-argent">Argent</span><span class="ressource"><?= $resource->argent ?>€</span></li><!--
--></ul><!--
--><?php if($message !== 0){?>
<?= anchor('c_message/index','<span class="icon icon-mail">'.$message.'</span>Message', array('title' => 'Lire ses messages', 'class' => 'link-topbar link-message'));}
	else{?><?= anchor('c_message/index','Message', array('title' => 'Accès à sa boite mail', 'class' => 'link-topbar link-message'));
	}?><!--
--><?= anchor('c_user/index', 'Gestion du compte', array('title' => 'Accès a la gestion du compte', 'class' => 'link-topbar link-setting')); ?><!--
--><?= anchor('c_user/disconnection', 'Deconnection', array('title' => 'Se deconnecter', 'class' => 'link-topbar link-logout')); ?>