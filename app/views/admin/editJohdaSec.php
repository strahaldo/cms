<?php require VIEW_ROOT . '/templates/header.php'; ?>


<h2 class="page-header">Edit section</h2>

<form role="form" action="<?php echo BASE_URL; ?>admin/editJohdaSec.php" method="POST" autocomplete="off">
<div class="col-md-4">
  <div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" id="title" value="<?php echo escape($sec['title']); ?>">
  </div>
  <div class="form-group">
    <label for ="icon">Type of section</label>
      <select class="form-control" name="icon" id="icon">
         <option value="<?php echo escape($sec['icon']);  ?>"><?php echo escape($sec['icon']);?></option>
         <option value="rule">rule</option>
         <option value="card">card</option>
      </select>
  </div>
</div>
<div class="col-md-4">
    <div class="form-group">
     <label for ="body">Body</label>
    <textarea class="form-control" name="body" id="body" rows="19"><?php echo $sec['body']; ?></textarea>
    </div>
</div>


<div class="col-md-12">
    <input type="hidden" name="j_id" id="j_id" value="<?php echo escape($sec['j_id']); ?>">
    <button type="submit" class="btn btn-success">Edit</button>
</div>
</form>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>