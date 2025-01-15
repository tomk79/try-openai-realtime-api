<?php
require(__DIR__.'/../vendor/autoload.php');

if( is_file(__DIR__.'/../.env') ){
	$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../');
	$dotenv->load();
}

$result = file_get_contents(
	'https://api.openai.com/v1/realtime/sessions',
	false,
	stream_context_create([
		'http' => [
			'header'  => [
				"Authorization: Bearer ".$_ENV['OPENAI_API_KEY'],
				"Content-Type: application/json"
			],
			'method'  => 'POST',
			'content' => json_encode([
				'model' => 'gpt-4o-mini-realtime-preview-2024-12-17',
				'voice' => 'verse',
			]),
		],
	])
);
echo $result;

exit();
