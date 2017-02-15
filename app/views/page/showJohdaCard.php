<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="page-header">
<h1><?php echo escape($card['title']); ?></h1>
<a type="button" class="btn btn-default" href="<?php echo BASE_URL ?>johdaPage.php?j_id=<?php echo $card['j_id']; ?>">Back</a>
</div>

<div class="col-lg-12">
  <div class="col-lg-4"><?php echo $card['body']; ?></div>
</div>

<div class="col-lg-12">
  <?php if (empty($images)): ?>
    <h3 class="page-header">No images</h3>
  <?php else: ?>
    <h3 class="page-header">Kuvat</h3>

      <?php foreach ($images as $img): ?>
        <div class="col-lg-4"><img width="100%" src="<?php echo escape($img['image_dir']); ?>"></div>
      <?php endforeach; ?>

  <?php endif; ?>

</div>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>