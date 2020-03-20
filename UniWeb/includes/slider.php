<div class="main-top">
	<?php
	$slider = mysqli_query($connection, "SELECT * FROM `slider_img`");
	?>
	<?php 
		while ( $slider_img = mysqli_fetch_assoc($slider) ) 
		{
			?>
			<div class="main-top__slide">
				<img src="img/Slider/<?php echo $slider_img['image'] ?>" alt="Слайдер №<?php echo $slider_img['id'] ?>" />
			</div>
			<?php
		}
	?>
</div>

