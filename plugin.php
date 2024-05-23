<?php
// PLUGIN INFORMATION
$GLOBALS['plugins']['Test'] = [ // Plugin Name
	'name' => 'Testyy', // Plugin Name
	'author' => 'CauseFX', // Who wrote the plugin
	'category' => 'Testing', // One to Two Word Description
	'link' => '', // Link to plugin info
	'license' => 'personal', // License Type use , for multiple
	'idPrefix' => 'TEST', // html element id prefix (All Uppercase)
	'configPrefix' => 'TEST', // config file prefix for array items without the hypen (All Uppercase)
	'version' => '1.0.1', // SemVer of plugin
	'image' => 'api/plugins/test/logo.png', // 1:1 non transparent image for plugin
	'settings' => true, // does plugin need a settings modal?
	'bind' => true, // use default bind to make settings page - true or false
	'api' => 'api/v2/plugins/test/settings', // api route for settings page (All Lowercase)
	'homepage' => false // Is plugin for use on homepage? true or false
];

class TestPlugin extends Organizr
{
	public function _pluginGetSettings()
	{
		return [
			'Sample Settings' => [
				$this->settingsOption('password-alt', 'TEST-pass-alt',['label' => 'Test Plugin Pass Alt']),
				$this->settingsOption('password', 'TEST-password',['label' => 'Test Plugin Password']),
				$this->settingsOption('text', 'TEST-text',['label' => 'Test Plugin Text'])
			],
			'FYI' => [
				$this->settingsOption('html', 'HTML Note', ['html' => '<span lang="en">This is just a note</span>']),
			]
		];
	}
}