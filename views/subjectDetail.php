<?php if(!empty($subjects)): ?>
    <div class="card shadow p-3">
        <div class="card-body">
            <h5 class="card-title"><?php echo $subjects->getName(); ?></h5>
            <p class="card-text"><?php echo $subjects->getDescription(); ?></p>
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item">Durée : <?php echo $subjects->getDuration(); ?> heures</li>
                <li class="list-group-item">Coeficient : <?php echo $subjects->getCoefficient(); ?></li>
            </ul>
        </div>
    </div>
<?php endif; ?>