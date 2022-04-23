<?php

	$routes->group('install', function ($routes) {
		$routes->get('table', 'Install::createTable');
		$routes->get('demo', 'Install::createDemo');
	});
