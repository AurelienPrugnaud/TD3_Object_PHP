<div class="card shadow col p-3 m-3">
	<h2 class="text-center">Formulaire d'ajout d'une matière</h2>
	<form class="" action="/subjectAdd/" method="POST">
		<p>
			<label for="name" class="form-label">Nom</label>
			<input type="text" id="name" name="name" class="form-control" value=""/>
		</p>
		<p>
			<label for="description" class="form-label">Description</label>
			<textarea id="description" name="description" class="form-control"/></textarea>
		</p>
		<p>
			<label for="duration" class="form-label">Durée</label>
			<input type="number" id="duration" name="duration" class="form-control" value=""/>
		</p>
		<p>
			<label for="coefficient" class="form-label">Coefficient</label>
			<input type="number" id="coefficient" name="coefficient" class="form-control" value=""/>
		</p>
		<p>
			<input type="submit" class="btn btn-dark" name="validate" value="valider"/>
		</p>
	</form>
</div>