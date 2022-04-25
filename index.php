<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section id="banner" class="banner">
	<div class="nuar_blk"></div>
	<div class="_container">
		<div class="banner__flex d-flex">

			<div class="banner__flex-descp">
				<h1 class="banner__title">
					Мотокросс в г. Курске, <br> 
					урочище Крутой лог
				</h1>
				<div class="banner__flex-descp-btn d-flex">
					<a href="#callback" class="btn _popup-link">ПОДАТЬ ЗАЯВКУ</a>
					<a href="#" class="btn btn_transp">ПОДРОБНЕЕ О СОРЕВНОВАНИИ</a>
				</div>
			</div>

			<div class="banner__flex-date">
				<p class="banner__flex-date-number">16-17</p>
				<div class="banner__flex-date-line"></div>
				<p class="banner__flex-date-month">октября</p>
				<p class="banner__flex-date-year">2022</p>
			</div>

		</div>
	</div>
</section>

<section id="about" class="about">
	<div class="_container">
		<h2 class="about__title">О федерации</h2>
		<div class="about__descp">
			<p>
				Мотокросс - один из самых сложных технических видов спорта, требующий физической силы, выносливости,
				скоординированности и решительности.
				Когда вы направляетесь на трассу впервые, желательно иметь начальные представления о том, что вам
				предстоит. Поэтому мы попробуем осветить
				основные моменты техники езды и дать некоторые советы. Разумеется, наш короткий текст не является
				самоучителем) Учиться надо на трассе, под
				присмотром тренера, от простого к сложному.
			</p>
			<p>
				Первое, что вы должны сделать перед выездом на трек – правильно экипироваться. Ведь существует негласное
				правило:
				экипировка важна на случай аварии, а не для обычной езды. Но падения в мотоспорте более, чем вероятны, а
				значит и защита должна соответствовать.
				Есть много вариантов экипа начального уровня. Главное, не экономьте на защите головы и ног - в этом случае
				лучше приобрести продукцию
				известного бренда. Также не забывайте, что понадобятся мотоочки, пояс, защита шеи, торса и коленей, ну и,
				конечно же, перчатки, джерси и штаны.
			</p>
		</div>
	</div>
</section>

<section id="line" class="line">
	<div class="_container">
		<div class="line-bg"></div>
	</div>
</section>

<section id="competitions" class="competitions">
	<div class="_container">
		<h2 class="competitions__title">Наши соревнования</h2>

		<div class="competitions__row">

			<div class="competitions__column">
				<div class="competitions__card">
					<div class="competitions__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/competitions/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/competitions/01.jpg?_v=1646818987671" alt=""></picture>
					</div>
					<div class="competitions__card-descp">
						<h4>Мотокросс в Крутом логе</h4>
						<div class="competitions__card-descp-flex d-flex">
							<div class="competitions__card-descp-flex-contacts">
								<p class="competitions__card-descp-flex-contacts-date">16-17 октября 2022 г.</p>
								<p class="competitions__card-descp-flex-contacts-address">г. Курск, ур.Крутой лог</p>
							</div>
							<a href="#" class="competitions__card-descp-flex-btn btn">ПОДРОБНЕЕ О МЕРОПРИЯТИИ</a>
						</div>
					</div>
				</div>
			</div>

			<div class="competitions__column">
				<div class="competitions__card">
					<div class="competitions__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/competitions/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/competitions/02.jpg?_v=1646818987671" alt=""></picture>
					</div>
					<div class="competitions__card-descp">
						<h4>Extreme Challenge</h4>
						<div class="competitions__card-descp-flex d-flex">
							<div class="competitions__card-descp-flex-contacts">
								<p class="competitions__card-descp-flex-contacts-date">03 ноября 2022 г.</p>
								<p class="competitions__card-descp-flex-contacts-address">г. Курск, ур.Крутой лог</p>
							</div>
							<a href="#" class="competitions__card-descp-flex-btn btn">ПОДРОБНЕЕ О МЕРОПРИЯТИИ</a>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>

</main>

<?php get_footer(); ?> 