<?php return [
    'plugin'    => [
        'name'        => 'Toolbox',
        'description' => 'Toolbox — это набор хэлперов для ускорения разработки на платформе October CMS.',
    ],
    'field'     => [
        'id'                       => 'ID',
        'name'                     => 'Название',
        'title'                    => 'Заголовок',
        'active'                   => 'Активность',
        'code'                     => 'Код',
        'slug'                     => 'URL',
        'external_id'              => 'Внешний ID',
        'preview_text'             => 'Краткое описание',
        'preview_image'            => 'Изображение-превью',
        'image'                    => 'Изображение',
        'images'                   => 'Изображения (галерея)',
        'description'              => 'Описание',
        'category'                 => 'Категория',
        'email'                    => 'Email',
        'phone'                    => 'Контактный телефон',
        'moderation'               => 'Модерация',
        'status'                   => 'Статус',
        'city'                     => 'Город',
        'address'                  => 'Адрес',
        'street'                   => 'Улица',
        'lat'                      => 'lat',
        'lng'                      => 'lng',
        'type'                     => 'Тип',
        'avatar'                   => 'Аватар',
        'property'                 => 'Свойство',
        'property_list_value'      => 'Допустимые значения свойства',
        'property_mode'            => 'Вид свойства',
        'property_tab'             => 'Название вкладки',
        'property_is_translatable' => 'Свойство доступно для перевода',
        'key'                      => 'Ключ',
        'value'                    => 'Значение',
        'date'                     => 'Дата',
        'datetime'                 => 'Дата и время',
        'time'                     => 'Время',
        'file'                     => 'Файл',

        'sort_order' => 'Сортировка',
        'created_at' => 'Создано',
        'updated_at' => 'Обновлено',
        'deleted_at' => 'Удалено',
        'deleted'    => 'Удаленные',
        'empty'      => 'Не выбрано',
        'password'   => 'Пароль',
    ],
    'tab'       => [
        'preview_content' => 'Превью-контент',
        'full_content'    => 'Полный контент',
        'images'          => 'Изображения',
        'settings'        => 'Настройки',
        'description'     => 'Описание',
        'properties'      => 'Свойства',
    ],
    'component' => [
        'property_name_error_404' => 'Отображать 404 страницу',
        'property_slug'           => 'Slug',
        'property_slug_required'  => 'Параметр Slug обязательный',
        'pagination'              => 'Пагинация',
        'pagination_desc'         => 'Вывод кнопок пагинации',

        'property_redirect_page'   => 'Страница перенаправления',
        'property_redirect_on'     => 'Перенаправление вкл.',
        'property_flash_on'        => 'Уведомление вкл.',
        'property_mode'            => 'Режим работы',
        'mode_submit'              => 'Отправка формы',
        'mode_ajax'                => 'Ajax',
    ],
    'message'   => [
        'create_success'        => 'Создание :name было успешно выполнено',
        'update_success'        => 'Редактирование :name было успешно выполнено',
        'delete_success'        => 'Удаление :name было успешно выполнено',
        'restore_confirm'       => 'Вы действительно хотите восстановить выбранные элементы?',
        'restore_success'       => 'Элементы восстановлены',
        'e_not_correct_request' => 'Некорректный запрос',
    ],
    'settings'  => [
        'count_per_page'          => 'Количество элементов на странице',
        'number_validation'       => 'Необходимо ввести число',
        'pagination_limit'        => 'Максимальное количество кнопок пагинации',
        'active_class'            => 'Класс активной кнопки',
        'button_list'             => 'Список кнопок',
        'button_list_description' => 'main,first,first-more,prev,prev-more,next,next-more,last,last-more',
        'button_name'             => 'Название кнопки',
        'button_limit'            => 'Отображить после страницы',
        'button_number'           => 'Отображить имя кнопки как число',
        'button_class'            => 'CSS класс',
        'last_button'             => '"Последняя"',
        'last-more_button'        => '"Еще" (перед "Последняя")',
        'next_button'             => '"Следующая"',
        'next-more_button'        => '"Еще" (перед "Следующая")',
        'prev_button'             => '"Предыдущая"',
        'prev-more_button'        => '"Еще" (после "Предыдущая")',
        'first_button'            => '"Первая"',
        'first-more_button'       => '"Еще" (после "Первая")',
        'main_button'             => '"Основная"',
    ],
    'button' => [
        'add_property_value'    => 'Добавить значение свойства',
    ],
    'type'      => [
        'input'       => 'Текстовое поле (input)',
        'textarea'    => 'Текстовое поле (textarea)',
        'checkbox'    => 'Множественный выбор из списка (checkbox)',
        'select'      => 'Выбор из списка (select)',
        'date'        => 'Поле выбора даты и времени (datetime)',
        'colorpicker' => 'Поле выбора цвета (colorpicker)',
        'mediafinder' => 'Файл',
    ],
];