    		<?= form_open_multipart('c_message/sendOne'); ?>
    			<label for="title_message">Titre du message :</label>
       			<input type="text" name="title_message" id="title_message" />
			    <label for="message">Message :</label><br />
			    <textarea name="message" id="message"></textarea>
			    <label for="username_receive">Destinataire :</label>
       			<input type="text" name="username_receive" id="username_receive" />
       			<input type="submit" value="Envoyer" />
			<?= form_close(); ?>