<?php
const CONTROLLER = 'Home';
const METHOD     = 'index';
const PARAMS     = [];

define('INSECURE_REQUESTS',$_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS']);
define('USER_AGENT',$_SERVER['HTTP_USER_AGENT']);
define('ACCEPT',$_SERVER['HTTP_ACCEPT']);
define('ACCEPT_ENCODING',$_SERVER['HTTP_ACCEPT_ENCODING']);
define('ACCEPT_LANGUAGE',$_SERVER['HTTP_ACCEPT_LANGUAGE']);

const HTML_ERROR = 'BROWSER NOT SUPPORTED';