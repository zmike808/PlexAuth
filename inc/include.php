<?php
	//Include all the files needed for PlexAuth
	$path = __DIR__;
	//Adds inc directory to includes. Ensure this actually adds the path to where your files are located. /var/www/PlexAuth/inc
	set_include_path(get_include_path() . PATH_SEPARATOR . $path . ':' . $path . '/pages');
	$ini_array = parse_ini_file($path."/config.ini.php"); //Config file that has configurations for site.
	$GLOBALS['ini_array'] = $ini_array;
	if (!isset($_SESSION)) {
        session_start(); 
    }
	session_set_cookie_params(0 , '/', $GLOBALS['ini_array']['domain']);
	require_once('plex_function.php');
	require_once('PlexUser.class.php');
	require_once('RememberMe.php');
?>