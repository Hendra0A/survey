<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\RukoDpn;
use App\Models\Provinsi;
use App\Models\Surveyor;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\DataSurvey;
use App\Models\FotoSurvey;
use App\Models\IdDataSurveys;
use App\Models\JenisFasos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(5)->create();
        Surveyor::factory(5)->create();
        Provinsi::factory(10)->create();
        Kabupaten::factory(10)->create();
        Kecamatan::factory(10)->create();
        IdDataSurveys::factory(20)->create();
        DataSurvey::factory(20)->create();
        RukoDpn::factory(10)->create();
        FotoSurvey::factory(20)->create();
        JenisFasos::factory(10)->create();
    }
}
