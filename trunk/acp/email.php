<?php
/** 
*
* acp_email [Russian]
*
* @package language
* @version $Id: email.php,v 1.11 2007/01/26 16:09:16 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Здесь вы можете отправить email-сообщения всем пользователям или членам определённой группы.Для этого email-сообщение будет отправлено с email-адреса администратора конференции, with a blind carbon copy sent to all recipients. Если вы отправляете сообщения большой группе людей, пожалуйста, потерпите и не останавливайте процесс отправки до его полного завершения. Длительное время отправки является нормальным при массовой рассылке, вы будете уведомлены о завершении операции',
	'ALL_USERS'						=> 'Все пользователи',

	'COMPOSE'				=> 'Создать',

	'EMAIL_SEND_ERROR'		=> 'При отправке сообщения произошла одна или несколько ошибок. Пожалуйста, проверьте %sЖурнал ошибок%s для получения более полной информации.',
	'EMAIL_SENT'			=> 'Сообщение было отправлено.',
	'EMAIL_SENT_QUEUE'		=> 'Это сообщение поставлено в очередь для отправки.',

	'LOG_SESSION'			=> 'Вести журнал критических ошибок сеанса сассылки',

	'SEND_IMMEDIATELY'		=> 'Отправить немедленно',
	'SEND_TO_GROUP'			=> 'Отправить группе',
	'SEND_TO_USERS'			=> 'Отправить пользователям',
	'SEND_TO_USERS_EXPLAIN'	=> 'Сообщение будет отправлено по указанным адресам вместо указанной выше группы. Вводите каждое имя пользователя с новой строки.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Высокий',
	'MAIL_LOW_PRIORITY'		=> 'Низкий',
	'MAIL_NORMAL_PRIORITY'	=> 'Обычный',
	'MAIL_PRIORITY'			=> 'Приоритет расылки',
	'MASS_MESSAGE'			=> 'Ваше сообщение',
	'MASS_MESSAGE_EXPLAIN'	=> 'Пожалуйста, учтите, что вы можете использовать только обычный текст. Любая разметка будет удалена перед отправкой.',
	
	'NO_EMAIL_MESSAGE'		=> 'Вы должны ввести текст сообщения.',
	'NO_EMAIL_SUBJECT'		=> 'Вы должны указать тему сообщения.',
));

?>