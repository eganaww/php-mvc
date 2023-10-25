<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jenis>
 */
class JenisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $jenis = ['kursi', 'meja', 'monitor'];
        return [
            'nama_jenis' => $this->faker->randomElement($jenis),
            'kode_jenis' => $this->faker->unique()->regexify('[A-Z0-9]{5}'),
            'keterangan_jenis' => $this->faker->sentence(10),
        ];
    }
}
