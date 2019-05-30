<?php 
	if(!$_SESSION['user'])
	{
		header("Location: /");
	}
	
	foreach ($data as $key) 
					
	$path = '../../upload/'.$key['photo'];
				 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Портфолио учителя</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<a href="/">к списку</a> <br>
	<a href="/teacher/logout">Выйти</a>
	<div class="container">
		<div class="profile">
			<img width="350" height="270" class="profile-photo" src="<?php echo $path ?>">
			<div class="profile-info">
				<h2 class="heading heading-light">
					Профиль
				</h2>
			<p class="profile-text">
				Ф.И.О. учителя : <?php foreach ($data as $key) 
					
				 print "$key[Name] $key[SecondName] $key[patronymic]" ?></br>
				Дата рождения: <?php foreach ($data as $key) 
					
				 print "$key[BirthDate]"  ?></br>
				стаж: <?php foreach ($data as $key) 					
				 print "$key[Expirience]" ?></br>
				Образование: <?php foreach ($data as $key) 					
				 print "$key[Education]" ?></br>
				Окончил, год: РГПУ, 2000 год</br>
				Специальность: <?php foreach ($data as $key) 					
				 print "$key[Proffesion]" ?></br>
				Категория (разряд): высшая			
			</p>
				<div class="contacts">
					<div class="contacts-item">
						<h3 class="contacts-title">
							<i class="fas fa-phone-volume"></i>
							Телефон
						</h3>
						<a href="tel: +43284328234" class="contacts-text">+43284328234</a>
					</div>	
					<div class="contacts-item">
						<h3 class="contacts-title">
							<i class="fas fa-envelope"></i>
							Email
						</h3>
						<a href="mailto: SolovEl@gmail.com" class="contacts-text">SolovEl@gmail.com</a>
					</div>
					<div class="contacts-item">
						<h3 class="contacts-title">
							<i class="fas fa-globe-americas"></i>
							Страница в соц. сетях
						</h3>
						<a href="http://www.vk.com" class="contacts-text">www.vk.com</a>
					</div>
					<div class="contacts-item">
						<h3 class="contacts-title">
							<i class="fas fa-map-marker-alt"></i>
							Дом
						</h3>
						<address class="contacts-text">
							<?php foreach ($data as $key) {
					
				} print "$key[address]" ?>
						</address>
					</div>
				</div>
				<h2 class="heading heading-light">
					Владение языками
				</h2>
				<div class="languages">
					<div class="language">
						<span class="language-text">Английский</span>
						<strong class="languages-per">100%</strong>
					</div>
					<div class="language">
						<span class="language-text">Французский</span>
						<strong class="languages-per">90%</strong>
					</div>
					<div class="language">
						<span class="language-text">Греческий</span>
						<strong class="languages-per">20%</strong>
					</div>
					<div class="lines">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="resume">
			<div class="resume-wrap">
				<div class="logo">
					<div class="logo-lines logo-lines_left">
						<span class="logo-line"></span>
						<span class="logo-line"></span>
						<span class="logo-line"></span>
					</div>
					<div class="logo-img">
						R / S
					</div>
					<div class="logo-lines logo-lines_right">
						<span class="logo-line"></span>
						<span class="logo-line"></span>
						<span class="logo-line"></span>
					</div>
				</div>
				<div class="about">
					<h1 class="name"><?php foreach ($data as $key) {
					
				} print "$key[Name] $key[patronymic]" ?></h1>
					<span class="position">Учитель английского языка</span>
					<address class="about-address"><?php foreach ($data as $key) {
					
				} print "$key[address]" ?></address>
					<div class="about-contacts">
						<a class="about-contacts__link" href=""><b>t</b>: +43284328234</a> |
						<a class="about-contacts__link" href=""><b>e</b>: SolovEl@gmail.com</a> |
						<a class="about-contacts__link" href=""><b>w</b>: www.vk.com</a>
					</div>
				</div>
				<div class="experience">
					<h2 class="heading heading_dark">
						Опыт
					</h2>
					<ul class="list">
						<li class="list-item">
							<h4 class="list-item__title">Ростов, школа №3</h4>
							<span class="list-item__date">Янв 2000 - Окт 2005</span>
							<p class="list-item__text">
								Проведение учебных занятий по предмету, подготовка к экзаменам, организация классного коллектива. неуспевающих не было, не сдавших экзамены — не было!
							</p>
						</li>
						<li class="list-item">
							<h4 class="list-item__title">Санкт-Петербург, пос. Еленовка, школа №1</h4>
							<span class="list-item__date">Дек 2006 - Фев 2012</span>
							<p class="list-item__text">
								Преподавание английского языка.
								Методологическая работа (учебные программы и пособия).
								Научная работа.
							</p>
						</li>
						<li class="list-item">
							<h4 class="list-item__title">Москва, школа №5</h4>
							<span class="list-item__date">Июл 2016 - </span>
							<p class="list-item__text">
								Преподавание английского языка.
								Заведование кабинетом.
								Внеклассная работа.
								Написание учебных пособий.</p>
						</li>
					</ul>
				</div>
				<div class="education">
					<h2 class="heading heading_dark">
						Образование
					</h2>
					<ul class="list">
						<li class="list-item list-item_non-border">
							<h4 class="list-item__title">Ростовский Национальный университет им. Рожаковского</h4>
							<span class="list-item__date">Сен 1996 - Июн 2000</span>
							<p class="list-item__text">
								Иностранная филология и методика преподавания.
								Квалификация: преподаватель английского языка и литературы,
								учитель французского языка,
								филолог.
							</p>
						</li>
					</ul>
				</div>
				<div class="skills">
					<h2 class="heading heading_dark heading_skills">
						Навыки
					</h2>
					<ul class="skills-list">
						<li class="skills-list__item">
							Базовые знания компьютера
							<div class="level level-80"></div>	
						</li>
						<li class="skills-list__item">
							Творческий подход к работе
							<div class="level level-90"></div>
						</li>
						<li class="skills-list__item">
							Опыт организации мероприятий
							<div class="level level-50"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<style type="text/css">
	
	.profile-photo {
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

</style>