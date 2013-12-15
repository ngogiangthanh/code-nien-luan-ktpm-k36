<?php
$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);
?>
<ul class="pagination pagination-centered">
    <?php echo $presenter->render(); ?>
</ul>


