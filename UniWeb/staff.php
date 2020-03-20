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
				<!-- PickUpStaff -->
				<div class="PickUpStaff">
					<div class="container">
						<h1 class="PickUpStaff__title">Подобрать персонал</h1>
						<div id="add-form" class="PickUpStaff__checklist">
							<form class="PickUpStaff__form" action="staff.php #add-form" method="POST">
								<div class="PickUpStaff__showselect">
									<div class="PickUpStaff__selecttext">
										Показать только
									</div>
									<?php
										$current = $_POST['current'];
										$exp_min = $_POST['experience-min'];
										$exp_max = $_POST['experience-max'];
										$age_min = $_POST['age-min'];
										$age_max = $_POST['age-max'];
									?>
									<div class="select">
										<div class="select__header">
											<span class="select__current">Няня</span>
											<input id="current_worker" value="" type="hidden" name="current" >
											<div class="select__icon"></div>
										</div>
										<div class="select__body">
											<div class="select__item hidden">Няня</div>
											<div class="select__item">Гувернантка</div>
											<div class="select__item">Дворник</div>
											<div class="select__item">Водитель</div>
											<div class="select__item">Садовник</div>
										</div>
									</div>
								</div>
								<div class="PickUpStaff__range">
									<div class="PickUpStaff__experience">
										<span>Стаж от </span>
										<input value="<?php echo $exp_min; ?>" type="number" name="experience-min" placeholder="1">
										<span> до </span>
										<input value="<?php echo $exp_max; ?>" type="number" name="experience-max" placeholder="30">
										<span> лет </span>
									</div>
									<div class="PickUpStaff__age">
										<span>Возраст от </span>
										<input value="<?php echo $age_min; ?>" type="number" name="age-min" placeholder="25">
										<span> до </span>
										<input value="<?php echo $age_max; ?>" type="number" name="age-max" placeholder="65">
										<span> лет </span>
									</div>
								</div>
								<div class="PickUpStaff__btn">
									<input class="btn__pickup" type="submit" value="Подобрать" name="do_post">
								</div>
							</form>
						</div>

						<table class="PickUpStaff__table">
							<tr class="PickUpStaff__table_top">
								<th>ФИО</th>
								<th>должность</th>
								<th>возраст</th>
								<th>стаж работы</th>
							</tr>
							<?php
								if( isset($_POST['do_post']) )
								{
									$errors = array();

									if( $exp_min == '' )
									{
										$errors[] = 'Введите первую цифру!';
									}
									if( $exp_max == '' )
									{
										$errors[] = 'Введите вторую цифру!';
									}
									if( $age_min == '' )
									{
										$errors[] = 'Введите начальный возраст!';
									}
									if( $age_max == '' )
									{
										$errors[] = 'Введите конечный возраст!';
									}
									if( empty($errors) )
									{
										
										$pickuptable = mysqli_query($connection, "SELECT * FROM `pick_up_table` WHERE `position`= '$current' AND `age` BETWEEN '$age_min' AND '$age_max' AND `experience` BETWEEN '$exp_min' AND '$exp_max' ");
										while ( $pick = mysqli_fetch_assoc($pickuptable) ) 
											{?>
											<tr class="PickUpStaff__tab">
												<td><?php echo $pick['full_name']; ?></td>
												<td><?php echo $pick['position']; ?></td>
												<td><?php echo $pick['age']; ?></td>
												<td><?php echo $pick['experience'] == 1 ? $pick['experience'] . ' год' : $pick['experience'] <= 4 ? $pick['experience'] . ' года' : $pick['experience'] . ' лет' ; ?></td>
											</tr>
										<?php 
										}
									} else
									{
										echo '<span style="color:red;font-weight: bold; display: inline-block; position: absolute; left: 1045px; top: 560px;">' . $errors['0'] . '</span>';
									}
								}
								?>
						</table>



						<div class="PickUpStaff__text">
							<p>Наличие в доме обслуживающего персонала - водителя, няни, гувернантки, горничной, домработницы - это вовсе не дань моде и не причуды избалованных нежданно свалившимся богатством нуворишей. Напротив, услугами сиделки или няни пользуются сегодня те, кто отлично знает цену деньгам и своему времени
								Наличие в доме обслуживающего персонала - водителя, няни, гувернантки, горничной, домработницы - это вовсе не дань моде и не причуды избалованных нежданно свалившимся богатством нуворишей. Напротив, услугами сиделки или няни пользуются сегодня те, кто отлично знает цену деньгам и своему времени</p>
								<p>Наличие в доме обслуживающего персонала - водителя, няни, гувернантки, горничной, домработницы - это вовсе не дань моде и не причуды избалованных нежданно свалившимся богатством нуворишей. Напротив, услугами сиделки или няни пользуются сегодня те, кто отлично знает цену деньгам и своему времени. Люди, для которых важно не только вырастить ребенка, но и создать основу будущего благосостояния, построив свою карьеру - вот основная категорий заказчиков, которые ежедневно пользуются услугами нашей компании по подбору домашнего персонала. Заказ няни, сиделки или домработницы является благом не только для женщины, которая имеет возможность строить свою карьеру или получить, наконец, передышку от выполнения бесконечных домашних обязанностей, но и для всех остальных членов семьи, которые могут провести вместе свободный вечер или выходные. А доступные цены, которые устанавливает на свои услуги наша компания, и предлагаемый нами широкий выбор различных категорий домашнего персонала делают исключительно удобным и, главное, безопасным процесс поиска няни для малыша, сиделки для пожилых членов семьи или домработницы для квартиры или загородного особняка. </p>
								<p class="line-height">Наличие в доме обслуживающего персонала - водителя, няни, гувернантки, горничной, домработницы - это вовсе не дань моде и не причуды избалованных нежданно свалившимся богатством нуворишей. Напротив, услугами сиделки или няни пользуются сегодня те, кто отлично знает цену деньгам и своему времени. Люди, для которых важно не только вырастить ребенка, но и создать основу </p>
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
		<script src="js/js.js?ver=4" ></script>
	</body>
</html>

