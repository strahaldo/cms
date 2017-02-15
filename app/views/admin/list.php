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


<div>
  <h2>Admin</h2>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#sabaCards">Säbämesteri Cards</a></li>
    <li><a data-toggle="tab" href="#pisteCards">Pistemestari Cards</a></li>
    <li><a data-toggle="tab" href="#sabaSec">Säbämestari Sections</a></li>
    <li><a data-toggle="tab" href="#pisteSec">Pistemestari Sections</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="sabaCards" class="tab-pane fade in active">
    <!-- Sabamestari Cards -->
      <?php if (empty($cards)): ?>
       <h3 class="page-header">Säbämesteri Cards
        <a href="<?php echo BASE_URL; ?>admin/add.php"><button type="button" class="btn btn-outline btn-primary pull-right">Add Säbämestari card</button>
        <p><center>No cards at the moment.<center></p>
      <?php else: ?>
    
    <div class="col-lg-8">
        <table id="cardsTable" class="table table-striped table-bordered table-hover">
          <h3 class="page-header">Säbämesteri Cards
          <a href="<?php echo BASE_URL; ?>admin/add.php"><button type="button" class="btn btn-outline btn-primary pull-right">Add Säbämestari card</button>
          </a>
          </h3>
    
          <thead>
            <tr>
              <th class="col-sm-2">Title</th>
              <th class="col-sm-1">Part</th>
              <th class="col-sm-1">Section</th>
              <th class="col-sm-1">Actions</th>
            </tr>
          </thead>
          <tbody>
                    <?php foreach($cards as $card): ?>
                      <tr>
                        <td><?php echo escape($card['title']); ?>
                        <?php foreach($s_images as $image): ?>
                        <?php if($image['c_id'] != $card['c_id']): ?>
                          
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </td>
                        <td><?php echo escape($card['part']); ?></td>
                        <td><?php echo escape($card['s_id']); ?></td>
                        <td>
                        <div class = "btn-group">
                        <a href="<?php echo BASE_URL ?>admin/edit.php?id=<?php echo escape($card['c_id']); ?>" class="btn btn-success btn-xs" role="button">Edit</a>
                        <a href="#" data-target="#confirm-delete" data-toggle="modal" data-href="<?php echo BASE_URL ?>admin/deleteCard.php?id=<?php echo escape($card['c_id']); ?>"class="btn btn-danger btn-xs" role="button">Delete</a>
                        </div>
                        <a href="<?php echo BASE_URL ?>admin/addSabaImage.php?id=<?php echo escape($card['c_id']); ?>" class="btn btn-info btn-xs" role="button">Image</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
          </tbody>
        </table>
    </div>
      <?php endif; ?>
    <!-- END -->
    </div>
    <div id="pisteCards" class="tab-pane fade">
    <!-- Pistemestari Cards -->
      <?php if (empty($piste_cards)): ?>
          <h3 class="page-header">Pistemestari Cards
          <a href="<?php echo BASE_URL; ?>admin/addPisteCard.php"><button type="button" class="btn btn-outline btn-primary pull-right">Add Pistemestari card</button>
        <p><center>No cards at the moment.<center></p>
      <?php else: ?>
    
    <div class="col-lg-8">
        <table id="cardsTable" class="table table-striped table-bordered table-hover">
          <h3 class="page-header">Pistemestari Cards
          <a href="<?php echo BASE_URL; ?>admin/addPisteCard.php"><button type="button" class="btn btn-outline btn-primary pull-right">Add Pistemestari card</button>
          </a>
          </h3>
          <thead>
            <tr>
              <th class="col-sm-2">Title</th>
              <th class="col-sm-1">Part</th>
              <th class="col-sm-1">Section</th>
              <th class="col-sm-1">Actions</th>
            </tr>
          </thead>
          <tbody>
                    <?php foreach($piste_cards as $piste_card): ?>
                      <tr>
                        <td><?php echo escape($piste_card['title']); ?></td>
                        <td><?php echo escape($piste_card['part']); ?></td>
                        <td><?php echo escape($piste_card['p_id']); ?></td>
                        <td>
                        <div class = "btn-group">
                        <a href="<?php echo BASE_URL ?>admin/editPisteCard.php?id=<?php echo escape($piste_card['c_id']); ?>" class="btn btn-success btn-xs" role="button">Edit</a>
                        <a href="#" data-target="#confirm-delete" data-toggle="modal" data-href="<?php echo BASE_URL ?>admin/deletePisteCard.php?id=<?php echo escape($piste_card['c_id']); ?>"class="btn btn-danger btn-xs" role="button">Delete</a>
                        </div>
                        <a href="<?php echo BASE_URL ?>admin/addPisteImage.php?id=<?php echo escape($piste_card['c_id']); ?>" class="btn btn-info btn-xs" role="button">Image</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
          </tbody>
        </table>
    </div>
      <?php endif; ?>
    <!-- END -->
    </div>
    <div id="sabaSec" class="tab-pane fade">
      <?php if (empty($sec)): ?>
        <h3 class="page-header">Säbämestari Sections
        <a href="<?php echo BASE_URL; ?>admin/addSabaSec.php"><button type="button" class="btn btn-outline btn-primary pull-right">Add a new section</button></a></h3>
        <p><center>No sections at the moment.</center></p>
      <?php else: ?>
      <div class="col-lg-8">
        <table class="table table-striped table-bordered table-hover">
          <h3 class="page-header">Säbämestari Sections
          <a href="<?php echo BASE_URL; ?>admin/addSabaSec.php"><button type="button" class="btn btn-outline btn-primary pull-right">Add a new section</button></a></h3>
          <thead>
            <tr>
              <th class="col-sm-5">Title</th>
              <th class="col-sm-1">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($sec as $s): ?>
              <tr>
                <td><?php echo escape($s['title']); ?></td>
                <td>
                <div class = "btn-group">
                <a href="<?php echo BASE_URL ?>admin/editSabaSec.php?s_id=<?php echo escape($s['s_id']); ?>" class="btn btn-success btn-xs" role="button">Edit</a>
                <a href="#" data-target="#confirm-delete" data-toggle="modal" data-href="<?php echo BASE_URL ?>admin/deleteSabaSec.php?s_id=<?php echo escape($s['s_id']); ?>"class="btn btn-danger btn-xs" role="button">Delete</a>
                </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <?php endif; ?>
    </div>

    <div id="pisteSec" class="tab-pane fade">
    <?php if (empty($pSec)): ?>
      <h3 class="page-header">Pistemestari Sections
      <a href="<?php echo BASE_URL; ?>admin/addPisteSec.php"><button type="button" class="btn btn-outline btn-primary pull-right">Add a new section</button></a></h3>
      <p><center>No sections at the moment.</center></p>
    <?php else: ?>
    <div class="col-lg-8">
    <table class="table table-striped table-bordered table-hover">

      <h3 class="page-header">Pistemestari Sections
      <a href="<?php echo BASE_URL; ?>admin/addPisteSec.php"><button type="button" class="btn btn-outline btn-primary pull-right">Add a new section</button></a></h3>
      <thead>
        <tr>
          <th class="col-sm-5">Title</th>
          <th class="col-sm-1">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($pSec as $p): ?>
          <tr>
            <td><?php echo escape($p['title']); ?></td>
            <td>
            <div class = "btn-group">
            <a href="<?php echo BASE_URL; ?>admin/editPisteSec.php?p_id=<?php echo escape($p['p_id']); ?>" class="btn btn-success btn-xs" role="button">Edit</a>
            <a href="#" data-target="#confirm-delete" data-toggle="modal" data-href="<?php echo BASE_URL; ?>admin/deletePisteSec.php?p_id=<?php echo escape($p['p_id']); ?>" class="btn btn-danger btn-xs" role="button">Delete</a>
            </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    </div>
    <?php endif; ?>
    </div>

  </div>

</div>




<?php require VIEW_ROOT . '/templates/footer.php'; ?>