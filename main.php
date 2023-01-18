<?php
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance

$faker = Faker\Factory::create();

echo $faker->name();

echo $faker->email();

echo $faker->text();
echo "<BR>";
echo $faker->phoneNumber("+972-##-###-####");
echo "<BR>";
echo $faker->jobTitle();