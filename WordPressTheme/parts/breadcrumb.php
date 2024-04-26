<div class="breadcrumb breadcrumb-layout <?php if(is_404()){ echo 'breadcrumb--white'; } ?>">
  <div class="inner">
    <?php
    if (function_exists('bcn_display')) {
        bcn_display();
    }
    ?>
  </div>
</div>