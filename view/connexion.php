<?php require '/view/header.inc.php'; ?>

<main id="connexion">

	<div>		
			
		<h2>CONNECTEZ-VOUS</h2>				

		<form id="userConnexion" action="../index.php" method="post">
		
			<div class="connexionInformations">
				<label for="email">Votre email *</label>
				<input type="email" name="email" id="email" value="" />
			</div>

			<div class="connexionInformations" id="password">
				<label for="password">Votre mot de passe *</label>
				<input type="password" name="password" id="password" value="" />
			</div>

			<div id="required">				
				<p><strong>* Informations requises</strong></p>
			</div>
			
			<div class="send"><input type="submit" name="send" class="button" value="Envoyer" /></div>

		</form>
				
	</div>

</main>	

<?php require '/view/footer.inc.php'; ?>
