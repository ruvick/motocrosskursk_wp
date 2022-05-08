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

    <form id = "zayavka_form" action="#" class="application__form">

      <div class="application__form-line form__line">
        <input type = "hidden" data-valuem="ID соревнования" name = "ch_id" value = "<? echo $ch_id = $data." ".$month." ".$year?>">
        
        <input required value = "" id="name" autocomplete="off" type="text" name="fio" data-error="Заполните поле" placeholder = "Фамилия Имя Отчество" data-valuem="Фамилия Имя Отчество" class="input _req">
        
        <input required value = "" id="name" autocomplete="off" type="date" name="datar" data-error="Заполните поле" placeholder = "Дата рождения" data-valuem="Дата рождения" class="input _req">

        <input required value = "" id="name" autocomplete="off" type="text" name="razryad" data-error="Заполните поле" placeholder = "Спортивный разряд" data-valuem="Спортивный разряд" class="input _req">


        <select name="klass" class="form input input_select">
          <!-- <option value="" disabled selected="selected">Класс</option> -->
          <option value="125 см3 (0910161811Г) (мужчины) — с 15 лет (15 лет – 2007 г. р.)" selected>125 см3 (0910161811Г) (мужчины) — с 15 лет (15 лет – 2007 г. р.)</option>
          <option value="250 см3 (0910171811М) (мужчины) — с 15 лет (15 лет – 2007 г. р.)">250 см3 (0910171811М) (мужчины) — с 15 лет (15 лет – 2007 г. р.)</option>
          <option value="“Открытый” (0910281811Л) – с 35 лет (35 лет – 1987 г.р.)">“Открытый” (0910281811Л) – с 35 лет (35 лет – 1987 г.р.)</option>
          <option value="50 см3 (0910131811Н) (младшие мальчики) — 6 — 8 лет (с 2016 по 2014 г.р., + родившиеся после 01.10.2013 г.р.)">50 см3 (0910131811Н) (младшие мальчики) — 6 — 8 лет (с 2016 по 2014 г.р., + родившиеся после 01.10.2013 г.р.)</option>
          <option value="65 см3 (0910141811Н) (мальчики) —  8 — 10 лет (с 2014 по 2012 г.р.)">65 см3 (0910141811Н) (мальчики) —  8 — 10 лет (с 2014 по 2012 г.р.)</option>
          <option value="65 см3 (0910141811Н) (юноши, девушки) — 10 — 12 лет (с 2012 по 2010 г.р.)">65 см3 (0910141811Н) (юноши, девушки) — 10 — 12 лет (с 2012 по 2010 г.р.)</option>
          <option value="85 см3 (0910151811Н) (юноши, девушки) —  11 — 15 лет, (с 2011 по 2007 г.р.)">85 см3 (0910151811Н) (юноши, девушки) —  11 — 15 лет, (с 2011 по 2007 г.р.)</option>
          <option value="125 см3 (0910161811Г/юноши) – 13-17 лет (с 2009 по 2005 г.р.)">125 см3 (0910161811Г/юноши) – 13-17 лет (с 2009 по 2005 г.р.)</option>
        </select>

        <input required value = "" id="name" autocomplete="off" type="text" name="number" data-error="Заполните поле" placeholder = "Стартовый номер" data-valuem="Стартовый номер" class="input _req">
        <input required value = "" id="name" autocomplete="off" type="text" name="gorod" data-error="Заполните поле" placeholder = "Город" data-valuem="Город" class="input _req">
        <input required value = "" id="name" autocomplete="off" type="text" name="comanda" data-error="Заполните поле" placeholder = "Команда" data-valuem="Команда" class="input _req">
        <input required value = "" id="name" autocomplete="off" type="text" name="motocicl" data-error="Заполните поле" placeholder = "Мотоцикл" data-valuem="Мотоцикл" class="input _req">
        <textarea class="input" type="text" name="comment" data-error="Заполните поле" data-value="Комментарий"></textarea>
      </div>

      <div class="application__form-block">
        <h4 class="application__form-block-title">Контактная информация</h4>
        <div class="application__form-line form__line">
          <input required value = "" id="name" autocomplete="off" type="text" name="phone" data-error="Заполните поле" placeholder = "Телефон" data-valuem="Телефон" class="input phone _req">
          <input required value = "" id="name" autocomplete="off" type="text" name="mail" data-error="Заполните поле" placeholder = "Электронная почта" data-valuem="Электронная почта" class="input email _req">
        </div>
      </div>

      <div class="application__form-block">
        <h4 class="application__form-block-title">Документы</h4>
        <div class="application__form-line form__line">
          <div class="input file_input_wrap">
            <input id="strahovka" autocomplete="off" type="file" name="strahovka" data-error="Заполните поле" data-valuem="Страховка" data-filenameinput = "file-path_strahovka" data-filenamelabel = "label_strahovka" class="_req">
            <label id = "label_strahovka" for="strahovka">Страховка (загрузить файл)</label>
            <input name = "strahovka_path" type="hidden" id = "file-path_strahovka" class="file-path_strahovka" value="">
          </div>
          
          <div class="input file_input_wrap">
            <input id="razreshenie" autocomplete="off" type="file" name="razreshenie" data-error="Заполните поле" data-valuem="Разрешение родителей*" data-filenameinput = "file-path_razreshenie" data-filenamelabel = "label_razreshenie" class="_req">
            <label id = "label_razreshenie" for="razreshenie">Разрешение родителей (загрузить файл)</label>
            <input  name = "razreshenie_path" type="hidden" id="file-path_razreshenie" class="file-path_razreshenie" value="">
          </div>
          
          <div class="input file_input_wrap">
            <input id="spravka" autocomplete="off" type="file" name="spravka" data-error="Заполните поле" data-valuem="Медицинская справка" data-filenameinput = "file-path_spravka" data-filenamelabel = "label_spravka" class="_req">
            <label id = "label_spravka" for="spravka">Медицинская справка (загрузить файл)</label>
            <input name = "spravka_path" type="hidden" id="file-path_spravka" class="file-path_spravka" value="">
          </div>

          <div class="input file_input_wrap">
            <input id="pasport" autocomplete="off" type="file" name="pasport" data-error="Заполните поле" data-valuem="Паспорт / свидетельство о рождении" data-filenameinput = "file-path_pasport" data-filenamelabel = "label_pasport" class="_req">
            <label id = "label_pasport" for="pasport">Паспорт / свидетельство о рождении</label>
            <input  name = "pasport_path" type="hidden" id="file-path_pasport" class="file-path_pasport" value="">
          </div>

          <div class="input file_input_wrap">
            <input id="licenzia" autocomplete="off" type="file" name="licenzia" data-error="Заполните поле" data-valuem="Спортивное разрешение (Лицензия)" data-filenameinput = "file-path_licenzia" data-filenamelabel = "label_licenzia" class="_req">
            <label id = "label_licenzia" for="licenzia">Спортивное разрешение (Лицензия)</label>
            <input  name = "licenzia_path" type="hidden" id="file-path_licenzia" class="file-path_licenzia" value="">
          </div>

        </div>
        <p class="application__form-block-title-footnote">*Нотариально заверенное разрешение от обоих родителей
          (для спортсменов, не достигших 18 лет)</p>
      </div>
      <button data-formid = "zayavka_form" id = "zayavka_send" class="btn">ОТПРАВИТЬ ЗАЯВКУ</button>
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

    <?
      global $wpdb;
      $classes = $wpdb->get_results('SELECT `klass` FROM `wp_chelenge` WHERE `ch_id` = "'.$ch_id.'" AND `activate` != 0 GROUP BY `klass`');
    ?>
