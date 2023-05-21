<?php require 'header.inc.php'; ?>

<main>

	<div>		
			
		<h2>CONNECTEZ-VOUS</h2>				

		<form id="connexion" action="../index.php" method="post">
		
			<div class="connexionInformations">
				<label for="login">Votre pseudo *</label>
				<input type="text" name="login" id="login" value="" />
			</div>

			<div class="connexionInformations">
				<label for="password">Votre mot de passe *</label>
				<input type="text" name="password" id="password" value="" />
			</div>

			<div id="required">				
				<p><strong>* Informations requises</strong></p>
			</div>
			
			<div><input type="submit" name="send" class="button" value="Envoyer" /></div>

		</form>
				
	</div>

</main>	

<?php require 'footer.inc.php'; ?>
