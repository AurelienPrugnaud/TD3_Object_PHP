<h2 class="text-center mb-3">Liste des matières</h2>
<?php if(count($tabSubjects) > 0): ?>
	<table class="table mb-3 text-center">
		<thead class="table-dark">
		<td>Nom</td>
		<td>Durée</td>
		<td>Description</td>
		<td>Note</td>
		<td>Note avec coefficient</td>
		<td>Actions</td>
		</thead>
		<?php foreach($tabSubjects as $index => $subject)  : ?>
			<tr>
				<td><?php echo $subject->getName() ?></td>
				<td><?php echo $subject->getDuration() ?> heures</td>
				<td><?php echo $subject->getDescription() ?></td>
				<td><?php echo $subject->getNote() ?></td>
				<td><?php echo $subject->coefficientCalculation($subject->getNote())?></td>
				<td>
					<a href="/subjectModify/<?php echo $index ?>" title="modifier" class="btn btn-warning me-3">Modifier</a>
					<a href="/subjectDelete/<?php echo $index ?>" title="supprimer" class="btn btn-danger">Supprimer</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
<?php else: ?>
	<p>Aucun résultat trouvé pour les matières.</p>
<?php endif; ?>