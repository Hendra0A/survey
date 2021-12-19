<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SurveyorFactory extends Factory
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
            'nama_lengkap' => $this->faker->name(),
            'email' => $this->faker->email(),
            'jenis_kelamin' => $this->faker->randomElement(['pria', 'wanita']),
            'no_hp' => $this->faker->phoneNumber(),
            'foto_profil' => 'https://source.unsplash.com/random',
            'alamat' => $this->faker->address
        ];
    }
}
