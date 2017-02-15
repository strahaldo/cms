
<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h2 class="page-header">Add folder</h2>
<div class="col-md-4">
<form action="<?php echo BASE_URL; ?>admin/addSabaSec.php" enctype="multipart/form-data" method="POST" autocomplete="off">


  <div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" id="title">
  </div>

  <div class="col-md-4">
      <div class="form-group">
          <label>Select images to upload:</label>
          <input type="file" name="files" multiple />
      </div>
  </div>

  <button type="submit" class="btn btn-success">Add</button>

</form>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>