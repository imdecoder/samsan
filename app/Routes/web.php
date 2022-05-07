<?php

	$routes->get('/', 'Home::index', ['as' => 'home']);

	$routes->group('definitions', function ($routes) {

		$routes->group('subscribers', function ($routes) {
			$routes->match(['get', 'post'], '/', 'Definitions\Subscribers::list', ['as' => 'definitions.subscribers']);
			$routes->match(['get', 'post'], 'add', 'Definitions\Subscribers::add', ['as' => 'definitions.subscribers.add']);
			$routes->match(['get', 'post'], 'edit/(:any)', 'Definitions\Subscribers::edit/$1', ['as' => 'definitions.subscribers.edit']);
		});

		$routes->group('rates', function ($routes) {
			$routes->match(['get', 'post'], '/', 'Definitions\Rates::list', ['as' => 'definitions.rates']);
		});

	});

	$routes->group('entries', function ($routes) {

		$routes->group('endexes', function ($routes) {
			$routes->get('/', 'Entries\Endexes::list', ['as' => 'entries.endexes']);
			$routes->match(['get', 'post'], 'edit/(:any)', 'Entries\Endexes::edit/$1', ['as' => 'entries.endexes.edit']);
		});

	});
