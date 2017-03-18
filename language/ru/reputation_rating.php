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
	'RS_ANTISPAM_INFO'			=> 'Вы не можете так скоро изменить репутацию. Повторите попытку позже.',
	'RS_COMMENT_TOO_LONG'		=> 'Ваш комментарий слишком длинный: %1$s символов.<br />Максимальное количество символов: %2$s.',
	'RS_NEGATIVE'				=> 'Отрицательная',
	'RS_NO_COMMENT'				=> 'Поле комментария не должно быть пустым.',
	'RS_NO_POST'				=> 'Такое сообщение отсутствует.',
	'RS_NO_POWER'				=> 'Ваша мощность репутации слишком низкая.',
	'RS_NO_POWER_LEFT'			=> 'Недостаточно очков мощности репутации.<br/>Подождите, пока они не обновятся.<br/>Ваша мощность репутации %s',
	'RS_NO_USER_ID'				=> 'Запрошенный пользователь не существует.',
	'RS_POSITIVE'				=> 'Положительная',
	'RS_POST_RATING'			=> 'Оценка сообщения',
	'RS_RATE_BUTTON'			=> 'Оценка',
	'RS_SAME_POST'				=> 'Вы уже оценили это сообщение.<br />Вы дали %s баллов репутации.',
	'RS_SAME_USER'				=> 'Вы уже оценили этого пользователя.',
	'RS_SELF'					=> 'Вы не можете изменить репутацию самому себе.',
	'RS_USER_ANONYMOUS'			=> 'Вы не можете изменять репутацию анонимным пользователям.',
	'RS_USER_BANNED'			=> 'Вы не можете изменять репутацию заблокированным пользователям.',
	'RS_USER_CANNOT_DELETE'		=> 'У вас недостаточно прав для удаления этой репутации.',
	'RS_USER_DISABLED'			=> 'Вы не можете изменять репутацию.',
	'RS_USER_GAP'				=> 'Вы не можете изменять репутацию пользователю так быстро. Вы можете попытаться снова через %s.',
	'RS_USER_NEGATIVE'			=> 'Вы не можете изменять репутацию в отрицательную сторону.<br />Ваша репутацию должна быть выше %s.',
	'RS_USER_RATING'			=> 'Рейтинг пользователя',
	'RS_VIEW_DISALLOWED'		=> 'Вы не можете просматривать баллы репутации.',
	'RS_VOTE_POWER_LEFT_OF_MAX'	=> 'Осталось %1$d баллов мощности репутации из %2$d.<br />Максимум за голосование: %3$d',
	'RS_VOTE_SAVED'				=> 'Голосование сохранено',
	'RS_WARNING_RATING'			=> 'Предупреждение',
));
