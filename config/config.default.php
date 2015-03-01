<?php
return [
/**
 * Debug Level:
 *
 * Production Mode:
 * false: No error messages, errors, or warnings shown.
 *
 * Development Mode:
 * true: Errors and warnings shown.
 */
	'debug' => true,

/**
 * Configure basic information about the application.
 *
 * - namespace - The namespace to find app classes under.
 */
	'App' => [
		'namespace' => 'Mars',
	],

/**
 * Configure basic information about the bot.
 */
	'Bot' => [
		'id' => 1,
		'username' => '',
		'password' => '',
		'name' => 'Bot Mars',
		'avatar' => '624',
		'home' => 'http://github.com/Xety/MarsBot',

		//Admins of the bot.
		'admin' => [
			'1000069'
		]
	],

/**
 * Configure basic information about the room.
 *
 * - name - The name of the chat.
 * - id - The id of the chat.
 */
	'Room' => [
		'name' => 'xat_test2',
		'id' => '2',
	],

/**
 * Configure Module manager.
 *
 * - priority - All modules that need to be loaded before others.
 */
	'Modules' => [
		'priority' => []
	],

/**
 * Configure Packet manager.
 *
 * - priority - All packets that need to be loaded before others.
 */
	'Packets' => [
		'priority' => []
	],

/**
 * Configure basic information about the the commands.
 *
 * - prefix - Prefix used with command.
 */
	'Commands' => [
		'prefix' => '!'
	],

/**
 * Configure information about Pastebin.
 */
	'Pastebin' => [
		'apiDevKey' => 'zz',
		'apiPastePrivate' => '1',
		'apiPasteExpireDate' => '1M'
	]
];
