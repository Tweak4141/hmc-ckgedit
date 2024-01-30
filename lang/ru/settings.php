<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author Impeck <impeck@ya.ru>
 * @author Nikita <obraztsov568@gmail.com>
 * @author Ianka Kryukov <IanisKr@mail.ru>
 * @author serg <sergey_art82@inbox.ru>
 * @author Artem Trutko <trutko@facebook.com>
 * @author Evgeniy Bekhterev <jbe@mail.ru>
 */
$lang['fck_preview']           = 'FCK предварительного просмотра группы';
$lang['guest_toolbar']         = 'Отображать ли панель для гостей';
$lang['guest_media']           = 'Могут ли гости вставлять ссылки на медиа файлы';
$lang['open_upload']           = 'Могут ли гости загружать файлы';
$lang['default_fb']            = 'Доступ для просмотра файлов по умолчанию. Если выбрать none, то ACL не будет использоваться.';
$lang['openfb']                = 'Открытый просмотр файлов. Это дает пользователю доступ ко всей структуре папок, несмотря на то, имеет ли он права на это или нет. При этом ACL применяется для разрешения загрузки.';
$lang['dw_edit_display']       = 'Выбрать, какие пользователи имеют доступ к кнопке "Редактор DokuWiki". Варианты: "all"- для всех; "admin"- только для администраторов и менеджеров; "none" - ни для кого';
$lang['dw_edit_display_o_all'] = 'все';
$lang['dw_edit_display_o_admin'] = 'админ';
$lang['dw_edit_display_o_none'] = 'ничего';
$lang['smiley_as_text']        = 'Отображение смайлов в виде текста в CKeditor (будут по-прежнему отображаться как изображения в браузере)';
$lang['editor_bak']            = 'Сохранить резервную копию/&lt;namespace&gt;.ckgedit';
$lang['create_folder']         = 'Включить кнопку создания папки в файловом браузере (да/нет)';
$lang['dwedit_ns']             = 'Разделение запятыми список имен и/или страниц, где ckgedit автоматически переключается на родной Вики редактор; принимает частичные совпадения.';
$lang['acl_del']               = 'По умолчанию (флажок не установлен) пользователи с разрешением на загрузку могут удалять медиафайлы; если флажок установлен, то для удаления из папки пользователю требуется разрешение на удаление.';
$lang['auth_ci']               = 'Нечувствительный к регистру Логин id, так что можно войти и как USER и как user.';
$lang['nix_style']             = 'Для серверов Windows (Vista и более поздние версии). Этот параметр делает возможным доступ к данным\медиа через ckgedit\CKeditor\Пользовательские файлы, если ссылки на медиа и файлы были успешно создан в пользовательских файлах.';
$lang['direction']             = 'Установить языковое направление в CKeditor. <b>nocheck</b>: ckgedit оставит направление языка по умолчанию; <b>dokuwiki</b>: примет языковые настройки стандартного редактора Dokuwiki; <b>ltr</b>: С лева на право ; <b>rtl</b>: С права на лево.';
$lang['scayt_auto']            = 'Автоматически включить SCAYT орфографии. По умолчанию используется "ВКЛ.". Чтобы отключить SCAYT выберите "Выкл."';
$lang['scayt_auto_o_on']       = 'вкл.';
$lang['scayt_auto_o_off']      = 'выкл.';
$lang['scayt_auto_o_disable']  = 'отключить';
$lang['scayt_lang']            = 'Установить SCAYT языком по умолчанию.';
$lang['smiley_hack']           = 'Сбросьте URL-адрес для смайликов CKEditor при переходе на новый сервер. Это делается постранично, когда страница загружается для редактирования и сохраняется. Обычно эта опция должна быть отключена.';
$lang['complex_tables']        = 'Используйте алгоритм сложных таблиц. В отличие от стандартного разбора таблиц, это должно дать лучшие результаты при смешивании сложных схем rowspans и colspans. Но немного больше времени обработки.';
$lang['duplicate_notes']       = 'Установите это значение на true, если пользователи создают несколько сносок с одним и тем же текстом сноски; требуется для предотвращения повреждения заметок.';
$lang['winstyle']              = 'Используйте прямой путь к каталогу media вместо fckeditor/userfiles. Эта функция копирует <br />fckeditor/userfiles/.htaccess.security в data/media/.htaccess; если нет, то это должно быть сделано вручную';
$lang['other_lang']            = 'Ваш язык по умолчанию для CKEditor-это язык, установленный для вашего браузера. Однако здесь вы можете выбрать другой язык; он не зависит от языка интерфейса Dokuwiki.';
$lang['nofont_styling']        = 'Отображение стилей шрифтов в редакторе в виде разметки плагина. Посмотреть страницу плагина ckgedit в Dokuwiki.org для получения подробной информации.';
$lang['font_options']          = 'Удалить параметры шрифта.';
$lang['color_options']         = 'Удалить цветовые варианты.';
$lang['alt_toolbar']           = 'Функциями для того чтобы извлечь компоненты из панели инструментов';
$lang['mfiles']                = 'Включить поддержку mfile';
$lang['extra_plugins']         = 'Разделенный запятыми список дополнительных плагинов Ckeditor, которые будут добавлены на панель инструментов. См. Плагин ckgedit <a href=\'https://www.dokuwiki.org/plugin:ckgedit:configuration#extra_plugins\'>страница конфигурации</a> для получения более подробной информации';
$lang['allow_ckg_filebrowser'] = 'Выберите,  какие файловый/медиа браузеры могут использовать пользователи';
$lang['default_ckg_filebrowser'] = 'Выберите, какой файловый/медиа браузер используется по умолчанию. Это будет переопределено, если выбранный браузер не разрешен';
$lang['htmlblock_ok']          = 'При использовании <code>HTML_BLOCK</code>s необходимо включить либо этот параметр, либо опцию <code>htmlok</code> Dokuwiki. Он не представляет такого же уровня риска для безопасности, как <code>htmlok</code>. Тем не менее, он должен использоваться только в доверенной пользовательской среде, а не в открытой вики.';
$lang['dblclk']                = 'Установите значение <code>off</code>, чтобы отключить функцию двойного щелчка, которая позволяет редактировать разделы с помощью редактора Dokuwiki (см.: <a href=\'https://www.dokuwiki.org/plugin:ckgedit#direct_access_to_dokuwiki_editor\'>direct_access_to_dokuwiki_editor</a>)	';
$lang['preserve_enc']          = 'Сохранение urlencoding в URL-адресах, когда активна опция dokuwiki deaccent.';
$lang['gui']                   = 'Выберите графический интерфейс CKEditor.';
$lang['rel_links']             = 'Активируйте поддержку относительных внутренних и графических ссылок';
$lang['style_sheet']           = 'Используйте альтернативную таблицу стилей для окна редактирования CKEditor. Дополнительную информацию можно найти в <b>Инструмент CSS редактора CKEditor</b>, раздел <em>Дополнительные плагины</em> на странице <code>Администратора</code>. Или посмотрите страницу плагина ckgedit.';
$lang['imgpaste']              = 'Если установлен плагин imgpaste, используйте систему именования изображений imgpaste для сохранения ваших изображений.';
