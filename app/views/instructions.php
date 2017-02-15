<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="container">
	<h2 class="page-header">Instructions</h2>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#view">View data</a></li>
    <li><a data-toggle="tab" href="#add">Add data</a></li>
    <li><a data-toggle="tab" href="#edit">Edit data</a></li>
    <li><a data-toggle="tab" href="#delete">Delete data</a></li>
  </ul>

  <div class="tab-content">

    <div id="view" class="tab-pane fade in active">
      <h3>Viewing data</h3>

      <p>All the existing data can be viewed in Folder List button on the side menu.</p>

      <ol>
        <li><b>Säbämestari</b></li>
          <p>All created sections for Säbämestari can be viewed under Säbämestari title.</p>
        <li><b>Pistemestari</b></li>
          <p>All created sections for Pistemestari can be viewed under Pistemestari.</p>
    </div>

    <div id="add" class="tab-pane">
      <h3>Add data</h3>
        <ol>
          <li><b>Add exercise collection</b></li>
            <br />
            <img src="app/style/img/sabasection.png">
            <br />
          <li><b>Add exercise</b></li>
            <br />
            <img src="app/style/img/sabacards.png">
            <br />
            <img src="app/style/img/sabacards2.png">
            <br />
        </ol>

    </div>

    <div id="edit" class="tab-pane">
      <h3>Edit data</h3>
      <br />
        <img src="app/style/img/edit.png">
      <br />
    </div>


    <div id="delete" class="tab-pane">
      <h3>Delete data</h3>
      <br />
        <img src="app/style/img/deletepng.png">
      <br />
    </div>

  </div>

</div>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>