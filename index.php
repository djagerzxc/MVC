<?php
require_once 'application/init.php';
if (INSECURE_REQUESTS && USER_AGENT && ACCEPT && ACCEPT_ENCODING && ACCEPT_LANGUAGE)
{
	new Application(true);
}
else
{
	echo HTML_ERROR;
}