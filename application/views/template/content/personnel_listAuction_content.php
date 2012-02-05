
    <div class="alert-message success">
    <p><strong>Bravo</strong> Tu as recruté du personnel.</p>
    </div>
    <div class="alert-message error_argent">
    <p><strong>Erreur !</strong> Tu est trop fauché pour recruté ce personnel.</p>
    </div>
    <div class="alert-message error_price">
    <p><strong>Erreur !</strong> Tu doit encherir de minimum 1000€.</p>
    </div>
    <?php
    foreach($types as $type){?>
         <h3><?= $type->name_type_personnel ?></h3>
         <table class="bordered-table zebra-striped">
             <tr>
                 <th>ID du Type</th>
                 <th>Nom</th>
                 <th>Type de personnel</th>
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
                <td><?= $spationaute->id_type_personnel; ?></td>
                <td><?= $spationaute->reputation_personnel; ?></td>
                <td><?= $spationaute->skill1_personnel; ?></td>
                <td><?= $spationaute->skill2_personnel; ?></td>
                <td><?= $spationaute->skill3_personnel; ?></td>
                <td><?= $spationaute->salaire_personnel; ?></td>
                <td><?= $spationaute->valeur_personnel; ?></td>
                <td>
                <button type="button" class="bid btn primary auction-btn" id="bid<?= $spationaute->id_personnel ?>">Encherir</button>
                        Meilleur encherisseur : <?= $spationaute->username; ?>
                        Prix actuel : <?= $spationaute->price_current_auction_personnel; ?>
                </td>
              </tr>
              <tr class="formBid">
                <td><?= form_open('c_personnel/bid'); ?>
                        <p id="price_final"><span id="price_slider"></span> + <?= $spationaute->price_current_auction_personnel; ?></p>
                        <div id="slider-range"></div>
                        <input type="hidden" name="price" id="price" value="" />

                        <?= form_submit(array('value' => 'Encherir',
                                                          'class' => 'bid btn primary auction-btn')); ?>
                        <?= form_hidden('price_current', $spationaute->price_current_auction_personnel); ?>
                        <?= form_hidden('id_personnel', $spationaute->id_personnel); ?>
                <?= form_close(); ?>
                </td>
              </tr>
                <?php
                }
                break;
            case 2:
                foreach($pilotes AS $pilote){?>
                <tr>
                <td><?= $pilote->id_personnel; ?></td>
                <td><?= $pilote->name_personnel; ?></td>
                <td><?= $pilote->id_type_personnel; ?></td>
                <td><?= $pilote->reputation_personnel; ?></td>
                <td><?= $pilote->skill1_personnel; ?></td>
                <td><?= $pilote->skill2_personnel; ?></td>
                <td><?= $pilote->skill3_personnel; ?></td>
                <td><?= $pilote->salaire_personnel; ?></td>
                <td><?= $pilote->valeur_personnel; ?></td>
                <td>
                <button type="button" class="bid btn primary auction-btn" id="bid<?= $pilote->id_personnel ?>">Encherir</button>
                        Meilleur encherisseur : <?= $pilote->username; ?>
                        Prix actuel : <?= $pilote->price_current_auction_personnel; ?>
                </td>
              </tr>
                            <tr class="formBid">
                <?= form_open('c_personnel/bid'); ?>
                        <?= form_label("Mise (Min. 1000€) :", 'price_current') ?>
                                <?= form_input(array('name' => 'price_current', 
                                                                 'id' => 'price_current')); ?>
                        <?= form_submit(array('value' => 'Encherir',
                                                          'class' => 'btn primary auction-btn')); ?>
                        <?= form_hidden('id_personnel', $pilote->id); ?>
                <?= form_close(); ?>
              </tr>
                <?php
                }
                break;
            case 3:
                foreach($scientifiques AS $scientifique){?>
                <tr>
                <td><?= $scientifique->id_personnel; ?></td>
                <td><?= $scientifique->name_personnel; ?></td>
                <td><?= $scientifique->id_type_personnel; ?></td>
                <td><?= $scientifique->reputation_personnel; ?></td>
                <td><?= $scientifique->skill1_personnel; ?></td>
                <td><?= $scientifique->skill2_personnel; ?></td>
                <td><?= $scientifique->skill3_personnel; ?></td>
                <td><?= $scientifique->salaire_personnel; ?></td>
                <td><?= $scientifique->valeur_personnel; ?></td>
                <td>
                <button type="button" class="bid btn primary auction-btn" id="bid<?= $scientifique->id_personnel ?>">Encherir</button>
                        Meilleur encherisseur : <?= $scientifique->username; ?>
                        Prix actuel : <?= $scientifique->price_current_auction_personnel; ?>
                </td>
              </tr>
                            <tr class="formBid">
                <?= form_open('c_personnel/bid'); ?>
                        <?= form_label("Mise (Min. 1000€) :", 'price_current') ?>
                                <?= form_input(array('name' => 'price_current', 
                                                                 'id' => 'price_current')); ?>
                        <?= form_submit(array('value' => 'Encherir',
                                                          'class' => 'btn primary auction-btn')); ?>
                        <?= form_hidden('id_personnel', $scientifique->id_personnel); ?>
                <?= form_close(); ?>
              </tr>
                <?php
                }
                break;
            case 4:
                foreach($horslalois AS $horslaloi){?>
                <tr>
                <td><?= $horslaloi->id_personnel; ?></td>
                <td><?= $horslaloi->name_personnel; ?></td>
                <td><?= $horslaloi->id_type_personnel; ?></td>
                <td><?= $horslaloi->reputation_personnel; ?></td>
                <td><?= $horslaloi->skill1_personnel; ?></td>
                <td><?= $horslaloi->skill2_personnel; ?></td>
                <td><?= $horslaloi->skill3_personnel; ?></td>
                <td><?= $horslaloi->salaire_personnel; ?></td>
                <td><?= $horslaloi->valeur_personnel; ?></td>
                <td>
                <button type="button" class="bid btn primary auction-btn" id="bid<?= $horslaloi->id_personnel ?>">Encherir</button>
                        Meilleur encherisseur : <?= $horslaloi->username; ?>
                        Prix actuel : <?= $horslaloi->price_current_auction_personnel; ?>
                </td>
              </tr>
               <tr class="formBid">
                <?= form_open('c_personnel/bid'); ?>
                        <?= form_label("Mise (Min. 1000€) :", 'price_current') ?>
                                <?= form_input(array('name' => 'price_current', 
                                                                 'id' => 'price_current')); ?>
                        <?= form_submit(array('value' => 'Encherir',
                                                          'class' => 'btn primary auction-btn')); ?>
                        <?= form_hidden('id_personnel', $horslaloi->id_personnel); ?>
                <?= form_close(); ?>
              </tr>
                <?php
                }
                break;
            case 5:
                foreach($securites AS $securite){?>
                <tr>
                <td><?= $securite->id_personnel; ?></td>
                <td><?= $securite->name_personnel; ?></td>
                <td><?= $securite->id_type_personnel; ?></td>
                <td><?= $securite->reputation_personnel; ?></td>
                <td><?= $securite->skill1_personnel; ?></td>
                <td><?= $securite->skill2_personnel; ?></td>
                <td><?= $securite->skill3_personnel; ?></td>
                <td><?= $securite->salaire_personnel; ?></td>
                <td><?= $securite->valeur_personnel; ?></td>
                <td>
                <button type="button" class="bid btn primary auction-btn" id="bid<?= $securite->id_personnel ?>">Encherir</button>
                        Meilleur encherisseur : <?= $securite->username; ?>
                        Prix actuel : <?= $securite->price_current_auction_personnel; ?>
                </td>
              </tr>
              <tr class="formBid">
                <?= form_open('c_personnel/bid'); ?>
                        <?= form_label("Mise (Min. 1000€) :", 'price_current') ?>
                                <?= form_input(array('name' => 'price_current', 
                                                                 'id' => 'price_current')); ?>
                        <?= form_submit(array('value' => 'Encherir',
                                                          'class' => 'btn primary auction-btn')); ?>
                        <?= form_hidden('id_personnel', $securite->id_personnel); ?>
                <?= form_close(); ?>
              </tr>
                <?php
                }
                break;
        }?>
        </table>
    <?php
    }?>