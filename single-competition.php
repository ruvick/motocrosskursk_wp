<?php 

/*
Template Name: Страница Сорвенование
Template Post Type: post
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?> 

<main class="page">

<?php 
		$banner = wp_get_attachment_image_src( carbon_get_the_post_meta('sor_banner_img'), 'full')[0];
			if(empty($banner)) {
		$banner = get_template_directory_uri() . '/img/banner.jpg';
	} ?>

<section id="banner" class="banner" style="background-image: url(<?php echo $banner?>);">
	<div class="nuar_blk"></div>
	<div class="_container">
		<div class="banner__flex d-flex">

			<div class="banner__flex-descp">
				<h1 class="banner__title">
					<?php echo carbon_get_the_post_meta('sor_banner_title'); ?>
				</h1>
				<div class="banner__flex-descp-btn d-flex">
					<a href="<?php echo carbon_get_the_post_meta('banner_link_zayavka'); ?>" class="btn _popup-link">ПОДАТЬ ЗАЯВКУ</a>
				</div>
			</div>

			<div class="banner__flex-date">
				<p class="banner__flex-date-number"><?php echo $data = carbon_get_the_post_meta('sor_banner_number'); ?></p>
				<div class="banner__flex-date-line"></div> 
				<p class="banner__flex-date-month"><?php echo $month = carbon_get_the_post_meta('sor_banner_month'); ?></p>
				<p class="banner__flex-date-year"><?php echo $year =  carbon_get_the_post_meta('sor_banner_year'); ?></p>
			</div>

		</div>
	</div>
</section>


<section class="page-recurring">
  <div class="_container">
  <?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
				}
			?> 

    <div class="about-competition">
      <h2 class="about-competition__title">О соревновании</h2>
      
      <div class="text_style">
        <?php the_content(); ?>
      </div>
      
      
      <div class="about-competition__row">
        <?
          $fiz = carbon_get_the_post_meta('fiz_meropriyatiya');
          $polozg = carbon_get_the_post_meta('pologenie');

        ?>

        <? if ($polozg) {?>
          <a href="<?echo wp_get_attachment_url($polozg);?>" class="about-competition__item">
            <span class="about-competition__item-icon about-competition__item-icon-01"></span>
            <p class="about-competition__item-descp">Положение о проведении мероприятия</p>
          </a>
        <?}?>

        <? if ($fiz) {?>
          <a href="<?echo wp_get_attachment_url($fiz);?>" class="about-competition__item">
            <span class="about-competition__item-icon about-competition__item-icon-02"></span>
            <p class="about-competition__item-descp">Физкультурные мероприятия</p>
          </a>
        <?}?>
      </div>
    </div>

  </div>
</section>

<section id="line" class="line">
  <div class="_container">
    <div class="line-bg"></div>
  </div>
</section>

<section id="application" class="application">
  <div class="_container">
    <h2 class="application__title">Отправить заявку на участие</h2>

    <form action="#" class="application__form">

      <div class="application__form-line form__line">
        <input type = "hidden" name = "ch_id" value = "<? echo $data." ".$month." ".$year?>">
        
        <input id="name" autocomplete="off" type="text" name="fio" data-error="Заполните поле" data-value="Фамилия Имя Отчество" class="input _req">
        
        <input id="name" autocomplete="off" type="date" name="datar" data-error="Заполните поле" data-value="Дата рождения" class="input _req">

        <input id="name" autocomplete="off" type="text" name="razryad" data-error="Заполните поле" data-value="Спортивный разряд" class="input _req">

        <!-- <input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поле"
          data-value="Класс" class="input _req"> -->

        <select name="form[]" class="form input input_select">
          <option value="" disabled selected="selected">Класс</option>
          <option value="2">125 см3 (0910161811Г) (мужчины) — с 15 лет (15 лет – 2007 г. р.),</option>
          <option value="3">250 см3 (0910171811М) (мужчины) — с 15 лет (15 лет – 2007 г. р.)</option>
          <option value="4">“Открытый” (0910281811Л) – с 35 лет (35 лет – 1987 г.р.).</option>
          <option value="2">50 см3 (0910131811Н) (младшие мальчики) — 6 — 8 лет (с 2016 по 2014 г.р., + родившиеся после 01.10.2013 г.р.)</option>
          <option value="3">65 см3 (0910141811Н) (мальчики) —  8 — 10 лет (с 2014 по 2012 г.р.)</option>
          <option value="3">65 см3 (0910141811Н) (юноши, девушки) — 10 — 12 лет (с 2012 по 2010 г.р.)</option>
          <option value="3">85 см3 (0910151811Н) (юноши, девушки) —  11 — 15 лет, (с 2011 по 2007 г.р.)</option>
          <option value="3">125 см3 (0910161811Г/юноши) – 13-17 лет (с 2009 по 2005 г.р.)</option>
        </select>

        <input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поле"
          data-value="Стартовый номер" class="input _req">
        <input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поле"
          data-value="Город" class="input _req">
        <input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поле"
          data-value="Команда" class="input _req">
        <input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поле"
          data-value="Мотоцикл" class="input _req">
        <textarea class="input" type="text" name="form[]" data-error="Заполните поле"
          data-value="Комментарий"></textarea>
      </div>

      <div class="application__form-block">
        <h4 class="application__form-block-title">Контактная информация</h4>
        <div class="application__form-line form__line">
          <input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поле"
            data-value="Телефон" class="input phone _req">
          <input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поле"
            data-value="Электронная почта" class="input email _req">
        </div>
      </div>

      <div class="application__form-block">
        <h4 class="application__form-block-title">Документы</h4>
        <div class="application__form-line form__line">
          <input id="name" autocomplete="off" type="file" name="form[]" data-error="Заполните поле"
            data-value="Страховка" class="input _req">
          <input id="name" autocomplete="off" type="file" name="form[]" data-error="Заполните поле"
            data-value="Разрешение родителей*" class="input _req">
          <input id="name" autocomplete="off" type="file" name="form[]" data-error="Заполните поле"
            data-value="Медицинская справка" class="input _req">
        </div>
        <p class="application__form-block-title-footnote">*Нотариально заверенное разрешение от обоих родителей
          (для спортсменов, не достигших 18 лет)</p>
      </div>
      <button class="btn">ОТПРАВИТЬ ЗАЯВКУ</button>
    </form>

  </div>
</section>

<section id="line" class="line">
  <div class="_container">
    <div class="line-bg"></div>
  </div>
</section>

<section id="list-registered" class="list-registered">
  <div class="_container">
    <h2 class="list-registered__title">Список зарегистрированных участников</h2>

    <div class="list-registered__block">
      <h4 class="list-registered__block-class">Класс 50 см3</h4>

      <table class="list-registered__table">
        <thead class="list-registered__table-thead">
          <tr class="list-registered__table-thead-tr list-registered__table-thead-tr-top">
            <td class="list-registered__table-thead-td">№ п/п</td>
            <td class="list-registered__table-thead-td">Ф.И.О.</td>
            <td class="list-registered__table-thead-td">Город</td>
            <td class="list-registered__table-thead-td">Стартовый<br>номер</td>
            <td class="list-registered__table-thead-td">Мотоцикл</td>
          </tr>
        </thead>
        <tbody class="list-registered__table-tbody">
          <tr class="list-registered__table-tbody-tr">
            <td class="list-registered__table-tbody-td">1</td>
            <td class="list-registered__table-tbody-td">Анисов Александр Николаевич</td>
            <td class="list-registered__table-tbody-td">Брянск</td>
            <td class="list-registered__table-tbody-td">150</td>
            <td class="list-registered__table-tbody-td">Yamaha 450</td>
          </tr>
          <tr class="list-registered__table-tbody-tr">
            <td class="list-registered__table-tbody-td">2</td>
            <td class="list-registered__table-tbody-td">Арцукевич Анатолий Семенович</td>
            <td class="list-registered__table-tbody-td">Гродно, Беларусь</td>
            <td class="list-registered__table-tbody-td">153</td>
            <td class="list-registered__table-tbody-td">Yamaha 450 FGFTU</td>
          </tr>
          <tr class="list-registered__table-tbody-tr">
            <td class="list-registered__table-tbody-td">1</td>
            <td class="list-registered__table-tbody-td">Анисов Александр Николаевич</td>
            <td class="list-registered__table-tbody-td">Брянск</td>
            <td class="list-registered__table-tbody-td">150</td>
            <td class="list-registered__table-tbody-td">Yamaha 450</td>
          </tr>
          <tr class="list-registered__table-tbody-tr">
            <td class="list-registered__table-tbody-td">2</td>
            <td class="list-registered__table-tbody-td">Арцукевич Анатолий Семенович</td>
            <td class="list-registered__table-tbody-td">Гродно, Беларусь</td>
            <td class="list-registered__table-tbody-td">153</td>
            <td class="list-registered__table-tbody-td">Yamaha 450 FGFTU</td>
          </tr>
        </tbody>
      </table>

    </div>

    <div class="list-registered__block">
      <h4 class="list-registered__block-class">Класс 65 см3</h4>

      <table class="list-registered__table">
        <thead class="list-registered__table-thead">
          <tr class="list-registered__table-thead-tr list-registered__table-thead-tr-top">
            <td class="list-registered__table-thead-td">№ п/п</td>
            <td class="list-registered__table-thead-td">Ф.И.О.</td>
            <td class="list-registered__table-thead-td">Город</td>
            <td class="list-registered__table-thead-td">Стартовый<br>номер</td>
            <td class="list-registered__table-thead-td">Мотоцикл</td>
          </tr>
        </thead>
        <tbody class="list-registered__table-tbody">
          <tr class="list-registered__table-tbody-tr">
            <td class="list-registered__table-tbody-td">1</td>
            <td class="list-registered__table-tbody-td">Анисов Александр Николаевич</td>
            <td class="list-registered__table-tbody-td">Брянск</td>
            <td class="list-registered__table-tbody-td">150</td>
            <td class="list-registered__table-tbody-td">Yamaha 450</td>
          </tr>
          <tr class="list-registered__table-tbody-tr">
            <td class="list-registered__table-tbody-td">2</td>
            <td class="list-registered__table-tbody-td">Арцукевич Анатолий Семенович</td>
            <td class="list-registered__table-tbody-td">Гродно, Беларусь</td>
            <td class="list-registered__table-tbody-td">153</td>
            <td class="list-registered__table-tbody-td">Yamaha 450 FGFTU</td>
          </tr>
          <tr class="list-registered__table-tbody-tr">
            <td class="list-registered__table-tbody-td">1</td>
            <td class="list-registered__table-tbody-td">Анисов Александр Николаевич</td>
            <td class="list-registered__table-tbody-td">Брянск</td>
            <td class="list-registered__table-tbody-td">150</td>
            <td class="list-registered__table-tbody-td">Yamaha 450</td>
          </tr>
          <tr class="list-registered__table-tbody-tr">
            <td class="list-registered__table-tbody-td">2</td>
            <td class="list-registered__table-tbody-td">Арцукевич Анатолий Семенович</td>
            <td class="list-registered__table-tbody-td">Гродно, Беларусь</td>
            <td class="list-registered__table-tbody-td">153</td>
            <td class="list-registered__table-tbody-td">Yamaha 450 FGFTU</td>
          </tr>
        </tbody>
      </table>

    </div>

    <div class="list-registered__block">
      <h4 class="list-registered__block-class">Класс 85 см3</h4>

      <table class="list-registered__table">
        <thead class="list-registered__table-thead">
          <tr class="list-registered__table-thead-tr list-registered__table-thead-tr-top">
            <td class="list-registered__table-thead-td">№ п/п</td>
            <td class="list-registered__table-thead-td">Ф.И.О.</td>
            <td class="list-registered__table-thead-td">Город</td>
            <td class="list-registered__table-thead-td">Стартовый<br>номер</td>
            <td class="list-registered__table-thead-td">Мотоцикл</td>
          </tr>
        </thead>
        <tbody class="list-registered__table-tbody">
          <tr class="list-registered__table-tbody-tr">
            <td class="list-registered__table-tbody-td">1</td>
            <td class="list-registered__table-tbody-td">Анисов Александр Николаевич</td>
            <td class="list-registered__table-tbody-td">Брянск</td>
            <td class="list-registered__table-tbody-td">150</td>
            <td class="list-registered__table-tbody-td">Yamaha 450</td>
          </tr>
          <tr class="list-registered__table-tbody-tr">
            <td class="list-registered__table-tbody-td">2</td>
            <td class="list-registered__table-tbody-td">Арцукевич Анатолий Семенович</td>
            <td class="list-registered__table-tbody-td">Гродно, Беларусь</td>
            <td class="list-registered__table-tbody-td">153</td>
            <td class="list-registered__table-tbody-td">Yamaha 450 FGFTU</td>
          </tr>
          <tr class="list-registered__table-tbody-tr">
            <td class="list-registered__table-tbody-td">1</td>
            <td class="list-registered__table-tbody-td">Анисов Александр Николаевич</td>
            <td class="list-registered__table-tbody-td">Брянск</td>
            <td class="list-registered__table-tbody-td">150</td>
            <td class="list-registered__table-tbody-td">Yamaha 450</td>
          </tr>
          <tr class="list-registered__table-tbody-tr">
            <td class="list-registered__table-tbody-td">2</td>
            <td class="list-registered__table-tbody-td">Арцукевич Анатолий Семенович</td>
            <td class="list-registered__table-tbody-td">Гродно, Беларусь</td>
            <td class="list-registered__table-tbody-td">153</td>
            <td class="list-registered__table-tbody-td">Yamaha 450 FGFTU</td>
          </tr>
        </tbody>
      </table>

    </div>

  </div>
</section>

</main>

<?php get_footer();