<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <h2 class="page-header">Delete page</h2>

<?php if(isset($_GET['id'])): ?>
  <h2>Are you sure you want to delete <b><?php echo escape($card['title']); ?></b></h2>

  <a href="<?php echo BASE_URL ?>admin/deleteCard.php?id=<?php echo escape($card['c_id']); ?>">YES</a>
  <a href="<?php echo BASE_URL ?>admin/list.php">NO</a>

<?php elseif(isset($_GET['s_id'])): ?>
  <h2>Are you sure you want to delete <b><?php echo escape($page['title']); ?></b></h2>

  <a href="<?php echo BASE_URL ?>admin/deleteSec.php?s_id=<?php echo escape($page['s_id']); ?>">YES</a>
  <a href="<?php echo BASE_URL ?>admin/list.php">NO</a>

<?php endif; ?>


<?php elseif(isset($_GET['j_id'])): ?>
  <h2>Are you sure you want to delete <b><?php echo escape($page['title']); ?></b></h2>

  <a href="<?php echo BASE_URL ?>admin/deleteJohdaCard.php?j_id=<?php echo escape($page['j_id']); ?>">YES</a>
  <a href="<?php echo BASE_URL ?>admin/list.php">NO</a>

<?php endif; ?>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>