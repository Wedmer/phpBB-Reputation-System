<?php
/**
*
* Reputation System
*
* @copyright (c) 2014 Lukasz Kaczynski
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_REPUTATION_SETTINGS_EXPLAIN'	=> 'Здесь вы можете изменить настройки Системы репутации. Они подразделены на группы.',
	'ACP_REPUTATION_RATE_EXPLAIN'		=> 'Здесь вы можете присудить дополнительные баллы репутации любым пользователям.',

	'RS_ENABLE'						=> 'Включить Систему репутации',

	'RS_SYNC'						=> 'Синхронизировать Систему репутации',
	'RS_SYNC_EXPLAIN'				=> 'Вы можете синхронизировать баллы репутации после массового удаления сообщений/тем/пользователей, изменения настроек репутации, изменения авторов сообщений, конверсий из других систем. Это может занять время. Вы получите уведомление по окончанию.<br /><strong>Внимание!</strong> Все баллы репутации, не соответствующие настройкам, будут удалены в процессе синхронизации. Рекомендуется создать резервную копию таблицы репутации (БД) перед синхронизацией.',
	'RS_SYNC_REPUTATION_CONFIRM'	=> 'Вы уверены, что хотите начать синхронизацию репутации?',

	'RS_TRUNCATE'				=> 'Очистить Систему репутации',
	'RS_TRUNCATE_EXPLAIN'		=> 'Эта процедура полностью удалит все данные.<br /><strong>Действие необратимо!</strong>',
	'RS_TRUNCATE_CONFIRM'		=> 'Вы уверены, что хотите очистить Систему репутации?',
	'RS_TRUNCATE_DONE'			=> 'Система репутации была очищена.',

	'REPUTATION_SETTINGS_CHANGED'	=> '<strong>Изменены настройки Системы репутации</strong>',

	// Setting legend
	'ACP_RS_MAIN'			=> 'Основное',
	'ACP_RS_DISPLAY'		=> 'Настройки отображения',
	'ACP_RS_POSTS_RATING'	=> 'Рейтинг сообщений',
	'ACP_RS_USERS_RATING'	=> 'Рейтинг пользователей',
	'ACP_RS_COMMENT'		=> 'Комментарии',
	'ACP_RS_POWER'			=> 'Мощность репутации',
	'ACP_RS_TOPLIST'		=> 'Топлист',

	// General
	'RS_NEGATIVE_POINT'				=> 'Разрешить отрицательные отзывы',
	'RS_NEGATIVE_POINT_EXPLAIN'		=> 'Если запрещено, пользователи не могут оставлять отрицательные отзывы.',
	'RS_MIN_REP_NEGATIVE'			=> 'Минимум репутации для отрицательного голосования',
	'RS_MIN_REP_NEGATIVE_EXPLAIN'	=> 'Сколько репутации требуется для оставления отрицательных отзывов. Установка значения в 0 отключает такое поведение.',
	'RS_WARNING'					=> 'Включить предупреждения',
	'RS_WARNING_EXPLAIN'			=> 'Пользователи с соответствующими правами могут давать отрицательную оценку при предупреждении пользователей.',
	'RS_WARNING_MAX_POWER'			=> 'Максимальная мощность репутации для предупреждений',
	'RS_WARNING_MAX_POWER_EXPLAIN'	=> 'Максимальная мощность репутации, разрешенная для предупреждений.',
	'RS_MIN_POINT'					=> 'Минимальные баллы',
	'RS_MIN_POINT_EXPLAIN'			=> 'Ограничивает минимальные баллы репутации, которые пользователь может получить. Установка значения в 0 отключает такое поведение.',
	'RS_MAX_POINT'					=> 'Максимальные баллы',
	'RS_MAX_POINT_EXPLAIN'			=> 'Ограничивает максимальные баллы репутации, которые пользователь может получить. Установка значения в 0 отключает такое поведение.',
	'RS_PREVENT_OVERRATING'			=> 'Предотвращение переоценки',
	'RS_PREVENT_OVERRATING_EXPLAIN'	=> 'Запретить пользователю оценивать одного и того же пользователя.<br /><em>Пример:</ em> если у пользователя A больше 10 записей о репутации и 85% из них принадлежат пользователю B, пользователь B не может оценить этого пользователя пока коэффициент его голосов выше 85%. Чтобы отключить эту функцию, установите одно или оба значения в 0.',
	'RS_PREVENT_NUM'				=> 'Количество записей репутации пользователя A равно или выше',
	'RS_PREVENT_PERC'				=> '<br />и соотношение голосов пользователя B равно или превышает',
	'RS_PER_PAGE'					=> 'Репутаций на страницу',
	'RS_PER_PAGE_EXPLAIN'			=> 'Сколько строк нужно отображать в таблицах репутации?',
	'RS_DISPLAY_AVATAR'				=> 'Показывать аватары',
	'RS_POINT_TYPE'					=> 'Петод показа баллов',
	'RS_POINT_TYPE_EXPLAIN'			=> 'Просмотр баалов репутации может отображаться либо как точное значение баллов, предоставленных пользователем, либо как изображение, показывающее плюс или минус для положительного или отрицательного результата. Метод Изображение полезен, если одно изменение репутации всегда равно одному баллу.',
	'RS_POINT_VALUE'				=> 'Значение',
	'RS_POINT_IMG'					=> 'Изображение',

	// Post rating
	'RS_POST_RATING'				=> 'Включить оценку сообщений',
	'RS_POST_RATING_EXPLAIN'		=> 'Разрешить пользователям оценивать сообщения.<br />Вы можете включить или отключить репутацию для любого форума на странице управления форумами.',
	'RS_ALLOW_REPUTATION_BUTTON'	=> 'Отправить и включить Систему репутации на всех форумах',
	'RS_ANTISPAM'					=> 'Анти-спам',
	'RS_ANTISPAM_EXPLAIN'			=> 'Запретить пользователям оценивать новые сообщения после того, как они оценили определенное количество сообщений в течение определенного количества часов. Чтобы отключить эту функцию, установите одно или оба значения в 0.',
	'RS_POSTS'						=> 'Количество оцененных сообщений',
	'RS_HOURS'						=> 'за последние часы',
	'RS_ANTISPAM_METHOD'			=> 'Метод проверки Анти-спама',
	'RS_ANTISPAM_METHOD_EXPLAIN'	=> 'Метод проверки Анти-спама. Метод "Один пользователь" проверяет репутацию, выставленную одному и тому же пользователю. Метод "Все пользователи" проверяет репутацию независимо от того, кто получил баллы.',
	'RS_SAME_USER'					=> 'Один пользователь',
	'RS_ALL_USERS'					=> 'Все пользователи',

	// User rating
	'RS_USER_RATING'				=> 'Разрешить оценку пользователей с их страницы профиля',
	'RS_USER_RATING_GAP'			=> 'Период между голосованием',
	'RS_USER_RATING_GAP_EXPLAIN'	=> 'Период времени, который пользователь должен ждать, прежде чем дать повторную оценку ранее оцененному пользователю. Установка значения в 0 отключает это поведение, пользователи могут оценивать других только один раз.',

	// Comments
	'RS_ENABLE_COMMENT'				=> 'Разрешить комментарии',
	'RS_ENABLE_COMMENT_EXPLAIN'		=> 'Когда включено, пользователи могут добавлять персональные комментарии вместе с рейтингом.',
	'RS_FORCE_COMMENT'				=> 'Обязать пользователя вводить комментарий',
	'RS_FORCE_COMMENT_EXPLAIN'		=> 'Пользователи должны будут добавить комментарий вместе оценкой.',
	'RS_COMMENT_NO'					=> 'Нет',
	'RS_COMMENT_BOTH'				=> 'Пользователи и сообщения',
	'RS_COMMENT_POST'				=> 'Только за сообщения',
	'RS_COMMENT_USER'				=> 'Только для пользователей',
	'RS_COMMEN_LENGTH'				=> 'Длина комментария',
	'RS_COMMEN_LENGTH_EXPLAIN'		=> 'Количество символов, допускаемых в комментарии. Установите 0 для неограниченного количества символов.',

	// Reputation power
	'RS_ENABLE_POWER'				=> 'Включить мощность репутации',
	'RS_ENABLE_POWER_EXPLAIN'		=> 'Мощность репутации - это то, что пользователи зарабатывают и тратят при голосовании. У новых пользователей мало мощности, активные и ветеранские пользователи получают больше мощности. Чем больше у вас мощности, тем больше вы можете проголосовать в течение определенного периода времени и тем больше влияния вы можете оказать на рейтинг другого пользователя или сообщение.<br/> Пользователи могут выбирать при голосовании, сколько мощности они потратят на голосование, давая больше быллов за интересные сообщения.',
	'RS_POWER_RENEWAL'				=> 'Время обновления мощности',
	'RS_POWER_RENEWAL_EXPLAIN'		=> 'Позволяет контролировать, как пользователи могут тратить заработанную мощность.<br/>При установке этого параметра, пользователи должны дождаться заданного интервала времени, прежде чем они смогут проголосовать снова. Чем больше репутации у пользователя, тем больше очков он может потратить в заданное время. Установка значения в 0 отключает это поведение, и пользователи могут голосовать без ожидания.',
	'RS_MIN_POWER'					=> 'Начальная/минимальная мощность репутации',
	'RS_MIN_POWER_EXPLAIN'			=> 'Определяет, сколько мощности репутации для недавно зарегистрированных пользователей, заблокированных пользователей и пользователей с низкой репутацией (или по другим критериям). Пользователи не могут опускаться ниже этого минимального количества. <br/> Разрешено 0-10. Рекомендовано 1.',
	'RS_MAX_POWER'					=> 'Максимальная мощьность одного голоса',
	'RS_MAX_POWER_EXPLAIN'			=> 'Максимальное количество мощности, которое пользователь может потратить за одно голосование. Даже если у пользователя есть миллионы баллов, они по-прежнему будут ограничены этим максимальным числом при голосовании. Пользователи будут выбирать это из выпадающего меню: от 1 до X<br/>Разрешено 1-20. Рекомендовано: 3.',
	'RS_POWER_EXPLAIN'				=> 'Объяснение мощности репутации',
	'RS_POWER_EXPLAIN_EXPLAIN'		=> 'Объяснять, как вычисляется мощность репутации для пользователей.',
	'RS_TOTAL_POSTS'				=> 'Увеличивает мощность с количеством сообщений',
	'RS_TOTAL_POSTS_EXPLAIN'		=> 'Пользователь получит 1 мощность репутации за каждое X количество сообщений, установленных здесь.',
	'RS_MEMBERSHIP_DAYS'			=> 'Увеличивает мощность по сроку регистрации пользователя',
	'RS_MEMBERSHIP_DAYS_EXPLAIN'	=> 'Пользователь получит 1 мощность репутации за каждое X количество дней, установленных здесь.',
	'RS_POWER_REP_POINT'			=> 'Увеличивает мощность в завимисомти от репутации',
	'RS_POWER_REP_POINT_EXPLAIN'	=> 'Пользователь получит 1 мощность репутации за каждое X количество баллов репутации, установленных здесь.',
	'RS_LOSE_POWER_WARN'			=> 'Потеря мощности из-за предупреждений',
	'RS_LOSE_POWER_WARN_EXPLAIN'	=> 'Каждое предупреждение снижает силу репутации на указанное количество баллов. Предупреждения истекают в соответствии с настройками в Общие -> Конфигурация -> Настройки конференции.',

	// Toplist
	'RS_ENABLE_TOPLIST'				=> 'Включить Топлист',
	'RS_ENABLE_TOPLIST_EXPLAIN' 	=> 'Отображение списка пользователей с наибольшим количеством баллов репутации на главной странице.',
	'RS_TOPLIST_DIRECTION'			=> 'Направление списка',
	'RS_TOPLIST_DIRECTION_EXPLAIN'	=> 'Отображение пользователей в списке в горизонтальном или вертикальном направлении.',
	'RS_TL_HORIZONTAL'				=> 'Горизонтально',
	'RS_TL_VERTICAL'				=> 'Вертикально',
	'RS_TOPLIST_NUM'				=> 'Количество пользователей для отображения',
	'RS_TOPLIST_NUM_EXPLAIN'		=> 'Количество пользователей, отображаемых в топлисте.',

	// Rate module
	'POINTS_INVALID'	=> 'Поле баллов должно содержать только цифры.',
	'RS_VOTE_SAVED'		=> 'Ваш голос был успешно сохранен',
));
