<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$successLogger = new Logger("Add logger"); 
$successLogger->pushHandler(new StreamHandler('logs/success/success', Logger::INFO)); 
$successLogger->info('At the' . ' ' . date("Y-m-d H:i:s") . ' ' . "this news was added"); 

/*
$errorLogger = new Logger("error logger"); 
$errorLogger->pushHandler(new StreamHandler('logs/error/error', Logger::ERROR)); 
$errorLogger->error("Wrong thing at" . ' ' . date("Y-m-d H:i:s"));
*/