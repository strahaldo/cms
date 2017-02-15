<?php require VIEW_ROOT . '/templates/header.php'; ?>
    
<div class="page-header">
    <h2><?php echo escape($page['title']); ?></h2>
    <a type="button" class="btn btn-default" href="<?php echo BASE_URL ?>johdanto.php">Back</a>
</div>


      <?php if (empty($cards)): ?>
        <p><center>Sorry, no cards at the moment.<center></p>
      <?php else: ?>
      <div class="row">
        <ul>
          <!-- Loop for folder tables -->
          <!-- Loop for specific folders -->

        <?php foreach ($cards as $card): ?> <!-- print on screen every folder -->

          <?php if($page['j_id'] == $card['j_id']) { ?>

         
              <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?php echo BASE_URL;?>johdaCard.php?j_id=<?php echo $page['j_id']; ?>&c_id=<?php echo $card['c_id']; ?>"><?php echo $card['title']; ?></a>
                        </div>
                    </div>
                </div>

          <?php } ?>

      <?php endforeach; ?>

      </ul>
      </div>
      <?php endif; ?>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>