<?php

	// Your webhook URL
	$webhook = '[WEBHOOK URL]';

	// Encode the data
	$data = 'payload=' . json_encode(array(
		'username' => 'Incoming Bot',
		'icon_emoji' => ':rocket:',

		'fallback' => 'This is the fallback text',
		'pretext' => 'This is the pretext field value',
		'color' => '#0066ff',

		'fields' => array(
			array(
				'title' => 'First attachment title',
				'value' => 'First attachment value can be some long text as it goes full width'
			),
			array(
				'title' => 'Second attachment title',
				'value' => 'Second attachment value',
				'short' => true
			),
			array(
				'title' => 'Third attachment title',
				'value' => 'Third attachment value',
				'short' => true
			),
			array(
				'title' => 'Fourth attachment title which can be long too',
				'value' => 'The value of the fourth attachment',
				'short' => false
			),
			array(
				'title' => 'This is actually the fifth array title',
				'short' => true
			),
			array(
				'value' => 'And the sixth array value',
				'short' => true
			)
		)
	));

	// PHP cURL POST request
	$ch = curl_init($webhook);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);

	echo $result;
