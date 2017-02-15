<?php if(empty($cards)): ?>
  <p><center>No cards at the moment.</center></p>
<?php else: ?>
<?php foreach($cards as $card): ?>
  <a href="<?php echo BASE_URL ?>admin/singleCard.php?id=<?php echo escape($card['c_id']); ?>"></a>
<?php endforeach; ?>

<?php endif; ?>








