    	<div class="row">
	    	<div class="span16">
	    	</div>
    	</div>
    	<div class="row">
    		<?php echo anchor('c_message/newMessage/','Nouveau message', array('title' =>'Nouveau message')) ?>
    		<table class="bordered-table zebra-striped">
             <tr>
                 <th>ID du Message</th>
                 <th>ID de l'envoyeur</th>
                 <th>Titre</th>
                 <th>Date</th>
                 <th>Action</th>
             </tr>
        <?php
		foreach($messages AS $message){?>
			<tr>
                <td><?= $message->id_message; ?></td>
                <td><?= $message->id_user_send; ?></td>
                <td><?= $message->title_message; ?></td>
                <td><?= $message->date_message; ?></td>
    			<td>
    				<?php echo anchor('c_message/readOne/' .$message->id_message ,'Lire', array('title' =>'Lire le message')) ?>
    			</td>
			</tr>
		<?php
		}?>
		</table>
       	</div>
