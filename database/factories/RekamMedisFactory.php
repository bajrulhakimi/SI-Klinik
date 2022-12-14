<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RekamMedis>
 */
class RekamMedisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idmedis' =>$this->faker->bothify('####'),
            'riwayatpenyakit' =>$this->faker->name(),
            'poliklinik' =>$this->faker->text()
        ];
    }
}
