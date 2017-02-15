<?php require VIEW_ROOT . '/templates/header.php'; ?>  <!--Template header  -->


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

  
<div class="col-lg-6">
<h3 class="page-header">Ohjeita ja vinkkejä
  <a href="<?php echo BASE_URL; ?>admin/addJohdaCard.php"><button type="button" class="btn btn-outline btn-primary pull-right">Add</button></a>
</h3> 
  <?php if (empty($cards)): ?>
    <p><center>Sorry, nothing at the moment.<center></p>
  <?php else: ?>
      <!-- Loop for folder tables -->
        <!-- Loop for specific folders -->
  <div class="col-lg-8">
    <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th class="col-sm-2">Title</th>
                <th class="col-sm-1">Part</th>
                <th class="col-sm-1">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($cards as $card): ?> <!-- print on screen every folder -->
            <tr>
            <td><?php echo escape($card['title']); ?></td>
            <td><?php echo escape($card['part']); ?></td>
            <td>
            <div class = "btn-group">
            <a href="<?php echo BASE_URL ?>admin/editJohdaCard.php?id=<?php echo escape($card['c_id']); ?>" class="btn  btn-success btn-xs" role="button">Edit</a>
            <a href="#" data-target="#confirm-delete" data-toggle="modal" data-href="<?php echo BASE_URL ?>admin/deleteJohdaCard.php?id=<?php echo escape($card['c_id']); ?>"class="btn btn-danger btn-xs" role="button"> Delete</a>
            </div>
            </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
    </table>
    <?php endif; ?>
  </div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?> <!--Template footer  -->