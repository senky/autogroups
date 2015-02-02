<?php
/**
*
* Auto Groups extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
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
	'ACP_AUTOGROUPS_MANAGE'			=> 'Manage Auto Groups',
	'ACP_AUTOGROUPS_MANAGE_EXPLAIN'	=> 'Using this form you can add, edit, view and delete Auto Group configurations.',
	'ACP_AUTOGROUPS_ADD'			=> 'Add Auto Groups',
	'ACP_AUTOGROUPS_EDIT'			=> 'Edit Auto Groups',

	'ACP_AUTOGROUPS_GROUP_NAME'				=> 'Group',
	'ACP_AUTOGROUPS_GROUP_NAME_EXPLAIN'		=> 'Choose a group to automatically add/remove users from.',
	'ACP_AUTOGROUPS_CONDITION_NAME'			=> 'Auto Group type',
	'ACP_AUTOGROUPS_CONDITION_NAME_EXPLAIN'	=> 'Choose the type of condition on which users will be added or removed from this group.',
	'ACP_AUTOGROUPS_MIN_VALUE'				=> 'Minimum value',
	'ACP_AUTOGROUPS_MIN_VALUE_EXPLAIN'		=> 'Users will be added to this group if they exceed the minimum value.',
	'ACP_AUTOGROUPS_MAX_VALUE'				=> 'Maximum value',
	'ACP_AUTOGROUPS_MAX_VALUE_EXPLAIN'		=> 'Users will be removed from this group if they exceed the maximum value. Leave this field empty if you do not want users to be removed.',
	'ACP_AUTOGROUPS_DEFAULT'				=> 'Make group default',
	'ACP_AUTOGROUPS_DEFAULT_EXPLAIN'		=> 'Make this the user’s new default group.',
	'ACP_AUTOGROUPS_NOTIFY'					=> 'Notify users',
	'ACP_AUTOGROUPS_NOTIFY_EXPLAIN'			=> 'Send a notification to users after being automatically added or removed from this group.',

	'ACP_AUTOGROUPS_CREATE_RULE'	=> 'Create new Auto Group',
	'ACP_AUTOGROUPS_EMPTY'			=> 'There are no auto groups.',
	'ACP_NO_GROUPS'					=> 'There are no user groups.',
	'ACP_SUBMIT_SUCCESS'			=> 'Auto group successfully configured.',

	// Conditions
	'AUTOGROUPS_TYPE_POSTS'			=> 'Posts',
	'AUTOGROUPS_TYPE_MEMBERSHIP'	=> 'Membership Days',
	'AUTOGROUPS_TYPE_WARNINGS'		=> 'Warnings',
));
