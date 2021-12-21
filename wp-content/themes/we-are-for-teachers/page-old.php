<?php get_header(); ?>
	<main id="primary" class="site-main">
    <section class="promo" id="promo">
    	<div class="inner">
    		<h1 class="promo__title title"><?php bloginfo('name'); ?></h1>
    		<div class="promo__quote-block">
    			<img src="<?php bloginfo('template_directory') ?>/img/icons/back-quotes-icon.svg" alt="Кавычки" class="promo__quote-icon" width="25" height="28">
    			<blockquote class="promo__blockquote">
    				<p class="promo__text">
    					«Вся гордость учителя в учениках, в росте посеянных им семян...»</p>
    				<p class="promo__author">Д. Менделеев</p>
    			</blockquote>
    		</div>
    		<a href="https://www.youtube.com" class="promo__btn btn" target="_blank">
    			<svg class="promo__btn-icon" width="41" height="28" viewBox="0 0 41 28" fill="#fff">
    				<use xlink:href="#youtube-icon"/>
    			</svg>
    			<span class="promo__btn-name">Смотреть все поздравления</span>
    		</a>
    	</div>
    </section>

    <section class="nav">
    	<h2 class="visually-hidden">Главное меню</h2>
    	<div class="inner">
    		<img class="nav__camera-roll" src="<?php bloginfo('template_directory') ?>/img/camera-roll.png" alt="Фотопленка" width="274" height="822">
    		<nav class="nav__menu">
    			<ul class="nav__list">
    				<li class="nav__item">
    					<img class="nav__menu-icon" src="<?php bloginfo('template_directory') ?>/img/icons/congratulations-icon.svg"
    							 alt="Письмо, перо, чернила" width="62" height="57">
    					<a class="nav__menu-link" href="#congratulations">Поздравления</a>
    				</li>
    				<li class="nav__item">
    					<img class="nav__menu-icon" src="<?php bloginfo('template_directory') ?>/img/icons/about-icon.svg"
    							 alt="Шляпа и книги" width="79" height="62">
    					<a class="nav__menu-link" href="#about">О проекте</a>
    				</li>
    				<li class="nav__item">
    					<img class="nav__menu-icon" src="<?php bloginfo('template_directory') ?>/img/icons/promotions-icon.svg"
    							 alt="Оливковая ветвь" width="61" height="59">
    					<a class="nav__menu-link" href="#promo">Акции</a>
    				</li>
    				<li class="nav__item">
    					<img class="nav__menu-icon" src="<?php bloginfo('template_directory') ?>/img/icons/cards-icon.svg"
    							 alt="Письмо и перо" width="58" height="59">
    					<a class="nav__menu-link" href="#cards">Открытки</a>
    				</li>
    			</ul>
    		</nav>
    	</div>
    </section>

    <section class="about" id="about">
    	<div class="inner">
    		<h2 class="visually-hidden">О проекте</h2>
    		<ul class="about__list">
    			<li class="about__item">
    				<div class="about__item-header">
    					<img src="<?php bloginfo('template_directory') ?>/uploads/about/avatar-1.jpg" alt="Владимир Потанин" class="about__avatar" width="242" height="242">
    					<img src="<?php bloginfo('template_directory') ?>/img/avatar-frame.svg" alt="Рамка" class="about__avatar-frame" width="205" height="205">
    					<h3 class="about__author">Владимир Потанин</h3>
    					<p class="about__author-pos">Директор департамента молодежи и спорта</p>
    				</div>
    				<p class="about__text">
    					Я занимаюсь благотворительностью больше 20 лет.
    					Это - важная часть моей жизни. В 1999 году я создал Благотворительный фонд, чтобы сделать проекты в сферах
    					лет.
    					Это - важная часть моей жизни. В 1999 году я создал Благотворительный фонд, чтобы сделать проекты в сферах
    					лет.
    				</p>
    			</li>
    			<li class="about__item">
    				<div class="about__item-header">
    					<img src="<?php bloginfo('template_directory') ?>/uploads/about/avatar-2.jpg" alt="Мария Павловская" class="about__avatar" width="242" height="242">
    					<img src="<?php bloginfo('template_directory') ?>/img/avatar-frame.svg" alt="Рамка" class="about__avatar-frame" width="205" height="205">
    					<h3 class="about__author">Мария Павловская</h3>
    					<p class="about__author-pos">Директор департамента молодежи и спорта</p>
    				</div>
    				<p class="about__text">
    					Я занимаюсь благотворительностью больше 20 лет.
    					Это - важная часть моей жизни. В 1999 году я создал Благотворительный фонд, чтобы сделать проекты в сферах
    					лет.
    					Это - важная часть моей жизни. В 1999 году я создал Благотворительный фонд, чтобы сделать проекты в сферах
    					лет.
    				</p>
    			</li>
    			<li class="about__item">
    				<div class="about__item-header">
    					<img src="<?php bloginfo('template_directory') ?>/uploads/about/avatar-1.jpg" alt="Федор Емельяненко" class="about__avatar" width="242" height="242">
    					<img src="<?php bloginfo('template_directory') ?>/img/avatar-frame.svg" alt="Рамка" class="about__avatar-frame" width="205" height="205">
    					<h3 class="about__author">Федор Емельяненко</h3>
    					<p class="about__author-pos">Директор департамента молодежи и спорта</p>
    				</div>
    				<p class="about__text">
    					Я занимаюсь благотворительностью больше 20 лет.
    					Это - важная часть моей жизни. В 1999 году я создал Благотворительный фонд, чтобы сделать проекты в сферах
    					лет.
    					Это - важная часть моей жизни.
    				</p>
    			</li>
    		</ul>
    	</div>
    </section>

    <section id="congratulations" class="congratulations">
    	<div class="inner">
    		<h2 class="congratulations__title title">Поздравления</h2>
    		<ul class="congratulations__slider">
    			<li class="congratulations__item">
    				<img class="congratulations__photo" src="<?php bloginfo('template_directory') ?>/uploads/congratulations/image-1.jpg" alt="Постер" width="362"
    						 height="276">
    				<img class="congratulations__frame" src="<?php bloginfo('template_directory') ?>/img/shutterstock-bg.png" alt="Рамка" width="381" height="380">
    			</li>
    			<li class="congratulations__item">
    				<img class="congratulations__photo" src="<?php bloginfo('template_directory') ?>/uploads/congratulations/image-2.jpg" alt="Постер" width="376"
    						 height="276">
    				<img class="congratulations__frame" src="<?php bloginfo('template_directory') ?>/img/shutterstock-bg.png" alt="Рамка" width="381" height="380">
    			</li>
    			<li class="congratulations__item">
    				<img class="congratulations__photo" src="<?php bloginfo('template_directory') ?>/uploads/congratulations/image-3.jpg" alt="Постер" width="376"
    						 height="276">
    				<img class="congratulations__frame" src="<?php bloginfo('template_directory') ?>/img/shutterstock-bg.png" alt="Рамка" width="381" height="380">
    			</li>
    			<li class="congratulations__item">
    				<img class="congratulations__photo" src="<?php bloginfo('template_directory') ?>/uploads/congratulations/image-4.jpg" alt="Постер" width="376"
    						 height="276">
    				<img class="congratulations__frame" src="<?php bloginfo('template_directory') ?>/img/shutterstock-bg.png" alt="Рамка" width="381" height="380">
    			</li>
    			<li class="congratulations__item">
    				<img class="congratulations__photo" src="<?php bloginfo('template_directory') ?>/uploads/congratulations/image-5.jpg" alt="Постер" width="376"
    						 height="276">
    				<img class="congratulations__frame" src="<?php bloginfo('template_directory') ?>/img/shutterstock-bg.png" alt="Рамка" width="381" height="380">
    			</li>
    			<li class="congratulations__item">
    				<img class="congratulations__photo" src="<?php bloginfo('template_directory') ?>/uploads/congratulations/image-2.jpg" alt="Постер" width="376"
    						 height="276">
    				<img class="congratulations__frame" src="<?php bloginfo('template_directory') ?>/img/shutterstock-bg.png" alt="Рамка" width="381" height="380">
    			</li>
    			<li class="congratulations__item">
    				<img class="congratulations__photo" src="<?php bloginfo('template_directory') ?>/uploads/congratulations/image-4.jpg" alt="Постер" width="376"
    						 height="276">
    				<img class="congratulations__frame" src="<?php bloginfo('template_directory') ?>/img/shutterstock-bg.png" alt="Рамка" width="381" height="380">
    			</li>
    		</ul>
    	</div>
    </section>

    <section id="cards" class="cards">
    	<div class="inner">
    		<h2 class="cards__title title">Поздравь учителя!</h2>
    		<p class="cards__subtitle">Сделай поздравительную открытку</p>
    		<ul class="cards__slider">
    			<li class="cards__item">
    				<img class="cards__photo" src="<?php bloginfo('template_directory') ?>/uploads/cards/card-1.png" alt="Открытка" width="264" height="296">
    			</li>
    			<li class="cards__item">
    				<img class="cards__photo" src="<?php bloginfo('template_directory') ?>/uploads/cards/card-2.png" alt="Открытка" width="264" height="296">
    			</li>
    			<li class="cards__item">
    				<img class="cards__photo" src="<?php bloginfo('template_directory') ?>/uploads/cards/card-3.png" alt="Открытка" width="264" height="296">
    			</li>
    			<li class="cards__item">
    				<img class="cards__photo" src="<?php bloginfo('template_directory') ?>/uploads/cards/card-1.png" alt="Открытка" width="264" height="296">
    			</li>
    			<li class="cards__item">
    				<img class="cards__photo" src="<?php bloginfo('template_directory') ?>/uploads/cards/card-2.png" alt="Открытка" width="264" height="296">
    			</li>
    			<li class="cards__item">
    				<img class="cards__photo" src="<?php bloginfo('template_directory') ?>/uploads/cards/card-3.png" alt="Открытка" width="264" height="296">
    			</li>
    			<li class="cards__item">
    				<img class="cards__photo" src="<?php bloginfo('template_directory') ?>/uploads/cards/card-2.png" alt="Открытка" width="264" height="296">
    			</li>
    		</ul>

    		<div class="cards__btn-box">
    			<label class="cards__btn btn">
    				<img src="<?php bloginfo('template_directory') ?>/img/icons/download-icon.svg" alt="Загрузить" class="cards__btn-icon" width="25" height="24">
    				Загрузить
    				<input class="visually-hidden ddd" type="file" name="card">
    			</label>
    		</div>
    		<p class="cards__download-formats">Формат - .jpg, .jpeg, .png, .tiff, .bmp</p>
    	</div>
    </section>
  </main>
<?php get_footer(); ?>