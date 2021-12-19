<?php

namespace Database\Factories;

use App\Models\DataSurvey;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class IdDataSurveysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id_user = User::pluck('id_user');
        return [
            'id_user' => $this->faker->randomElement($id_user),
            'status_data' => $this->faker->randomElement(['Lengkap', 'Belum Lengkap']),
            'data_stat' => $this->faker->numberBetween(0, 100)
        ];
    }
}
