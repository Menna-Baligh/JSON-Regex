<?php if (isset($_SESSION['search'])): ?>
    <h3>Search Results</h3>
    <?php if (empty($_SESSION['search'])): ?>
        <p>No results found</p>
    <?php else: ?>
        <?php foreach ($_SESSION['search'] as $contact): ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($contact['name']) ?></h5>
                    <p class="card-text"><?= htmlspecialchars($contact['email']) ?></p>
                    <p class="card-text"><?= htmlspecialchars($contact['phone']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['search']); ?>
    <?php endif; ?>
<?php endif; ?>