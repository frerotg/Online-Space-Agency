<?php
$now = time();
$human = unix_to_human($now);

echo($human);
?>
<?= $personnel->id_personnel; ?><br />
<?= $personnel->name_personnel; ?><br />
<?= $personnel->id_type_personnel; ?><br />
<?= $personnel->reputation_personnel; ?><br />
<?= $personnel->skill1_personnel; ?><br />
<?= $personnel->skill2_personnel; ?><br />
<?= $personnel->skill3_personnel; ?><br />
<?= $personnel->salaire_personnel; ?><br />
<?= $personnel->valeur_personnel; ?><br />

<?= form_fieldset('Informations de vente'); ?>

        <?= form_open('c_personnel/auction_start'); ?>

        <div class="clearfix">
                <?= form_label("Prix de départ :", 'price_start') ?>
                <div class="input">
                        <?= form_input(array('name' => 'price_start', 
                                                         'id' => 'price_start')); ?>
                </div>
        </div>	

        <div class="clearfix">			 
                <?=form_label('Date de fin :', 'time_end'); ?>
                <div class="input">
                        <?= form_input(array('name' => 'time_end',
                                             'id' => 'time_end')); ?>
                </div>
        </div>

                <?= form_submit(array('value' => 'Mettre aux enchères',
                                                  'class' => 'btn primary auction-btn')); ?>
                <?= form_hidden('id_personnel', $personnel->id_personnel); ?>
        <?= form_close(); ?>

<?= form_fieldset_close(); ?>
