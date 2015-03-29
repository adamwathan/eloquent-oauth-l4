<?php

return array(
	'table' => 'oauth_identities',
	'providers' => array(
		'facebook' => array(
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => URL::to('your/facebook/redirect'),
			'scope' => array(),
		),
		'google' => array(
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => URL::to('your/google/redirect'),
			'scope' => array(),
		),
		'github' => array(
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => URL::to('your/github/redirect'),
			'scope' => array(),
		),
		'linkedin' => array(
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => URL::to('your/linkedin/redirect'),
			'scope' => array(),
		),
		'instagram' => array(
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => URL::to('your/instagram/redirect'),
			'scope' => array(),
		),
	)
);
