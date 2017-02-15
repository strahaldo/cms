<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <h2 class="page-header">Edit <?php echo escape($s['title']); ?></h2>
  <div class="col-md-3">
  <form action="<?php echo BASE_URL; ?>admin/editPisteSec.php" enctype="multipart/form-data" method="POST" autocomplete="off">

  <div class="form-group">
  <label for="title">Title</label>
    <input class="form-control"type="text" name="title" id="title" value="<?php echo escape($s['title']); ?>">
  </div>
  <div class="col-md-6">
    <label>Current logo:<label>
    <img width="100px" height="100px" src="<?php echo escape($s['image_dir']); ?>">
  </div>

  <div class="col-md-10">
      <div class="form-group">
          <label>Select logo to upload:</label>
          <input type="file" name="files" multiple />
      </div>
  </div>
  <input type="hidden" name="p_id" value="<?php echo escape($s['p_id']); ?>">

  <div class="col-md-10">
    <button type="submit" class="btn btn-success">Edit</button>
  </div>
    
  </form>
</div>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>