<?php

/**
 * WEB_ROOT_FOLDER is the name of the parent folder you created these 
 * documents in.
 */
define('SERVER_ROOT', '/code/PHP2022/11_Yo_Own_MVC');

//yoursite.com is your webserver
define('SITE_ROOT', 'http://localhost:8080/PHP2022/11_Yo_Own_MVC/');

/**
 * Fetch the router
 */
require_once SERVER_ROOT . '/controllers/' . 'router.php';