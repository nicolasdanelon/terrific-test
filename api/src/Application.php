<?php

namespace NicolasDanelon\Api;

use Faker\Factory;

class Application
{
    private $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function run(): void
    {
        echo json_encode([
            "name" => $this->faker->name(),
            "email" => $this->faker->email(),
            "time" => time(),
        ]);
    }
}
