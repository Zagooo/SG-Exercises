<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$successLogger = new Logger("Add logger"); 
$successLogger->pushHandler(new StreamHandler('../logs/success/success', Logger::INFO)); 

$errorLogger = new Logger("error logger"); 
$errorLogger->pushHandler(new StreamHandler('../logs/error/error', Logger::ERROR)); 

