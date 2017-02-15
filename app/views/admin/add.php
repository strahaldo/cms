<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h2 class="page-header">Add card</h2>

<form role="form" action="<?php echo BASE_URL; ?>admin/add.php" enctype="multipart/form-data" method="POST" autocomplete="off">
<div class="row">
<div class="col-md-4">
	<div class="form-group">
    	<label for ="title">Title</label>
     	<input class="form-control" type="text" name="title" id="title">
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
        <label for ="diff">Difficulty</label>
        <br>
        <input type="radio" name="diff" id="diff" value="Easy">Easy
        <br>
        <input type="radio" name="diff" id="diff" value="Medium">Medium
        <br>
        <input type="radio" name="diff" id="diff" value="Hard">Hard
        <br>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label>Select images to upload:</label>
        <input type="file" name="files" multiple />
    </div>
</div>
</div>
<div class="column">
<div class="col-md-4">
        <div class="form-group">
            <label for ="variations">Variations</label>
            <textarea class="form-control" name="variations" id="variations" rows="8"></textarea>
        </div>
</div>
</div>
<div class="column">
<div class="col-md-4">
		<div class="form-group">
            <label for ="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="19"></textarea>
        </div>
</div>
</div>

<div class="row">
<div class="col-md-12">
    <button type="submit" class="btn btn-success">Add</button>
</div>
</div>
</form>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>