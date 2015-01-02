<?php
//setting file
$settings = array(
		'view' => new \Slim\Views\Twig(),
    'templates.path' => '../View',
    'model' => (Object)array(
        "message" => "Hello World"
    )
);
 
return $settings;