<?php

	$routes->get('/', 'Home::index', ['as' => 'home']);

	$routes->group('definitions', function ($routes) {

		$routes->group('subscribers', function ($routes) {
			$routes->match(['get', 'post'], '/', 'Definitions\Subscribers::list', ['as' => 'definitions.subscribers']);
			$routes->match(['get', 'post'], 'add', 'Definitions\Subscribers::add', ['as' => 'definitions.subscribers.add']);
		});

	});
