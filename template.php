<?php include 'header.php';
?>
		
		<h1 ><?php echo $h1; ?><!-- <br><div class="warning">Страница на обновлении</div> --></h1>
		<img src="/images/<?php echo $image; ?>" alt="" width='150px' height="150px" > <br>
		<span class="price">Цена <?php echo $price; ?></span>
		<div class='content_text'>
			<?php echo $content; ?>
		</div>	

<?php include 'footer.php' ?>