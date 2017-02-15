<?php require VIEW_ROOT . '/templates/header.php'; ?>

<!-- DELETE MODAL -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
          </div>
          <div class="modal-body">
          </div>
            
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger btn-ok" >Delete</a>
          </div>
        </div>
    </div>
</div>
<!-- END -->

<h2 class="page-header">Edit images</h2>

<form role="form" action="<?php echo BASE_URL; ?>admin/addJohdaImage.php" enctype="multipart/form-data" method="POST" autocomplete="off">

<div class="col-md-4">
    <div class="form-group">
        <label>Select images to upload:</label>
        <input type="file" name="file[]" multiple="multiple" />
    </div>
</div>

<input type="hidden" name="c_id" id="c_id" value="<?php echo $c_id; ?>">

<div class="col-md-12">
    <button type="submit" class="btn btn-success">Add</button>
</div>
</form>

<div class="col-lg-12">
  <?php if (empty($images)): ?>
    <h3 class="page-header">No images</h3>
  <?php else: ?>
    <h3 class="page-header">Kuvat</h3>

      <?php foreach ($images as $img): ?>
        <div class="col-md-4">
        <center><a href="#" data-target="#confirm-delete" data-toggle="modal" data-href="<?php echo BASE_URL ?>admin/deleteJohdaImage.php?id=<?php echo escape($img['c_id']); ?>&i_id=<?php echo escape($img['image_id']);  ?>"class="btn btn-danger btn-xs" role="button">Delete <?php echo escape($img['image_name']) ?></a></center>
        <br />
        <img width="100%" src="<?php echo escape($img['image_dir']); ?>">
        </div>
      <?php endforeach; ?>

  <?php endif; ?>

</div>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>