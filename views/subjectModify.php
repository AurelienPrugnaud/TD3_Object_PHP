<div class="card shadow col p-3 m-3">
	<h2 class="text-center">Formulaire de modification d'une matière</h2>
	<form class="" action="/subjectModify/<?php echo $tabParamUrl[2]?>" method="POST">
		<p>
			<label for="name" class="form-label">Nom</label>
			<input type="text" id="name" name="name" class="form-control"
				   value="<?php echo $subject['name']?>"/>
		</p>
		<p>
			<label for="description" class="form-label">Description</label>
			<textarea id="description" name="description" class="form-control"/><?php echo $subject['description'] ?></textarea>
		</p>
		<p>
			<label for="duration" class="form-label">Durée</label>
			<input type="number" id="duration" name="duration" class="form-control"
				   value="<?php echo $subject['duration'] ?>"/>
		</p>
		<p>
			<label for="coefficient" class="form-label">Coefficient</label>
			<input type="number" id="coefficient" name="coefficient" class="form-control"
				   value="<?php echo $subject['coefficient'] ?>"/>
		</p>
		<p>
			<input type="hidden" name="id" id="id" value="<?php echo $subject['id']; ?>"/>
			<input type="submit" class="btn btn-dark" name="validate" value="valider"/>
		</p>
	</form>
</div>