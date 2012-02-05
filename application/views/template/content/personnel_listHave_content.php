<div class="alert-message success">
<p><strong>Bravo</strong> Tu as viré un personnel<p>
</div>
    <?php
    foreach($types as $type){?>
         <h3><?= $type->name_type_personnel ?></h3>
         <table class="bordered-table zebra-striped">
             <tr>
                 <th>ID du Type</th>
                 <th>Nom</th>
                 <th>Réputation /100</th>
                 <th><?= $type->skill1_type_personnel ?></th>
                 <th><?= $type->skill2_type_personnel ?></th>
                 <th><?= $type->skill3_type_personnel ?></th>
                 <th>Salaire par moi</th>
                 <th>Valeur</th>
             </tr>
        <?php
        switch ($type->id_type_personnel) {
            case 1:
                foreach($spationautes AS $spationaute){?>
                <tr>
                <td><?= $spationaute->id_personnel; ?></td>
                <td><?= $spationaute->name_personnel; ?></td>
                <td><?= $spationaute->reputation_personnel; ?></td>
                <td><?= $spationaute->skill1_personnel; ?></td>
                <td><?= $spationaute->skill2_personnel; ?></td>
                <td><?= $spationaute->skill3_personnel; ?></td>
                <td><?= $spationaute->salaire_personnel; ?></td>
                <td><?= $spationaute->valeur_personnel; ?></td>
    <td><?php echo anchor('c_personnel/kick/' .$spationaute->id_personnel ,'Virer', array('title' =>'Virer ce personnel',
                                                                              'class' => 'kick',
                                                                              'id' => $spationaute->id_personnel)) ?></td>
    <td><?php echo anchor('c_personnel/auction/' .$spationaute->id_personnel ,'Vendre aux enchères', array('title' =>'Virer ce personnel',
                                                                              'class' => 'auction')) ?></td>
              </tr>
                <?php
                }
                break;
            case 2:
                foreach($pilotes AS $pilote){?>
                <tr>
                <td><?= $pilote->id_personnel; ?></td>
                <td><?= $pilote->name_personnel; ?></td>
                <td><?= $pilote->reputation_personnel; ?></td>
                <td><?= $pilote->skill1_personnel; ?></td>
                <td><?= $pilote->skill2_personnel; ?></td>
                <td><?= $pilote->skill3_personnel; ?></td>
                <td><?= $pilote->salaire_personnel; ?></td>
                <td><?= $pilote->valeur_personnel; ?></td>
                    <td><?php echo anchor('c_personnel/kick/' .$pilote->id_personnel ,'Virer', array('title' =>'Virer ce personnel',
                                                                              'class' => 'kick',
                                                                              'id' => $pilote->id_personnel)) ?></td>
    <td><?php echo anchor('c_personnel/auction/' .$pilote->id_personnel ,'Vendre aux enchères', array('title' =>'Virer ce personnel',
                                                                              'class' => 'auction')) ?></td>
              </tr>
                <?php
                }
                break;
            case 3:
                foreach($scientifiques AS $scientifique){?>
                <tr>
                <td><?= $scientifique->id_personnel; ?></td>
                <td><?= $scientifique->name_personnel; ?></td>
                <td><?= $scientifique->reputation_personnel; ?></td>
                <td><?= $scientifique->skill1_personnel; ?></td>
                <td><?= $scientifique->skill2_personnel; ?></td>
                <td><?= $scientifique->skill3_personnel; ?></td>
                <td><?= $scientifique->salaire_personnel; ?></td>
                <td><?= $scientifique->valeur_personnel; ?></td>
    <td><?php echo anchor('c_personnel/kick/' .$scientifique->id_personnel ,'Virer', array('title' =>'Virer ce personnel',
                                                                              'class' => 'kick',
                                                                              'id' => $scientifique->id_personnel)) ?></td>
    <td><?php echo anchor('c_personnel/auction/' .$scientifique->id_personnel ,'Vendre aux enchères', array('title' =>'Virer ce personnel',
                                                                              'class' => 'auction')) ?></td>
              </tr>
                <?php
                }
                break;
            case 4:
                foreach($horslalois AS $horslaloi){?>
                <tr>
                <td><?= $horslaloi->id_personnel; ?></td>
                <td><?= $horslaloi->name_personnel; ?></td>
                <td><?= $horslaloi->reputation_personnel; ?></td>
                <td><?= $horslaloi->skill1_personnel; ?></td>
                <td><?= $horslaloi->skill2_personnel; ?></td>
                <td><?= $horslaloi->skill3_personnel; ?></td>
                <td><?= $horslaloi->salaire_personnel; ?></td>
                <td><?= $horslaloi->valeur_personnel; ?></td>
    <td><?php echo anchor('c_personnel/kick/' .$horslaloi->id_personnel ,'Virer', array('title' =>'Virer ce personnel',
                                                                              'class' => 'kick',
                                                                              'id' => $horslaloi->id_personnel)) ?></td>
    <td><?php echo anchor('c_personnel/auction/' .$horslaloi->id_personnel ,'Vendre aux enchères', array('title' =>'Virer ce personnel',
                                                                              'class' => 'auction')) ?></td>
              </tr>
                <?php
                }
                break;
            case 5:
                foreach($securites AS $securite){?>
                <tr>
                <td><?= $securite->id_personnel; ?></td>
                <td><?= $securite->name_personnel; ?></td>
                <td><?= $securite->reputation_personnel; ?></td>
                <td><?= $securite->skill1_personnel; ?></td>
                <td><?= $securite->skill2_personnel; ?></td>
                <td><?= $securite->skill3_personnel; ?></td>
                <td><?= $securite->salaire_personnel; ?></td>
                <td><?= $securite->valeur_personnel; ?></td>
    <td><?php echo anchor('c_personnel/kick/' .$securite->id_personnel ,'Virer', array('title' =>'Virer ce personnel',
                                                                              'class' => 'kick',
                                                                              'id' => $securite->id_personnel)) ?></td>
    <td><?php echo anchor('c_personnel/auction/' .$securite->id_personnel ,'Vendre aux enchères', array('title' =>'Virer ce personnel',
                                                                              'class' => 'auction')) ?></td>
              </tr>
                <?php
                }
                break;
        }?>
        </table>
    <?php
    }?>