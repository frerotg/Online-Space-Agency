	<div class="welcome">
		<p>Bienvenue Mr/Mme <?= $this->session->userdata('username'); ?></p>
	</div>
	<div class="historicalDate">
		<p>Le 25 avril 1990, le télescope spatial Hubble fût lancé depuis Cap Canaveral</p>
	</div>
	<div class="mission">
		<h1><span>Mission en cours</span></h1>
		<div class="way">
			<div class="earth"><h2>Terre</h2></div><!--
			--><div class="progress"><h2>235sec</h2></div><!--
			--><div class="destination"><h2>Saturne</h2></div><!--
			--><div class="rocket"></div>
		</div>
	</div>
<?php
	if(empty($listBuildings)){
		echo 'Vous n\'avez aucun bâtiment en construction';
	}
	else{?>
		<table class="bordered-table zebra-striped">
		<?php
		foreach($listBuildings AS $listBuilding){
		?>
      		<tr>
        		<td><?= $listBuilding->name_building; ?></td>
        		<td><?= $listBuilding->level_building; ?></td>
        		<td><?= $listBuilding->date_end_building; ?></td>
      		</tr>
      	<?php
		}
		?>
		</table>
		<?php
	}
	
	if(empty($listTechnologys)){
		echo 'Vous n\'avez aucun bâtiment en construction';
	}
	else{?>
		<table class="bordered-table zebra-striped">
		<?php
		foreach($listTechnologys AS $listTechnology){
		?>
      		<tr>
        		<td><?= $listTechnology->name_technology; ?></td>
        		<td><?= $listTechnology->level_technology; ?></td>
        		<td><?= $listTechnology->date_end_technology; ?></td>
      		</tr>
      	<?php
		}
		?>
		</table>
		<?php
	}
	
	if(empty($listEquipments)){
		echo 'Vous n\'avez aucun bâtiment en construction';
	}
	else{?>
		<table class="bordered-table zebra-striped">
		<?php
		foreach($listEquipments AS $listEquipment){
		?>
      		<tr>
        		<td><?= $listEquipment->name_equipment; ?></td>
        		<td><?= $listEquipment->amount_equipment; ?></td>
        		<td><?= $listEquipment->date_end_equipment; ?></td>
      		</tr>
      	<?php
		}
		?>
		</table>
		<?php
	}
	if (count($missions))
{?>
   <table class="bordered-table zebra-striped">
   <?php
   foreach ($missions as $mission)
   {?>
      <tr>
        <td><?= $mission->id_mission; ?></td>
        <td><?= $mission->id_zone_space; ?></td>
        <td><?= $mission->name_status; ?></td>
        <td><?php echo anchor('c_mission/viewMission/' .$mission->id_mission ,'Détails de la mission', array('title' =>'Voir les détails de la mission',
                                                                                        'class' => 'detail',
                                                                                        'id' => $mission->id_mission)); ?></td>
      </tr>
   <?php
   }
   ?>
   </table>
<?php
}
else{
	echo 'Aucun mission actuellement';
}