<?
if (empty($classes)) {
?>
  <h3>Пока ни кто не зарегистрировался</h3>
<?
}

foreach ($classes as $cl) {
?>
<div class="list-registered__block">
      <h4 class="list-registered__block-class"><? echo $cl->klass;?></h4>
      <?
        $reicers = $wpdb->get_results('SELECT * FROM `wp_chelenge` WHERE `ch_id` = "'.$ch_id.'" AND `activate` != 0 AND `klass` = "'.$cl->klass.'"');
      ?>

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
        <?
        $i = 1;
          foreach($reicers as $r)  {
        ?>
            <tr class="list-registered__table-tbody-tr">
              <td class="list-registered__table-tbody-td"><span class = "mobile_comment">№ п/п</span><span class = "all_value"><? echo $i;?></span></td>
              <td class="list-registered__table-tbody-td"><span class = "mobile_comment">Ф.И.О.</span><span class = "all_value"><? echo $r->fio;?></span></td>
              <td class="list-registered__table-tbody-td"><span class = "mobile_comment">Город</span><span class = "all_value"><? echo $r->gorod;?></span></td>
              <td class="list-registered__table-tbody-td"><span class = "mobile_comment">Стартовый номер</span><span class = "all_value"><? echo $r->number;?></span></td>
              <td class="list-registered__table-tbody-td"><span class = "mobile_comment">Мотоцикл</span><span class = "all_value"><? echo $r->motocicl;?></span></td>
            </tr> 
        <?
            $i++;
          }
        ?>

        </tbody>
      </table>

</div>
<?
}
?>



  </div>
</section>

</main>

<?php get_footer();