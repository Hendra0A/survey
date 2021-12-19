<?php

namespace Database\Factories;

use App\Models\IdDataSurveys;
use Illuminate\Database\Eloquent\Factories\Factory;

class RukoDpnFactory extends Factory
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
            'jenis_ruko' => $this->faker->randomElement(['kanan', 'kiri']),
            'jml_unit' => $this->faker->numberBetween(0, 100),
            'jml_lantai' => $this->faker->numberBetween(0, 100)
        ];
    }
}
