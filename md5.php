<?php
error_reporting(0);
$pisah [1] = "270fc93ebedda547b9ed3e0a852cdd8c";

require "class_curl.php";
$banner = " \e[36;1m

		#######
 #    #  #####  #
 ##  ##  #    # #
 # ## #  #    #  #####
 #    #  #    #       #
 #    #  #    # #     #
 #    #  #####   #####

[#] md5 decrypter [#]

Github : https//github.com/novalers123/\n\e[0;1m
";
echo $banner;

echo "input md5 here : ";

$input = trim(fgets(STDIN));

	// open curl
	$curl = new curl();
    $curl->cookies('cookies/'.md5($_SERVER['REMOTE_ADDR']).'.txt');
    $curl->ssl(0, 2);
	// open website
	$url = "https://md5.gromweb.com/?md5=$input";
	$page = $curl->get($url);

//	check valid or not
	if(inStr($page, 'was succesfully reversed into the string')){
	 $pwd = getStr($page, '<em class="long-content string">','</em></p>');
	 print_r("\e[32;1mLIVE \e[0;1m| $input | " . $pwd. "\n");
	} else {
		print_r("\e[31;1mDIE\e[0;1m \e[32;1m:)\e[0;1m" . "\n");
	}

?>