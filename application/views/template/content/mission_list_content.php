<?php
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
}?>