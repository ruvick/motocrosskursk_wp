<?

// Описание полей для Carbon_Fields производим только в этом файле
// 1. В начале идет описание полей - Настройки темы  далее категорий (если необходимо) в конце аблонов страниц и записей
// 2. Префиксы проставляем каждый раз новые осмысленно по имени проекта 
// 3. Для Полей которые входят в состав составново схема именования следующая <Общий префикс>_<название составного поля>_<имя поля>
// 4. Название секций Так же придумываем осмысленные на русском языке чтобы небыло сплошных Доп. полей
// 5. Каждый блок комментируем


use Carbon_Fields\Container;
use Carbon_Fields\Field; 

Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )
    ->add_tab('Банер на главной', array(
      Field::make('image', 'banner_img', 'Картинка')
      ->set_width(50),
      Field::make('text', 'banner_title', 'Заголовок банера')
      ->set_width(50), 
      Field::make('text', 'banner_number', 'Дата проведения')
      ->set_width(50), 
      Field::make('text', 'banner_month', 'Месяц проведения')
      ->set_width(50), 
      Field::make('text', 'banner_year', 'Год проведения')
      ->set_width(100), 
      Field::make('text', 'banner_link', 'Ссылка Подробнее о соревновании')
      ->set_width(50), 
      Field::make('text', 'banner_link_zayavka', 'Ссылка подать заявку')
      ->set_width(50), 
      Field::make('text', 'link_to_archive', 'Ссылка на архив')
      ->set_width(100), 
    ))
    ->add_tab('О нас', array(
      Field::make('text', 'about_home_title', 'Заголовок на главной'), 
      Field::make('rich_text', 'about_home', 'О нашей компании')
    ))

    ->add_tab('Текущее соревнование', array(
      Field::make('text', 'ch_id', 'ID текущего соревнования'), 
    ))

    // ->add_tab('Слайдер', array(
    //   Field::make('complex', 'slider_index', 'Слайдер на главной')
    //     ->add_fields(array(
    //       Field::make('image', 'slider_img', 'Картинка слайдера')
    //         ->set_width(50),
    //       Field::make('text', 'slider_title', 'Заголовок слайдера')
    //         ->set_width(50),
    //       // Field::make('text', 'slider_subtitle', 'Подзаголовок слайдера')
    //       //   ->set_width(50),
    //       // Field::make('text', 'slider_link', 'Ссылка в кнопке')
    //       //   ->set_width(50),
    //       // Field::make('text', 'slider_link_text', 'Текст в кнопке')
    //       //   ->set_width(50),
    //     ))
    // ))
    ->add_tab('Разделы', array(
      Field::make('complex', 'complex_sections', 'Разделы на главной')
      ->set_max(5) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('image', 'img_sections', 'Фото')
        ->set_width(30),
        Field::make('text', 'text_sections', 'Текст')   
        ->set_width(30),
        Field::make('text', 'link_sections', 'Ссылка')   
        ->set_width(30),
        Field::make("checkbox", "checkbox_stock", "Большая картинка"),
        Field::make("checkbox", "checkbox_stock_title", "Большая картинка, заголовок слева"),
        ))
    ))
    ->add_tab('Отзывы', array(
      Field::make('complex', 'complex_reviews', 'Выводим Отзывы')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('image', 'img_reviews', 'Фото')
        ->set_width(10),
        Field::make('text', 'name_reviews', 'Имя')   
        ->set_width(10),
        Field::make('text', 'data_reviews', 'Дата')   
        ->set_width(10),
        Field::make('text', 'descp_reviews', 'Текст')   
        ->set_width(30),
        Field::make('text', 'link_reviews', 'Ссылка')   
        ->set_width(10),
        )) 
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'as_company', __( 'Название' ) )
          ->set_width(50),
        Field::make( 'text', 'as_schedule', __( 'Режим работы' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phones_1', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_2', __( 'Телефон дополнительный' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) ) 
          ->set_width(50),
        Field::make( 'text', 'as_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_kpp', __( 'КПП' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bik', __( 'БИК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_rs', __( 'Р/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_ks', __( 'К/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bank', __( 'БАНК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_insta', __( 'instagram' ) )
          ->set_width(50),
        Field::make( 'text', 'as_face', __( 'facebook' ) )
          ->set_width(50),
        Field::make( 'text', 'as_vk', __( 'Вконтакте' ) )
          ->set_width(50),
        Field::make( 'text', 'as_telegr', __( 'telegram' ) )
          ->set_width(50),
        Field::make( 'text', 'as_whatsapp', __( 'whatsapp' ) )
          ->set_width(50),
        Field::make('text', 'map_point', 'Координаты карты')
          ->set_width(50),
        Field::make('text', 'text_map', 'Текст метки карты')
          ->set_width(50),
    ) );

    Container::make('post_meta', 'single_arch', 'Доп поля архив соревнований') 
	    ->show_on_template('single-arch.php')
	    ->add_fields(array(
		    Field::make('text', 'custom_post_date', 'Дата для карточки')->set_width(50),
		    Field::make('text', 'custom_post_adress', 'Адрес для карточки')->set_width(50),
        Field::make('complex', 'file_complex', 'Блок с файлами')
        // ->set_max(3) // Можно будет выбрать только 5 постов
        ->add_fields(array(
          Field::make('file', 'file_complex_link', 'Файл')
          ->set_value_type('url')
          ->set_width(15),
          Field::make('text', 'file_complex_name', 'Название файла')   
          ->set_width(85),
        )), 
      ));

    Container::make('post_meta', 'single', 'Доп поля карточки')
	    ->show_on_template('single-competition.php')
	    ->add_fields(array(
        Field::make('complex', 'file_complex', 'Блок с файлами')
        // ->set_max(3) // Можно будет выбрать только 5 постов
        ->add_fields(array(
          Field::make('file', 'file_complex_link', 'Файл')
          ->set_value_type('url')
          ->set_width(15),
          Field::make('text', 'file_complex_name', 'Название файла')   
          ->set_width(85),
        )), 
		    Field::make('text', 'custom_post_date', 'Дата для карточки')->set_width(50),
		    Field::make('text', 'custom_post_adress', 'Адрес для карточки')->set_width(50),
      ));

      Container::make('post_meta', 'single_bn', 'Доп для баннера соревнований')
	    ->show_on_template('single-competition.php')
	    ->add_fields(array(
        Field::make('image', 'sor_banner_img', 'Картинка')
        ->set_width(50),
        Field::make('text', 'sor_banner_title', 'Заголовок банера')
        ->set_width(50), 
        Field::make('text', 'sor_banner_number', 'Дата проведения')
        ->set_width(50), 
        Field::make('text', 'sor_banner_month', 'Месяц проведения')
        ->set_width(50), 
        Field::make('text', 'sor_banner_year', 'Год проведения')
        ->set_width(100), 
        Field::make('text', 'banner_link_zayavka', 'Ссылка подать заявку')
        ->set_width(100),
        Field::make('text', 'link_to_competition_archive', 'Ссылка на архив'), 
        Field::make("checkbox", "competition_archive_checkbox", "Скрывать форму ") 
        // ->help_text('Активирует форму')
          ->set_width( 5 ),
      ));
?>