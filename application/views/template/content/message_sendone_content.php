    	<div class="row">
	    	<div class="span16">
	    	</div>
    	</div>
    	<div class="row">
    		<?= form_open_multipart('c_message/sendOne'); ?>
    			<label for="title_message">Titre du message :</label>
       			<input type="text" name="title_message" id="title_message" />
			    <label for="message">Message :</label><br />
			    <textarea name="message" id="message"></textarea>
			    <label for="id_user_receive">Destinataire :</label>
       			<input type="text" name="id_user_receive" id="id_user_receive" />
       			<input type="submit" value="Envoyer" />
			<?= form_close(); ?>
    	</div>
