<?php require VIEW_ROOT . '/templates/header.php'; ?>  <!--Template header  -->
	
<div class="col-lg-6">
<h3 class="page-header">Säbämestari</h3>
	<?php if (empty($sabaSec)): ?>
		<p><center>Sorry, no sections at the moment.<center></p>
	<?php else:	?>
		<ul class="list-group">
			<!-- Loop for folder tables -->
				<!-- Loop for specific folders -->

			<?php foreach ($sabaSec as $page): ?> <!-- print on screen every folder -->
					<a class="list-group-item" href="<?php echo BASE_URL;?>sabaPage.php?s_id=<?php echo $page['s_id']; ?>"><?php echo $page['title']; ?>
						<span class="badge"><?php echo $page['s_id']; ?></span>
					</a>			
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>


<div class="col-lg-6">	
<h3 class="page-header">Pistemestari</h3>
	<?php if (empty($pisteSec)): ?>
		<p><center>Sorry, no sections at the moment.<center></p>
	<?php else:	?>
		<ul class="list-group">
			<!-- Loop for folder tables -->
				<!-- Loop for specific folders -->

			<?php foreach ($pisteSec as $sec): ?> <!-- print on screen every folder -->
					<a class="list-group-item" href="<?php echo BASE_URL;?>pistePage.php?p_id=<?php echo $sec['p_id']; ?>"><?php echo $sec['title']; ?>
						<span class="badge"><?php echo $sec['p_id']; ?></span>
					</a>			
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?> <!--Template footer  -->