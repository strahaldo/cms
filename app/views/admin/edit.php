<?php require VIEW_ROOT . '/templates/header.php'; ?>


<h2 class="page-header">Edit card</h2>

<form role="form" action="<?php echo BASE_URL; ?>admin/edit.php" enctype="multipart/form-data" method="POST" autocomplete="off">
<div class="col-md-4">
	<div class="form-group">
    <label for ="title">Title</label>
		<input class="form-control" type="text" name="title" id="title" value="<?php echo escape($card['title']); ?>">
	</div>

	<div class="form-group">
    <label for ="s_id">Section</label>
      <select class="form-control" name="s_id" id="s_id">
      <?php foreach ($sections as $section): ?>
          <option>
            <?php echo $section['s_id']; ?>
            <?php echo $section['title']; ?>
          </option>
      <?php endforeach; ?>
      </select>
  </div>

  <div class="form-group">
    <label for ="label">Part</label>
    <select class="form-control" name="part" id="part">
      <option value="Säbämestari">Säbämestari</option>
      <option value="Pistemestari">Pistemestari</option>
    </select>
  </div>
  <div class="form-group">
        <label for ="diff">Difficulty</label>
        <br>
        <input type="radio" name="diff" id="diff" value="Easy">Easy
        <br>
        <input type="radio" name="diff" id="diff" value="Medium">Medium
        <br>
        <input type="radio" name="diff" id="diff" value="Hard">Hard
        <br>
    </div>


    <div class="col-md-4">
    <div class="form-group">
        <label>Replace current image:</label>
        <input type="file" name="file" multiple="multiple" />
    </div>
    <img width="100%" src="<?php echo escape($card['image_dir']); ?>">
    </div>

</div>
<div class="col-md-4">
		<div class="form-group">
     <label for ="body">Variations</label>
		<textarea class="form-control" name="variations" id="variations" rows="8"><?php echo escape($card['variations']); ?></textarea>
		</div>
</div>
<div class="col-md-4">
		<div class="form-group">
     <label for ="body">Body</label>
		<textarea class="form-control" name="body" id="body" rows="19"><?php echo escape($card['body']); ?></textarea>
		</div>
</div>

<div class="col-md-12">
		<input type="hidden" name="c_id" value="<?php echo escape($card['c_id']); ?>">
    <br />
    <br />
		<button type="submit" class="btn btn-success">Edit</button>
</div>
</form>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>