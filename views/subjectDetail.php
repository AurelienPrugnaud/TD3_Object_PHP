<?php if(!empty($subject)): ?>
    <div class="card shadow p-3">
        <div class="card-body">
            <h5 class="card-title"><?php echo $subject['name']; ?></h5>
            <p class="card-text"><?php echo $subject['description']; ?></p>
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item">Durée : <?php echo $subject['duration']; ?> heures</li>
                <li class="list-group-item">Coeficient : <?php echo $subject['coefficient']; ?></li>
            </ul>
        </div>
    </div>
<?php endif; ?>