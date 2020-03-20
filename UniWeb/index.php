<?php
	require "includes/config.php";
?>
<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Заголовок страницы в браузере -->
		<title><?php echo $config['title']; ?></title>
		<!-- Подключаем CSS -->
		
		<!-- bxSlider CSS file -->
		<link href="slick/slick.css" rel="stylesheet" />
		<link href="slick/slick-theme.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/style.css" />
		<!-- Кодировка страницы -->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<div class="wrapper">
			<!-- Header -->
			<?php include "includes/header.php"; ?>
				<!-- Main-top -->
				<?php include "includes/slider.php"; ?>
				<!-- Main-middle -->
				<div class="main-middle">
					<div class="container container-middle">
						<div class="main-middle__wrapper">
							<div class="main-middle__left">
								<div class="main-middle__image image-left">
									<img src="img/Main-middle/left/house1.png" alt="дом" />
								</div>
								<div class="main-middle__text-block_left">
									<h2 class="main-middle__title">Постоянный персонал</h2>
									<p class="main-middle__text">Наличие в доме обслуживающего персонала - водителя, няни, гувернантки, горничной, домработницы - это вовсе не дань моде и не причуды избалованных нежданно свалившимся богатством нуворишей. Напротив, услугами сиделки или няни пользуются сегодня те, кто отлично знает цену деньгам и своему времени.  </p>
								</div>
								<div class="main-middle__button button-left"><a href="#">подробнее</a></div>
							</div>

							<div class="main-middle__right">
								<div class="main-middle__image image-right">
									<img src="img/Main-middle/right/clock1.png" alt="часы" />
								</div>
								<div class="main-middle__text-block_right">
									<h2 class="main-middle__title title-right">Временный персонал</h2>
									<p class="main-middle__text">Наличие в доме обслуживающего персонала - водителя, няни, гувернантки, горничной, домработницы - это вовсе не дань моде и не причуды избалованных нежданно свалившимся богатством нуворишей. Напротив, услугами сиделки или няни пользуются сегодня те, кто отлично знает цену деньгам и своему времени.  </p>
								</div>
								<div class="main-middle__button button-right"><a href="#">подробнее</a></div>
							</div>
						</div>
					</div>
				</div>
				<!-- Main-bottom -->
				<div class="main-bottom">
					<div class="main-bottom__top">
						<div class="main-bottom__container">
							<div class="main-bottom__photos">
								<?php
									$workers = mysqli_query($connection, "SELECT * FROM `workers_img`");
										while ( $work_img = mysqli_fetch_assoc($workers) ) 
										{
											?>
											<div class="main-bottom__image">
												<img src="img/Main-bottom/<?php echo $work_img['images']; ?>" alt="<?php echo $work_img['description']; ?>" />
											</div>
											<?php
										}
								?>
							</div>
						</div>
					</div>


					<div class="main-bottom__bottom">
						<div class="container">
							<h3 class="main-bottom__title">Заголовок</h3>
							<div class="main-bottom__text">
								<p>Наличие в доме обслуживающего персонала - водителя, няни, гувернантки, горничной, домработницы - это вовсе не дань моде и не причуды избалованных нежданно свалившимся богатством нуворишей. Напротив, услугами сиделки или няни пользуются сегодня те, кто отлично знает цену деньгам и своему времени
								Наличие в доме обслуживающего персонала - водителя, няни, гувернантки, горничной, домработницы - это вовсе не дань моде и не причуды избалованных нежданно свалившимся богатством нуворишей. Напротив, услугами сиделки или няни пользуются сегодня те, кто отлично знает цену деньгам и своему времени</p>
								<p>Наличие в доме обслуживающего персонала - водителя, няни, гувернантки, горничной, домработницы - это вовсе не дань моде и не причуды избалованных нежданно свалившимся богатством нуворишей. Напротив, услугами сиделки или няни пользуются сегодня те, кто отлично знает цену деньгам и своему времени. Люди, для которых важно не только вырастить ребенка, но и создать основу будущего благосостояния, построив свою карьеру - вот основная категорий заказчиков, которые ежедневно пользуются услугами нашей компании по подбору домашнего персонала. Заказ няни, сиделки или домработницы является благом не только для женщины, которая имеет возможность строить свою карьеру или получить, наконец, передышку от выполнения бесконечных домашних обязанностей, но и для всех остальных членов семьи, которые могут провести вместе свободный вечер или выходные. А доступные цены, которые устанавливает на свои услуги наша компания, и предлагаемый нами широкий выбор различных категорий домашнего персонала делают исключительно удобным и, главное, безопасным процесс поиска няни для малыша, сиделки для пожилых членов семьи или домработницы для квартиры или загородного особняка. </p>
								<p class="line-height">Наличие в доме обслуживающего персонала - водителя, няни, гувернантки, горничной, домработницы - это вовсе не дань моде и не причуды избалованных нежданно свалившимся богатством нуворишей. Напротив, услугами сиделки или няни пользуются сегодня те, кто отлично знает цену деньгам и своему времени. Люди, для которых важно не только вырастить ребенка, но и создать основу </p>

							</div>
						</div>
					</div>
				</div>
			<!-- Footer -->
				<?php include "includes/footer.php"; ?>
		</div>
		<!-- jQuery library (served from Google) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="slick/slick.js"></script>
		<script src="js/js.js?ver=4"></script>
	</body>
</html>

