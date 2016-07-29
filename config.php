<?php

// all possible options will be stored
$config = array();

// a unique key that identifies application - DO NOT LEAVE THIS EMPTY!
$config['app_key'] = '14fbf964645e7e2073ba953d68ac8729';

// a secret key to be used during encryption
$config['encryption_key'] = '';

/* 
how unique is each URL that is generated by this proxy app?
0 - no encryption, people can hotlink to your proxy
1 - unique to the IP address that generated it. A person that generated that URL, can bookmark it and visit it and any point
2 - unique to that session and IP address - URL no longer valid anywhere when browser session ends
*/

$config['url_mode'] = 0;

// plugins to load - plugins will be loaded in this exact order as in array
$config['plugins'] = array(
	'HeaderRewrite',
	'Stream',
	// ^^ do not disable any of the plugins above
	'Cookie',
	'Proxify',
	'UrlForm',
	// site specific plugins below
	'Youtube',
	'Twitter'
);

// additional curl options to go with each request
$config['curl'] = array(
	// CURLOPT_INTERFACE => '123.123.123.13',
	// CURLOPT_CONNECTTIMEOUT => 5
);

//$config['replace_title'] = 'Google Search';

//$config['error_redirect'] = "https://unblockvideos.com/#error={error_msg}";
//$config['index_redirect'] = 'https://unblockvideos.com/';

// this better be here other Config::load fails
return $config;

?>
