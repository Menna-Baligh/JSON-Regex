<?php
if(isset($_SESSION['success'])):?>
    <div class="alert alert-success">
        <?= $_SESSION['success']?>
    </div>
<?php endif ; unset($_SESSION['success'])?>