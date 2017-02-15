<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h2 class="page-header">Add section</h2>
<form action="<?php echo BASE_URL; ?>admin/addJohdaSec.php" enctype="multipart/form-data" method="POST" autocomplete="off">

<div class="col-md-4">
  <div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" id="title">
  </div>

  <div class="form-group">
    <label for="body">Body (optional)</label>
    <textarea class="form-control" type="text" name="body" id="body"></textarea>
  </div>
</div>

  <div class="col-md-4">
      <div class="form-group">
          <label for="icon">Type of section:</label>
          <select class="form-control" name="icon" id="icon">
             <option value="rule">rule</option>
             <option value="card">card</option>
          </select>
      </div>
  </div>

<div class="col-md-12">
  <button type="submit" class="btn btn-success">Add</button>
</div>

</form>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>