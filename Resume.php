<?php include 'header.php';?>

<div id=Resume>
	<div class="Re">
	<?php
		echo "Type d'événement : ".$_POST['Types'];
		?>
	</div>
	<div class="Re">
<?php
		echo "Lieu : ".$_POST['a'];
		?>
	</div>
	<div class="Re">
		<?php echo " Heures : ".$_POST['Heures'];
		?>
	</div>
	<div class="Re">
		<?php echo " Informations Complémentaires : ".$_POST['comments'];
		 ?>
		</div>

	
	</div>

	<?php include 'footer.php';?>