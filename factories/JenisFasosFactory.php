<?php

namespace Database\Factories;

use App\Models\IdDataSurveys;
use Illuminate\Database\Eloquent\Factories\Factory;

class JenisFasosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id_data = IdDataSurveys::pluck('id_data');
        return [
            'id_data' => $this->faker->randomElement($id_data),
            'nama_fasos' => $this->faker->word(),
            'jml_fasos' => $this->faker->numberBetween(2, 10)
        ];
    }
}
