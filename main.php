<?php
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance

$faker = Faker\Factory::create();

use Firebase\JWT\JWT;


$key = 'aac';
$payload = [
    'id'=>45678923,
    'name'=>$faker->name(),
    'email'=>$faker->email(),
];


$jwt = JWT::encode($payload, $key, 'HS256');

echo $jwt;