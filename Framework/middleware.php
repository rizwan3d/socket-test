<?php

use Slim\App;
use Selective\BasePath\BasePathMiddleware;
use App\Framework\Middleware\JsonErrorMiddleware;
use App\Framework\Factory\LoggerFactory;

return function (App $app) {
    // Parse json, form data and xml
    $app->addBodyParsingMiddleware();

    // Add the Slim built-in routing middleware
    $app->addRoutingMiddleware();

    $app->add(new BasePathMiddleware($app));

    $loggerFactory = $app->getContainer()->get(LoggerFactory::class);
    $logger = $loggerFactory->addFileHandler('error.log')->createLogger();

    // Handle exceptions
    $errorMiddleware = $app->addErrorMiddleware(true, true, true,$logger);    
    $errorMiddleware->setDefaultErrorHandler(JsonErrorMiddleware::class);
    
    // $app->add(CORSMiddleware::class);
};