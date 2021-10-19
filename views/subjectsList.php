<h2 class="text-center mb-3">Liste des matières</h2>

<a href="/subjectAdd/" title="ajouter" class="btn btn-outline-dark mb-3">Ajouter</a>
<?php
    if(is_array($tabSubjects) AND count($tabSubjects)>0):
?>
	<table class="table mb-3 text-center">
		<thead class="table-dark">
		<td>Nom</td>
        <td>Actions</td>
		</thead>
		<?php foreach($tabSubjects as $subject)  : ?>
			<tr>
				<td><?php echo $subject->getName(); ?></td>
				<td>
                    <a href="/subjectDetail/<?php echo $subject->getId() ?>" title="detail" class="btn btn-outline-secondary">Detail</a>
					<a href="/subjectModify/<?php echo$subject->getId() ?>" title="modifier" class="btn btn-outline-warning">Modifier</a>
                    <a href="/subjectDelete/<?php echo $subject->getId() ?>" title="supprimer" class="btn btn-outline-danger">Supprimer</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
<?php else: ?>
	<p>Aucun résultat trouvé pour les matières.</p>
<?php endif; ?>