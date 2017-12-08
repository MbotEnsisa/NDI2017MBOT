<?php include 'header.php';?>

	<h2>Signaler un danger/Problème</h2>
	<form method="post" action="Resume.php">
		<p><i>Complétez  ci-dessous. Les champs marqués par </i><em>*</em>sont<em> obligatoires.</em></p>
		<fieldset>
			   
				<label for="Types">Types de problème<em>*</em></label>

				<select id="Ty" name="Types">
				<option value="Accident">Accident</option>

				<option value="Ralentissement">Ralentissement</option>

				<option value="Pluie de Météorite">Pluie de Météorite</option>

				<option value="Travaux">Travaux</option>

				</select><br>

				 <label for="Lieu">Lieu<em>*</em> </label>

     			<input id="L" name="a" placeholder="Lieu" autofocus="" required=""><br>

     			<label for="Heures">Heure de constatation<em>*</em></label>

     			<input id="H" name="Heures" placeholder="12 H 50" autofocus="" required=""><br>

			 	<label for="comments">

			 	Informations complémentaires</label>

      			<textarea id="com" name="comments"></textarea>
		</fieldset>
		<p><input type="submit" value="Soumettre"></p>
	</form>

<?php include 'footer.php';?>
