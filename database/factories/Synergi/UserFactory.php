<?php

namespace Database\Factories\Synergi;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Synergi\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'comments' => $this->faker->sentence,
        ];
    }
}
