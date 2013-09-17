<?php
/**
 * private.php
 *
 * Common parameters for the application on private -your local environment
 */
return array(
	'components' => array(
		// DB connection configurations. Set proper credentials for you application
		// or override this value in main-local.php
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=wowwoo',
			'username' => 'root',
			'password' => '',
		)
	),
	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => 'wowwoo'
		)
	),
	'params' => array(
		'env.code' => 'private'
	)
);
