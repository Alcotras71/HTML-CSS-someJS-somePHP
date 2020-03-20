<header class="header">
	<div class="container">
		<div class="header__top">
			<div class="header__tel">
				<a href="tel:+74872311345">8 (4872) 31-13-45</a>
			</div>
			<div class="header__buttons">
					<a href="#">Оставить заявку</a>
					<a href="#">Отправить резюме</a>
			</div>
		</div>
	</div>
	<div class="header__bottom">
		<ul class="menu-top__left">
			<li><a class="mainmenu style-a" href="/"><?php echo $config['menu']['0']; ?></a></li>
			<li class="dropdown">
				<a href="staff.php"><button class="dropbtn"><?php echo $config['menu']['pickup']['0']; ?></button></a><!-- Понимаю, что нельзя вкладывать блочный элемент в строчный. Пытался найти иное решение, по итогу не нашлось. В стилях сделал элемент "а" блочным. -->
					<div class="dropdown-content">
						<a class="dropdown-content__link" href="#"><?php echo $config['menu']['pickup']['1']; ?></a>
						<a class="dropdown-content__link" href="#"><?php echo $config['menu']['pickup']['2']; ?></a>
						<a class="dropdown-content__link" href="#"><?php echo $config['menu']['pickup']['3']; ?></a>
						<a class="dropdown-content__link" href="#"><?php echo $config['menu']['pickup']['4']; ?></a>
					</div>
			</li>
			<li><a class="style-a" href="#"><?php echo $config['menu']['1']; ?></a></li>
		</ul>
		<div class="menu-top__logo"><a href="/"><img src="img/Header/logo.png" alt="Логотип" /></a></div>
		<ul class="menu-top__right">
			<li><a href="#"><?php echo $config['menu']['2']; ?></a></li>
			<li><a href="#"><?php echo $config['menu']['3']; ?></a></li>
			<li><a class="contacts" href="#"><?php echo $config['menu']['4']; ?></a></li>
		</ul>
	</div>
</header>
