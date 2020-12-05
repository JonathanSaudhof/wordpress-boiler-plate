<?php

require(__DIR__ . '/vendor/autoload.php');

$ENV_FILES= [
  "local"=>".env.local",
  "production" => "env.production"
];

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, $ENV_FILES[getenv("WP_ENV")]);


$dotenv->load();
