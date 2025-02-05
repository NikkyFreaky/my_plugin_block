<?php
$capabilities = [
	'block/my_plugin_block:myaddinstance' => [
		'captype' => 'write',
		'contextlevel' => CONTEXT_SYSTEM,
		'archetypes' => [
			'user' => CAP_ALLOW
		],
		'clonepermissionsfrom' => 'moodle/my:manageblocks'
	],
	'block/my_plugin_block:addinstance' => [
		'riskbitmask' => RISK_SPAM | RISK_XSS,
		'captype' => 'write',
		'contextlevel' => CONTEXT_BLOCK,
		'archetypes' => [
			'editingteacher' => CAP_ALLOW,
			'manager' => CAP_ALLOW
		],
		'clonepermissionsfrom' => 'moodle/site:manageblocks'
	],
];