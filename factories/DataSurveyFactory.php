<?php

namespace Database\Factories;

use App\Models\Kecamatan;
use App\Models\IdDataSurveys;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataSurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id_kec = Kecamatan::pluck('id_kec');
        $id_data = IdDataSurveys::pluck('id_data');
        return [
            'id_data' => $this->faker->randomElement($id_data),
            'id_kec' => $this->faker->randomElement($id_kec),
            'nama_gang' => $this->faker->streetName(),
            'lokasi' => $this->faker->address(),
            'd_pjg_jalan' => $this->faker->randomFloat(2),
            'd_lbr_jalan' => $this->faker->randomFloat(2),
            'd_pjg_saluran' => $this->faker->randomFloat(2),
            'd_lbr_saluran' => $this->faker->randomFloat(2),
            'd_kdlm_saluran' => $this->faker->randomFloat(2),
            'kondisi_saluran' => $this->faker->sentence(5, 20),
            'luas_fasos' => $this->faker->randomFloat(2),
            'koordinat_fasos' => $this->faker->latitude(-90, 90),
            'jml_rumah_layak' => $this->faker->numberBetween(0, 100),
            'jml_rumah_tdklayak' => $this->faker->numberBetween(0, 100),
            'jml_rumah_kosong' => $this->faker->numberBetween(0, 100),
            'jml_rumah_developer' => $this->faker->numberBetween(0, 100),
            'jml_rumah_swadaya' => $this->faker->numberBetween(0, 100),
            'pos_jaga' => $this->faker->sentence(2, 5),
            'ruko_dpn_kanan' => $this->faker->randomElement(['ada', 'tidak ada']),
            'ruko_dpn_kiri' => $this->faker->randomElement(['ada', 'tidak ada'])
        ];
    }
}
