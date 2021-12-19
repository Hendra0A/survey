<?php

namespace Database\Factories;

use App\Models\IdDataSurveys;
use Illuminate\Database\Eloquent\Factories\Factory;

class FotoSurveyFactory extends Factory
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
            'foto' => 'https://source.unsplash.com/random',
            'keterangan' => $this->faker->paragraph(2, 4)
        ];
    }
}
