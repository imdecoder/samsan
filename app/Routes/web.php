<?php

	$routes->get('/', 'Home::index', ['as' => 'home']);
	$routes->group('definitions', function ($routes) {
		$routes->get('subscribers', 'Definitions\Subscribers::list', ['as' => 'definitions.subscribers']);
	});
