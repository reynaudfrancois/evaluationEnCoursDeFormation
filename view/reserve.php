<?php require 'header.inc.php'; ?>

<main id="reserve">

	<div>		
			
		<h2>RESERVATION</h2>				

		<form id="reserveForm" action="../index.php" method="post">
		
			<div class="reserveInformations">
				<label for="name">NOM - Prénom *</label>
				<input type="text" name="name" id="name" value="" />
			</div>

			<div class="reserveInformations">
				<label for="number">Nombre de personnes *</label>
				<input type="number" name="number" id="number" value="" />
			</div>

			<div class="reserveInformations">
				<label for="date">Date de réservation *</label>
				<input type="date" name="date" id="date" value="" />
			</div>

			<div class="reserveInformations">
				<label for="time">Heure de réservation *</label>
				<input type="time" name="time" id="time" value="" />
			</div>

			<div class="reserveInformations">
				<label for="content">Allergies éventuelles</label><br>
				<textarea name="content" id="content"></textarea>
			</div>

			<div id="required">				
				<p><strong>* Ces informations sont requises.</strong></p>
			</div>
			
			<div class="send"><input type="submit" name="send" class="button" value="Envoyer" /></div>

		</form>
				
	</div>

</main>	

<?php require 'footer.inc.php'; ?>