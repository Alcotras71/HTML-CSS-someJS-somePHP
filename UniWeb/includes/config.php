<?

$config = array(
	'title' => 'Ваш дом',
	'copyright_url' => 'https://uniofweb.ru/',
	'menu' => array(
		'главная',
		'pickup' => array(
			'подобрать персонал',
			'О нас',
			'Задать вопрос',
			'Это интересно',
			'Отзывы'
		),
		'цены',
		'оставить заявку',
		'оставить вакансию',
		'контакты'
	),
	'db' => array(
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
		'name' => 'uniweb'
	)
);

require "db.php";