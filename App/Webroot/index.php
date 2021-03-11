<?php

define("DS", DIRECTORY_SEPARATOR);
define("WEBROOT", realpath(dirname(__FILE__)));
define("APPDIR", dirname(WEBROOT));
define("HONEYDIR", dirname(dirname(WEBROOT)) . DS . "HONEY");

require_once(HONEYDIR . DS . "Bootstrap.php");
