<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h2 class="page-header">Add card</h2>

<form role="form" action="<?php echo BASE_URL; ?>admin/addJohdaCard.php" enctype="multipart/form-data" method="POST" autocomplete="off">
<div class="col-md-4">
    <div class="form-group">
      <label for ="title">Title</label>
      <input class="form-control" type="text" name="title" id="title">
    </div>

  <div class="form-group">
    <label for ="part">Part</label>
      <select class="form-control" name="part" id="part">
          <option>Vinkit valmentajalle - Säbämestari</option>
          <option>Kerhotunnin organisointi - Säbämestari</option>
          <option>Salibandyn perustekniikka - Säbämestari</option>
          <option>Pistemestari-terveysliikuntatunti</option>
          <option>Pistemestari-kuntoliikuntatunti</option>
          <option>Pistemestari+turnauskaaviot</option>
      </select>
  </div>
</div>

<div class="col-md-4">
    <div class="form-group">
      <label for ="body">Body</label>
      <textarea class="form-control" name="body" id="body" rows="19"></textarea>
    </div>
</div>

<div class="col-md-12">
    <button type="submit" class="btn btn-success">Add</button>
</div>
</form>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>