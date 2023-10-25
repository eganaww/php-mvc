<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ruang>
 */
class RuangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ruang = ['Axioo_1', 'Axioo_2', 'Axioo_3'];
        return [
            'nama_ruang' => $this->faker->randomElement($ruang),
            'kode_ruang' => $this->faker->unique()->regexify('[A-Z0-9]{5}'),
            'keterangan_ruang' => $this->faker->sentence(10),
        ];
    }
}
